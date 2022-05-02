<!DOCTYPE html>
<html>

<head>
    <title>Add Map</title>

    <link rel="stylesheet" href="<?php echo asset('style.css')?>" type="text/css">

    <script src="{{ asset('index.js') }}"></script>
</head>

<body>
    <h3>TESTE Google Maps </h3>
    <!--The div element for the map -->
    <div id="map"></div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key="
        async></script>

</body>

</html>