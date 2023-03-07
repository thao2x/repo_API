<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'metaTitle', 'slug', 'content'];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_categories', 'categoryId');
    }
}
