<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

@extends('layouts.main')

@section('container')
<h1  class="uk-margin-xlarge-left">Welcome to NoLife Store</h1>

<div height="400" class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">

    <ul class="uk-slider-items uk-grid uk-grid-match" uk-height-viewport="offset-top: true; offset-bottom: -50">
        <li class="uk-width-3-6">
            <div class="uk-cover-container">
                <img src="/img/Gambar1.jpg" alt="" uk-cover>
                <div class="uk-position-center uk-panel"><h1>1</h1></div>
            </div>
        </li>
        <li class="uk-width-3-6">
            <div class="uk-cover-container">
                <img src="/img/Gambar2.jpg" alt="" uk-cover>
                <div class="uk-position-center uk-panel"><h1>2</h1></div>
            </div>
        </li>
        <li class="uk-width-3-6">
            <div class="uk-cover-container">
                <img src="/img/Gambar3.jpg" alt="" uk-cover>
                <div class="uk-position-center uk-panel"><h1>3</h1></div>
            </div>
        </li>
        <li class="uk-width-3-6">
            <div class="uk-cover-container">
                <img src="/img/Gambar4.jpg" alt="" uk-cover>
                <div class="uk-position-center uk-panel"><h1>4</h1></div>
            </div>
        </li>
        <li class="uk-width-3-6">
            <div class="uk-cover-container">
                <img src="/img/Gambar5.jpg" alt="" uk-cover>
                <div class="uk-position-center uk-panel"><h1>5</h1></div>
            </div>
        </li>
        <li class="uk-width-3-6">
            <div class="uk-cover-container">
                <img src="/img/Gambar6.jpg" alt="" uk-cover>
                <div class="uk-position-center uk-panel"><h1>6</h1></div>
            </div>
        </li>
        <li class="uk-width-3-6">
            <div class="uk-cover-container">
                <img src="/img/Gambar7.jpg" alt="" uk-cover>
                <div class="uk-position-center uk-panel"><h1>7</h1></div>
            </div>
        </li>
        <li class="uk-width-3-6">
            <div class="uk-cover-container">
                <img src="/img/Gambar8.jpg" alt="" uk-cover>
                <div class="uk-position-center uk-panel"><h1>8</h1></div>
            </div>
        </li>
        <li class="uk-width-3-6 uk-height-3-6">
            <div class="uk-cover-container ">
                <img src="/img/Gambar9.jpg" alt="" uk-cover>
                <div class="uk-position-center uk-panel"><h1>9</h1></div>
            </div>
        </li>
        <li class="uk-width-3-6 ">
            <div class="uk-cover-container">
                <img src="/img/Gambar10.jpg" alt="" uk-cover>
                <div class="uk-position-center uk-panel"><h1>10</h1></div>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

</div>
<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <img src="/img/Undraw.png" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">VGA</h3>
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
            <h3 class="uk-card-title">Processor</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
    </div>
</div>
<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <img src="/img/Undraw.png" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">RAM</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
    </div>
</div>


@endsection
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
