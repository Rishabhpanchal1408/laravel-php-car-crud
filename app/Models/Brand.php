<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Brand extends Model
{
    protected $fillable = ['brand_name'];
    protected $table = 'brand_tbl';
    public $timestamps = false;
    protected $primaryKey = 'brand_id';
    use HasFactory;
}
