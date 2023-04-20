@props(['car'])

<div class="card bg-light" id="shadow">
    <img src="https://imgd.aeplcdn.com/0x0/n/cw/ec/49376/f8-tributo-exterior-right-front-three-quarter-11.jpeg"
        class="card-img-top" alt="...">
    <div class="card-body text-center">
        <h6 class="card-title "><b>CAR DETAILS</b></h6>
        <p class="card-text">{{ $car->car_brand }}</p>
        {{-- <p class="card-text">{{ $car->car_color }}</p> --}}
        {{-- <p class="card-text">{{ $car->car_engine }}</p> --}}
        {{-- <p class="card-text">{{ $car->car_type }}</p> --}}
        <p class="card-text"><b>Car Price :</b>{{ $car->car_price }}</p>
    </div>
</div>
