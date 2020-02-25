<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Les suiveurs du profil
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function getImage()
    {
        $imagePath = $this->image ?? 'avatars/default.png';

        return '/storage/' . $imagePath;
    }
}
