<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content={{ csrf_token() }}>
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
        <div class="col-md-6 mb-5">
            <label class="h3" for="zip-input">
                Please enter a ZIP Code to add to your trip
            </label>
            <div class="input-group mb-3">
                <input id="zip-input" type="text" class="form-control">
                <button class="btn btn-primary" type="button" onclick="getDistance()">Submit</button>
            </div>
            <button class="btn btn-outline-danger" type="button">Start Over</button>
        </div>
        <div class="col-md-6 mb-5">
            <div class="card">
                <div class="card-header">
                    <h2 id="your-trip" class="card-title mt-2 heading-center">Your Trip</h2>
                </div>
                <div class="card-body">
                    <h4 class="card-text alert alert-primary">Total Distance: <span id="#total-distance"></span></h4>
                    <label class="h3" for="zip-list">The ZIP Codes you have entered</label>
                    <p id="zip-list" class="border border-1 rounded" readonly></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

<script type="text/javascript">
    const getDistance = () => {
        e.preventDefault();
        console.log("Test.");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '/distance',
            data:'_token = <?= csrf_token() ?>',
            success: (data) => {
                $('#zip-list').append(data);
                $('#total-distance').html(data);
            }
        });
    };
</script>

</body>
</html>
