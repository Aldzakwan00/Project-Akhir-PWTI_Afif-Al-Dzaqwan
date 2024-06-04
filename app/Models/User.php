<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = ['name', 'profession', 'description'];

    public function profilePictures()
    {
        return $this->hasMany(ProfilePicture::class);
    }
}

