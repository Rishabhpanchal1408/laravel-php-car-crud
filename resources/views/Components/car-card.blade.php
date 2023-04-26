@props(['car'])

<div class="card bg-light" id="shadow">
    <img src="https://imgd.aeplcdn.com/0x0/n/cw/ec/49376/f8-tributo-exterior-right-front-three-quarter-11.jpeg"
        class="card-img-top" alt="...">
    <div class="card-body">
        <h6 class="card-title text-center"><b>CAR DETAILS</b></h6>
        <p class="card-text"><b>Brand :</b> {{ $car->brand->brand_name }}</p>
        <p class="card-text"><b>Color :</b> {{ $car->color->color_name }}</p>
        <p class="card-text"><b>Engine :</b> {{ $car->engine->engine_name }}</p>
        <p class="card-text"><b>Type :</b> {{ $car->type->type_name }}</p>
        <p class="card-text"><b>Price :</b> {{ $car->car_price }}</p>
    </div>
</div>
