<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description',
        'image_url',
        'cost_price',
        'selling_price',
        'created_at',
        'updated_at'
    ];

    /*private function purchase(): HasMany{
        return $this->belongsToMany(Purchase::class);
    }*/

}
