<?php

namespace App\Http\Controllers;

use App\Models\Mobility;
use Illuminate\Http\Request;

class MobilityController extends Controller
{

    public function index()
    {
        $mobilities = Mobility::all();
        return view("home", ['mobilities' => $mobilities]);
    }
}