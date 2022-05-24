<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $attributes = [
        'active'=>true
    ];
    public function images()
    {
        return $this->hasMany(Image::class,"product_id");
    }
}
