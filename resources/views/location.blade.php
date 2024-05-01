!<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Geolocation</title>
</head>
<body>
    <div class="container pt-4">
        <h1 class="text-danger d-flex justify-content-center">How to get Geolocation</h1>
        <hr>
        <div class="d-flex justify-content-center">
            <div class="pt-1">
                @if ($location)
                    <p><b class="px-4">Ip Address:</b>{{ $location->ip }}</p>
                    <p><b class="px-4">Country Name:</b>{{ $location->countryName }}</p>
                    <p><b class="px-4">Country Code:</b>{{ $location->countryCode }}</p>
                    <p><b class="px-4">Region Name:</b>{{ $location->regionName }}</p>
                    <p><b class="px-4">Region Code:</b>{{ $location->regionCode }}</p>
                    <p><b class="px-4">City Name:</b>{{ $location->cityName }}</p>
                    <p><b class="px-4">Zip Code:</b>{{ $location->zipCode }}</p>
                    <p><b class="px-4">Latitude:</b>{{ $location->latitude }}</p>
                    <p><b class="px-4">Longitude:</b>{{ $location->longitude }}</p>
                    <p><b class="px-4">Area Code:</b>{{ $location->areaCode }}</p>
                    <p><b class="px-4">Time Zone:</b>{{ $location->timezone }}</p>
                @else
                    <h2>Not Found!</h2>
                @endif
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>