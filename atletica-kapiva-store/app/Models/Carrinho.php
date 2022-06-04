<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_id', 'units'];
    protected $table = 'carts';
    public function Product(){
        return $this->belongsTo(Product::class);
    }

}
