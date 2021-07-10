<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    protected $table= "nurses";

    protected  $fillable =[	'salary',	'services',	'qualifications', 'from',	'to',	'status',	'user_id'];


    public function scopeActive($query)
    {
        return $query->where('status' , 1);
    }

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
}
