@extends('layout')
@section('data')
    <!--Carousel-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/120049/pexels-photo-120049.jpeg?cs=srgb&dl=pexels-mike-b-120049.jpg&fm=jpg"
                    alt="Los Angeles" class="d-block" style="width:100%">
            </div>
        </div>
    </div>

    <!--Cards-->
    <div class="container row mx-auto pt-4">

        @foreach ($cars as $car)
            <div class="col-4 p-3">
                <x-car-card :car="$car" />
            </div>
        @endforeach
    </div>
@endsection
