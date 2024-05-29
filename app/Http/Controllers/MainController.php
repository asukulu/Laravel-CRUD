<?php

namespace App\Http\Controllers;
use App\Models\Event;
//use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
            return view('welcome')->with([
                'events'=> Event::all(),

                
            ]);
        }
    }

