<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    @if ($errors->has('search_error'))
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('search_error') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4" style="color: #6c757d;">Trip Search</h2>
                    <div class="tab-content mt-3">
                        <div id="flight" class="tab-pane active">
                            <form action="{{ route('trip.search.submit') }}" id="tripForm" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="flight_type">Flight Type</label>
                                    <select id="flight_type" class="form-control" name="type">
                                        <option value="oneway">One-way</option>
                                        <option value="round">Round</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="from">From:</label>
                                    <select id="departure" name="departure" class="form-control" required>
                                        <option value="">Select departure airport</option>
                                        @foreach($airports as $airport)
                                            <option value="{{ $airport->id }}">{{ $airport->city->name."(".$airport->city->iata_code.") - ".$airport->name ."(".$airport->iata_code.")"}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="to">To:</label>
                                    <select id="arrival" name="arrival" class="form-control" required>
                                        <option value="">Select Arrival airport</option>
                                        @foreach($airports as $airport)
                                            <option value="{{ $airport->id }}">{{ $airport->city->name."(".$airport->city->iata_code.") - ".$airport->name ."(".$airport->iata_code.")"}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="depart">Depart Date:</label>
                                    <input type="date" class="form-control" id="depart" name="depart" required>
                                </div>
                                <div class="form-group">
                                    <label for="return">Return Date For Round Trip:</label>
                                    <input type="date" class="form-control" id="return" name="return">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Get Trips</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
