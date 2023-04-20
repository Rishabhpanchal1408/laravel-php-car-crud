<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDetails extends Model
{
    protected $table = 'car_tbl';
    public $timestamps = false;
    protected $primaryKey = 'car_id';
    use HasFactory;
}
