<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $tables = 'products';
    protected $fillable =['name','description','price','product_image'];
}
