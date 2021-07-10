<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
     protected $table= "doctors";
     protected $fillable = [
        'img', 'salary', 'services','qualifications','lang','lat','from','to','status','user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }

    public function scopeActive($query)
    {
        return $query->where('status' , 1);
    }
}
