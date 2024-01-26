<?php

namespace App\Models;

class camera extends Model
{
    //
    protected $fillable=[
        'name', 'entry-day', 'status'
    ];

    public function users():BelongsToMany
    {
        return $this->belongsToMany(user::class, 'camera_user','camera_id','user_id');
    }

}
