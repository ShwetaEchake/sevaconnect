<?php

namespace App\Http\Controllers;
use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function eventone()
    {
       $list = Events::select('id', 'help_name', 'address','to_date','image', 'summary')
       ->orderBy('id', 'desc')
       ->take(5)
       ->where('help_name', 'Event')
       ->get();


       $need_list = Events::select('id', 'help_name', 'address','to_date','image', 'summary')
       ->orderBy('id', 'desc')
       ->take(5)
       ->where('help_name', 'Need')
       ->get();



       $job_opportunity_list = Events::select('id', 'help_name', 'address','to_date','image', 'summary')
       ->orderBy('id', 'desc')
       ->take(5)
       ->where('help_name', 'Job opportunity')
       ->get();
    return view('event',compact('list','need_list','job_opportunity_list'));

    }


    public function eventtwo($id)
    {
        $event = Events::find($id);

        if (!$event) {
            return "Event Not Found";
        }
        $latestEvents = Events::where('id', '!=', $id)
        ->latest()
        ->take(3)
        ->where('help_name', $event->help_name)
        ->get();
        return view('eventsspecific', compact('event','latestEvents'));
    }

public function eventrecords($help_name)
    {
       $help_name= str_replace('_', ' ' ,ucfirst($help_name));

        $eventsrecords = Events::select('id', 'help_name', 'address','to_date','image', 'summary')
        ->orderBy('id', 'desc')
        ->where('help_name', $help_name)
        ->get();
        return view('eventrecords',compact('eventsrecords'));

    }

    public function show($id) {
        $event = Events::findOrFail($id);
        $latestEvents = Events::where('id', '!=', $id)
        ->latest()
        ->take(3)
        ->get();
     return view('eventsdetails', compact('event','latestEvents'));
    }
}
