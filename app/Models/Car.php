<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Hash;

class Car extends Model
{
    protected $fillable = ['car_brand', 'car_model', 'car_engine', 'car_color', 'car_type', 'car_price', 'car_img'];
    protected $table = 'car_tbl';
    public $timestamps = false;
    protected $primaryKey = 'car_id';

    public function brand(): HasOne
    {
        return $this->hasOne(Brand::class, 'brand_id', 'car_brand');
    }
    public function color(): HasOne
    {
        return $this->hasOne(Color::class, 'color_id', 'car_color');
    }
    public function engine(): HasOne
    {
        return $this->hasOne(Engine::class, 'engine_id', 'car_engine');
    }
    public function type(): HasOne
    {
        return $this->hasOne(Type::class, 'type_id', 'car_type');
    }

    use HasFactory;
}
