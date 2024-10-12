<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // カテゴリを持つ商品を取得できるように紐づけ
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
