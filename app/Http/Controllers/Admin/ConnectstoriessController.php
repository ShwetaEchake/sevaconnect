<?php

namespace App\Http\Controllers\Admin;

use App\Models\Connectstories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConnectstoriessController extends Controller
{
    public function constories_index()
    {

        $storylist = Connectstories::select('id', 'story_date', 'story_image', 'story_video','story_summary')
        ->orderBy('id', 'desc')
        ->get();
      return view('adminmaster.connectstories_master',compact('storylist'));
    }

    public function constories_store(Request $request)
{
    $request->validate([
        'story_date' => 'required',
        'story_image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        'story_video' => 'required|url',
        'story_summary' => 'required',
    ]);


    if ($request->hasFile('story_image')) {
        $image = $request->file('story_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/connectstories/'), $imageName);
    } else {
        $imageName = null;
    }


    $Connectstories = Connectstories::create([
        'story_date' => $request->story_date,
        'story_summary' => $request->story_summary,
        'story_image' => $imageName,
        'story_video' => $request->story_video,
    ]);

    return response()->json([
        'success' => 'Stories added successfully!',
        'data' => $Connectstories,
    ]);
}

public function connectstories_edit($id)
{
    $Connectstories = Connectstories::findOrFail($id);
    return response()->json(['events' =>$Connectstories]);
}

public function destroy($id)
{
    $Connectstories = Connectstories::findOrFail($id);
    $Connectstories->delete();

    return response()->json(['success' => 'Stories Deleted Successfully']);
}

public function connectstories_update(Request $request, $id)
{
    $request->validate([
        'story_date' => 'required',
        'story_image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        'story_video' => 'required|url',
        'story_summary' => 'required',
    ]);

    $Connectstories = Connectstories::findOrFail($id);
    if ($request->hasFile('story_image')) {

        if ($Connectstories->story_image) {
            $oldImagePath = public_path('assets/connectstories/' . $Connectstories->story_image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }


        $image = $request->file('story_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/connectstories/'), $imageName);
        $Connectstories->story_image = $imageName;
    }

    $Connectstories->story_video = $request->story_video;

    $Connectstories->story_summary = $request->story_summary;
    $Connectstories->story_date = $request->story_date;

    $Connectstories->save();

    return response()->json(['success' => 'Stories Updated Successfully']);
}
}
