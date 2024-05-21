<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'category', 'price', 'brand', 'stock', 'tag_code'
    ];

    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
}

// class Product
// {
//     public static function all()
//     {
//         return[
//             [
//                 'id' => '1',
//                 'slug' => 'sepatu-nike',
//                 'name' => 'Sepatu Nike',
//                 'brand' => 'Nike',
//                 'category' => 'Shoes',
//                 'price' => '450000',
//                 'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis illum nisi, laudantium quis nam hic accusamus quidem nemo quibusdam a ipsam veritatis! Quis ipsa sequi eos quod reprehenderit. Ducimus, voluptatibus?'
//             ],
//             [
//                 'id' => '2',
//                 'name' => 'Sepatu Adidas',
//                 'slug' => 'sepatu-adidas',
//                 'brand' => 'Adidas',
//                 'category' => 'Shoes',
//                 'price' => '850000',
//                 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam similique delectus hic saepe est vitae impedit a omnis molestias officia voluptates alias quia, eaque, veritatis incidunt sint illum dolorem, exercitationem esse dolore! Sit iusto nemo id enim blanditiis nulla dicta vero, delectus provident fuga, nihil obcaecati eveniet temporibus maiores nisi!'
//             ]
//         ];
//     }

//     public static function find($slug) 
//     {
//         // return Arr::first(static::all(), function($product) use ($slug) {
//         //     return $product['slug'] == $slug;
//         // });
//         $product = Arr::first(static::all(), fn ($product) => $product['slug'] == $slug);
//         if (!$product) {
//             abort(404);
//         }

//         return $product;
//     }
// }
