<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function store($profile)
    {
        return auth()->user()->following()->toggle($profile);
    }
}
