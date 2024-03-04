<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Flight;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Services\TripService;
use Illuminate\Http\RedirectResponse;
use function PHPUnit\Framework\isEmpty;

class TripController extends Controller
{
    protected $tripService;
    public function __construct(TripService $tripService)
    {
        $this->tripService = $tripService;
    }
    public function search(): View
    {
        $data = $this->prepareFormData();

        return view('index', ['airports' => $data['airports'],'flights' => $data['flights'],'trips' => $data['trips']]);
    }
    public function prepareFormData(): array
    {
        return [
            'airports' => Airport::with('city')->get(),
            'flights' => Flight::with(['airline','departureAirport','arrivalAirport'])->get(),
            'trips' => Trip::all()
        ];
    }
    function index(): View
    {
       $data = $this->prepareFormData();

        return view('trip.trip', ['airports' => $data['airports'],'flights' => $data['flights'],'trips' => $data['trips']]);
    }
    public function getListFromRedis($searchId): array
    {
        return $this->tripService->getTripList($searchId);
    }

    public function list(Request $request)
    {
        $this->validateRequest($request);

        if (!empty(session('trips'))) {
            $trips = session('trips');
        } else {
//            $trips = $this->getListFromRedis($request->input('search_id'));
            $trips = Trip::filter($request->all());
            if($trips->isEmpty())
            {
                return view('list')->withErrors(['search_error' => 'No trips found. Please try again.']);
            }
            // Save trips to Redis
//            $this->tripService->saveSearch($trips->toArray(), $request->input('search_id'));
        }

        return view('list')->with('trips', $trips);
    }

    private function validateRequest(Request $request)
    {
        $request->validate([
            'departure' => 'required|integer',
            'arrival' => 'required|integer',
            'depart' => 'required|date',
            'return' => 'nullable|date',
            'type' => 'required|in:oneway,round',
            'search_id' => 'nullable|string',
        ]);
    }

    public function create(Request $request): RedirectResponse
    {
        $trip = Trip::create($request->except(['_token','flights']));
        $trip->flights()->attach($request['flights']);
        return redirect()->route('trip')->with('message', 'Trip has been created successfully')->setStatusCode(201);

    }
    public function delete($id): RedirectResponse
    {
        $trip = Trip::find($id);
        if ($trip) {
            $trip->flights()->delete();
            $trip->delete();
            return redirect()->route('trip')->with('message', 'Trip has been deleted successfully')->setStatusCode(204);
        } else {
            return redirect()->route('trip')->with('message', 'Trip Not Found')->setStatusCode(404);
        }
    }
    public function get($id)
    {
        $trip = Trip::find($id)->all();
        if($trip)  return response()->view('trip.view', $trip, 200);
        return redirect()->route('trip')->with('message', 'Trip Not Found')->setStatusCode(404);
    }
    public function searchTrip(Request $request)
    {
        $this->validateRequest($request);

        // Generate a search ID and retrieve trips from Redis or the database
        $searchId = $this->tripService->hashSearchParameters($request->except('_token'));
//        $trips = $this->getListFromRedis($searchId);

        $trips = Trip::filter($request->all());

        if($trips->isEmpty())
        {
            return redirect()->back()->withErrors(['search_error' => 'No trips found. Please try again.']);
        }
        //Save to Redis
//        $this->tripService->saveSearch($trips->toArray(), $searchId);
        $request['search_id'] = $searchId;
        return redirect()->route('trip.search.list', $request->except('_token'))->with('trips', $trips);
    }

}
