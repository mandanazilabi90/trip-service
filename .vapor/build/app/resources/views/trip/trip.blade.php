<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
{
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Trip Service</div>

                    <div class="card-body">
                        <!-- Form -->
                        <form method="POST" action="{{ route('trip.create') }}">
                        @csrf
                        <!-- Flight Type -->
                            <div class="form-group row">
                                <label for="flight_type" class="col-md-4 col-form-label text-md-right">Flight Type</label>
                                <div class="col-md-6">
                                    <select id="type" class="form-control" name="type">
                                        <option value="1">One-way</option>
                                        <option value="2">Round</option>
                                    </select>
                                </div>
                            </div>
                            <!-- From -->
                            <div class="form-group row">
                                <label for="from" class="col-md-4 col-form-label text-md-right">From</label>
{{--                                <div class="col-md-6">--}}
{{--                                    <input id="from" type="text" class="form-control" name="from" required autocomplete="from" autofocus>--}}
{{--                                </div>--}}
                                    <div class="col-md-6">
                                        <select id="departure_airport_id" name="departure_airport_id" class="form-control" required>
                                            <option value="">Select departure airport</option>
                                            @foreach($airports as $airport)
                                                <option value="{{ $airport->id }}">{{ $airport->city->name."(".$airport->city->iata_code.") - ".$airport->name ."(".$airport->iata_code.")"}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                            <!-- To -->
                            <div class="form-group row">
                                <label for="to" class="col-md-4 col-form-label text-md-right">To</label>
                                <div class="col-md-6">
                                    <select id="arrival_airport_id" name="arrival_airport_id" class="form-control" required>
                                        <option value="">Select Arrival airport</option>
                                        @foreach($airports as $airport)
                                            <option value="{{ $airport->id }}">{{ $airport->city->name."(".$airport->city->iata_code.") - ".$airport->name ."(".$airport->iata_code.")"}}</option>
                                        @endforeach
                                    </select>
                                </div>
{{--                                <div class="col-md-6">--}}
{{--                                    <input id="to" type="text" class="form-control" name="to" required autocomplete="to">--}}
{{--                                </div>--}}
                            </div>
                            <!-- Departure Date -->
                            <div class="form-group row">
                                <label for="departure_time" class="col-md-4 col-form-label text-md-right">Departure Date</label>
                                <div class="col-md-6">
                                    <input id="departure_time" type="date" class="form-control" name="departure_time" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="arrival_time" class="col-md-4 col-form-label text-md-right">Arrival Date</label>
                                <div class="col-md-6">
                                    <input id="arrival_time" type="date" class="form-control" name="arrival_time" required>
                                </div>
                            </div>
                            <!-- Stops -->
                            <div class="form-group row">
                                <label for="flights" class="col-md-4 col-form-label text-md-right">Stops</label>
                                <div>
                                    <select id="flights" class="form-control" multiple size="5" style="width: 100%; height: 200px;" name="flights[]" multiple>
                                        @foreach($flights as $flight)
                                            <option value="{{ $flight->id }}">{{$flight->flight_number. " From ".$flight->departureAirport->iata_code." To ".$flight->arrivalAirport->iata_code." Departs at: ". $flight->departure_time."(".$flight->departureAirport->timezone.")". "Arrives at :". $flight->arrival_time. "(".$flight->arrivalAirport->timezone.")" }}</option>
                                            Ex: AC301 from YUL to YVR departs at 7:35 AM (Montreal) and arrives at 10:05 AM (Vancouver).
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Create Trip</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- List -->
                <div class="card mt-4">
                    <div class="card-header">Trip List</div>
                    <div class="card-body">
                        <!-- Display your list of flights here -->
                        <ul class="list-group">

                            @foreach ($trips as $trip)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Flight: {{ $trip->id }}
                                    <div class="btn-group" role="group" aria-label="Flight Actions">
                                        <a href="{{ route('trip.get', $trip->id) }}" class="btn btn-primary btn-sm">Get</a>
                                        <form action="{{route('trip.delete', $trip->id)}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
{

</body>
</html>
