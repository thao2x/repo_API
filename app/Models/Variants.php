<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Product;

class Variants extends Model
{
    use HasFactory;

    protected $fillable = ['size', 'color', 'price', 'featured_image'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'productId');
    }
}
