<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $fillable = ['id', 'user_id', 'product_name', 'product_category', 'product_description', 'products_image', 'reference'];
    protected $hidden   = ['created_at', 'updated_at'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // public function product()
    // {
    //     return $this->belongsTo('App\User');
    // }

}
