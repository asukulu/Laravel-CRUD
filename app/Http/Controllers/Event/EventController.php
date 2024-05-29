<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(request $request)

    {
        $Events = Event::with(['types'])->latest()->filter($request)->get();

        return response()->json($Events, 200);
    }
}
