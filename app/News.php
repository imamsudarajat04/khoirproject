<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    
    protected $fillable = [
        'user_id', 
        'title', 
        'slug', 
        'description', 
        'content', 
        'publish_date', 
        'cover',
        'category_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
