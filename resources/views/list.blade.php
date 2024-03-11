<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Array in Blade</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Flights Information</h1>
    @if ($errors->has('search_error'))
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('search_error') }}
        </div>
    @endif
    <a href="{{ route('trip.search') }}">Back to Search Page</a>
    @if(!empty($trips))
            @foreach($trips as $trip)
                <div class="card">
                    <div class="card-header">
                        Trip Details
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                                <strong>Departure Airport:</strong> {{ $trip['departure_airport']['name'] }}<br>
                                <strong>Arrival Airport:</strong> {{ $trip['arrival_airport']['name'] }}<br>
{{--                                <strong>Departure Time:</strong> {{ $trip['departure_time'] }}<br>--}}
{{--                                <strong>Return Time:</strong> {{ $trip['return_time'] }}<br>--}}
                                <strong>Trip Type:</strong> {{$trip['type']}}<br>
                                <strong>Total Price:</strong> {{!empty($trip['sum_of_prices']) ? $trip['sum_of_prices'] : $trip['flights'][0]['price']}}<br>
                            </div>
                            <div class="col-md-6">
                                <h5>Flights Details</h5>
                                <ul class="list-unstyled">
                                    @foreach($trip['flights'] as $index=>$flight)
                                        <li>Flight Number: {{ $flight['flight_number'] }}</li>

                                        <li>From: {{ $flight['departure_airport']['name'] }}</li>
                                        <li>To: {{ $flight['arrival_airport']['name'] }}</li>
                                        <li>Flight Departure Time: {{ $flight['departure_time']."(".$flight['departure_airport']['timezone'].")" }}</li>
                                        <li>Flight Arrival Time: {{$flight['arrival_time']. "(".$flight['arrival_airport']['timezone']. ")"}}</li>
                                        <li>Flight Price: {{ $flight['price'] }}</li>
                                        @if($index < count($trip['flights']) - 1)
                                            <hr>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    @endif
</div>

<!-- Bootstrap JS and jQuery (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
