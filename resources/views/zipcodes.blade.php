<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zip Code Distance Calculator</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-1 mt-5 heading-center">Zip Code Distance Calculator</h1>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col mb-3">
            <label for="zip-input">
                <h3>Please enter a ZIP Code to add to your trip</h3>
            </label>
            <div class="input-group mb-3">
                <input id="zip-input" type="text" class="form-control">
                <button class="btn btn-primary" type="button">Submit</button>
            </div>
            <button class="btn btn-outline-danger" type="button">Start Over</button>
        </div>
        <div class="col mb-3">
            <div class="card">
                <div class="card-header">
                    <h2 id="your-trip" class="card-title mt-2 heading-center">Your Trip</h2>
                </div>
                <div class="card-body">
                    <h4 class="card-text alert alert-primary">Total Distance: </h4>
                    <label for="zip-list"><h3>The ZIP Codes you have entered</h3></label>
                    <p id="zip-list" class="border border-1 rounded" readonly></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html>
