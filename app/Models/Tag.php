<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'tag_code', 'tag_type'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
