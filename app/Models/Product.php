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
        'media',
        'category_id',
    ];

    // Quan hệ: 1 sản phẩm thuộc 1 thể loại
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
