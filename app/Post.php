<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[
        'text',	'image',	'user_id',	'created_at',	'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id' , 'id');
    }

    public  function getImageAttribute($val)
    {
        return ($val !== null) ? asset('/images/posts/users/'.$val):
            "";
    }


    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
