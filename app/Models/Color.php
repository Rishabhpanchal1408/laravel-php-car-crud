<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = ['color_name'];
    protected $table = 'color_tbl';
    public $timestamps = false;
    protected $primaryKey = 'color_id';
    use HasFactory;
}
