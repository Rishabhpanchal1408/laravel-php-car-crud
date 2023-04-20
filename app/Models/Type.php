<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['type_name'];
    protected $table = 'type_tbl';
    public $timestamps = false;
    protected $primaryKey = 'type_id';
    use HasFactory;
}
