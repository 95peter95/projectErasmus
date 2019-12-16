<?php

namespace App\Http\Controllers;

use App\Models\Mobility;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MobilityController extends Controller
{

    public function index()
    {
        $mobilities = Mobility::all();
        return view("home", ['mobilities' => $mobilities]);
    }

    public function showAction($id)
    {
        $mobility = Mobility::find($id);

        return view("detail", ['mobility' => $mobility]);
    }

    public function addUser($id)
    {

    }

}