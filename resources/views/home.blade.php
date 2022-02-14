@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-1 mt-5 heading-center">Zip Code Distance Calculator</h1>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 mb-5">
            <form>
                <label class="h3" for="zip-input">
                    Please enter a ZIP Code to add to your trip
                </label>
                <div class="input-group mb-3">
                    <input id="zip-input" type="text" class="form-control">
                    <button class="btn btn-primary" type="submit" onclick="getDistance()">Submit</button>
                </div>
                <button class="btn btn-outline-danger" type="button" onclick="clearSession()">Start Over</button>
            </form>
        </div>
        <div class="col-md-6 mb-5">
            <div class="card">
                <div class="card-header">
                    <h2 id="your-trip" class="card-title mt-2 heading-center">Your Trip</h2>
                </div>
                <div class="card-body">
                    <h4 class="card-text alert alert-primary">Total Distance: <span id="total-distance">0</span> km</h4>
                    <label class="h3" for="zip-list">The ZIP Codes you have entered</label>
                    <p id="zip-list" class="p-3 border border-1 rounded"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
