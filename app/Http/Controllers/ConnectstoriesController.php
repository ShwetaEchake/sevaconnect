<?php

namespace App\Http\Controllers;
use App\Models\Connectstories;
use Illuminate\Http\Request;

class ConnectstoriesController extends Controller
{

    public function connect_index()
    {

        $stories = Connectstories::select(
            'id',
            'story_date',
            'story_image',
            Connectstories::raw("REPLACE(story_video, 'https://www.youtube.com/watch?v=', '') as story_video"),
            'story_summary'
        )->orderBy('id', 'desc')->get();


        return view('connectstories',compact('stories'));
    }
}
