<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_url',
        'cost_price',
        'selling_price'
    ];

    /*private function purchase(): HasMany{
        return $this->belongsToMany(Purchase::class);
    }*/

}
