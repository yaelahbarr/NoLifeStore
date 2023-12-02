@extends('layouts.main')

@section('container')
<h1 class="uk-margin-xlarge-left">Selamat datang di NoLife Store</h1>

<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <img src="https://source.unsplash.com/500x500/" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">Media Left</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
    </div>
</div>

<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
        <img src="https://source.unsplash.com/500x500/" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">Media Right</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
    </div>
</div>

@endsection
