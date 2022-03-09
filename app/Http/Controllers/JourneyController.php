<?php

namespace App\Http\Controllers;

use App\Journey;
use Illuminate\Http\Request;

class JourneyController extends Controller
{
    function index() {
        $data = Journey::all();

        return view('home');
    }
}
