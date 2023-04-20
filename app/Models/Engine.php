<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engine extends Model
{
    protected $fillable = ['engine_name'];
    protected $table = 'engine_tbl';
    public $timestamps = false;
    protected $primaryKey = 'engine_id';
    use HasFactory;
}
