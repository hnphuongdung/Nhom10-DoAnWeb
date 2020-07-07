<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = ['product_name','product_desc','product_price','product_promotion_price','product_image','product_status'];
    protected $primarykey = 'product_id';
    protected $table = 'tbl_product';

    
}
