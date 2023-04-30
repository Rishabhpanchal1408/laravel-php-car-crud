@props(['car'])

<div class="card bg-light">
    <a href={{ 'car/' . $car->car_id }}>
        <img src="https://imgd.aeplcdn.com/0x0/n/cw/ec/49376/f8-tributo-exterior-right-front-three-quarter-11.jpeg"
            class="card-img-top" alt="...">
    </a>
    <div class="card-body">
        <p class="card-text m-0" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif   ">
            {{ $car->brand->brand_name }}
            {{ $car->car_model }}</p>
        <p class="card-text" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Strating From
            ₹{{ $car->car_price }}
        </p>
        <div class="d-grid">
            <button class="btn btn-outline-primary rounded-1 ">Buy Now</button>
        </div>
    </div>
</div>
