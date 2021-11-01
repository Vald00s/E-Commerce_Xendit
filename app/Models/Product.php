<?php

namespace App\Models;

use App\Stock;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        'id',
        'name',
        'brand',
        'price',
        'image',
        'gender',
        'category',
        'quantity',
    ];
    public function stock()
    {
        return $this->hasOne(Stock::class);
    }
}
