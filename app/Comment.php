<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    protected $fillable = ['id', 'post_id', 'user_id', 'content'];
    protected $hidden   = ['created_at', 'updated_at'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }


}
