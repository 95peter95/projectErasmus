<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        echo $user->first_name. " " . $user->last_name."<br>";
    }
}
