<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Post extends Model
{
    protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'excerpt',
        'content',
    ];

    public function category()  {
        return $this->belongsTo('App\Category');
    }
    public function user() {
        return $this->belongsTo('App\User',);
    }
}
