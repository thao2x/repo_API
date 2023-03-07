<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Variants;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'metaTitle', 'slug', 'summary', 'type', 'sku', 'image', 'discount', 'quantity', 'shop', 'publishedAt', 'content'];

    public function variants(): HasMany
    {
    	return $this->hasMany(Variants::class, 'productId');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'productId', 'categoryId');
    }
}
