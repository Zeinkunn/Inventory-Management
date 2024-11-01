<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'price',
        'categories_id', // Ganti 'category' dengan 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
