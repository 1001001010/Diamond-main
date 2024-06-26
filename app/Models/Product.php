<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'description',
    'price',
    'photo',
    'volume',
    'compound',
    'brand'
    ];

    public function likes()
    {
        return $this->belongsTo(Like::class);
    }
    public function basket()
    {
        return $this->belongsTo(Basket::class);
    }
    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }
}
