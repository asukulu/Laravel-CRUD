<?php

namespace App\Http\Controllers;
use App\Http\Requests\EventRequest;

use App\Models\Event;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class EventController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth')->except(['index','show']);
        $this->middleware('auth');
    }

    
    public function index()
    {

        
        //$events = DB::table('events')->get();
        //$events = event::get();

        $events = Event::all();

       // dd($events);

    return view('events.index')->with(['events'=> $events,
    ]);
    }

    public function create()
    {
    return view('events.create');
    }

    public function store(EventRequest $request)
    {
        $event = Event::create($request->validated());
        //set of validation rules for each field.
        
       
        // dd(request(), request()->title, request()->all());
        //  $event = Event::create([
        //      'title' => request()->title,
        //      'description' => request()->description,
        //      'price' => request()->price,
        //      'stock' => request()->stock,
        //      'status'=>request()->status,
        //      'venue' =>request()->venue,
        //  ]);
  
        
//if ($request->stock == 0 && $request->status == 'available') {
    //adding session instead of 'put' 'flash' is used to get rid of error message displays long time by just refleshing the page
    //session()->flash('error' , 'available must not be zero');
        
        // return redirect()
       //  ->back()
        // ->withInput($request->all())
       //  ->withErrors('If available must have a stock');

   // }
    //if there is no zero then forget and redirect to events.index
    
    //session()->forget('error');

   //session()->flash('success', "New event with id {$event->id} was created");

     return redirect()
     ->route('events.index')
     ->withSuccess("New event with id {$event->id} was created");
     // ->with(['success' => "New event with id {$event->id} was created"]);

}


    public function show(Event $event)
    {
        
        /* $event = DB::table('events')->where('id', $event)->get();
        dd($event); */

       /*  $event = DB::table('events')->where('id', $event)->first();
        dd($event);
/
$event = DB::table('events')->find($event);
dd($event);*/

//dd($event);

      //$event = Event::findOrFail($event);
    return view('events.show')->with(['event' =>$event,
    ]);
}

    public function edit($event)
    {
        return view('events.edit')->with([
'event' => Event::findOrFail($event),
]);
    }

    public function update(EventRequest $request, Event $event)
    {
          //set of validation rules for each field.
        
     //$event = Event::findOrFail($event);
        $event->update($request->validated());
        return redirect()
        ->route('events.index')
        ->withSuccess("New event with id {$event->id} was upgraded");
    }

    public function destroy(Event $event)
    {
       //$event = Event::findOrFail($event);
       $event->delete();
       return redirect()
        ->route('events.index')
        ->withSuccess("New event with id {$event->title} was removed");
    }


}
