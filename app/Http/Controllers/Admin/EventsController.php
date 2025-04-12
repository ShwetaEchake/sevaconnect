<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Events;


class EventsController extends Controller
{
    public function index()
    {
        $eventlist = Events::select('id', 'help_name', 'address','image', 'summary')
       ->orderBy('id', 'desc')
       ->get();
      return view('adminmaster.event_master',compact('eventlist'));
    }

    public function store(Request $request)
    {

    $request->validate([

    ]);

    $folderName = strtolower(str_replace(' ', '_', $request->help_name));
    $imageName = null;

    if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("assets/$folderName/"), $imageName);
        }

    $imageNames = [];
        if ($request->hasFile('multiple_image')) {
            foreach ($request->file('multiple_image') as $image) {
                if ($image->isValid()) {
                    $imgName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path("assets/multiple_$folderName/"), $imgName);
                    $imageNames[] = $imgName;
                }
            }
        }

        $imageNamesString = implode(',', $imageNames);
        $events = Events::create([
            'summary' => $request->summary,
            'image' => $imageName,
            'address' => $request->address,
            'from_date' => $request->from_date,
            'help_name' => $request->help_name,
            'need_name' => $request->need_name,
            'skill' => $request->skill,
            'space' => $request->space,
            'other' => $request->other,
            'recurrent' => $request->recurrent,
            'to_date' => $request->to_date,
            'multiple_image' => $imageNamesString,
            'material_type' => $request->material_type,
            'amount' => $request->amount ?? 0,
        ]);

        return response()->json([
            'success' => 'Event added successfully!',
            'data' => $events,
        ]);
    }

    public function events_edit($id)
        {
            $events = Events::findOrFail($id);
            return response()->json(['events' =>$events]);
        }

    public function destroy($id)
        {
            $events = Events::findOrFail($id);
            $events->delete();
            return response()->json(['success' => 'Events Deleted Successfully']);
        }

        public function events_update(Request $request, $id)

    {


        $request->validate([

        ]);

        $events= Events::findOrFail($id);


    $folderName = strtolower(str_replace(' ', '_', $request->help_name));


    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($events->image && file_exists(public_path("assets/$folderName/" . $events->image))) {
            unlink(public_path("assets/$folderName/" . $events->image));
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path("assets/$folderName/"), $imageName);
        $events->image = $imageName;
    }


    $imageNames = [];
    if ($request->hasFile('multiple_image')) {

        if ($events->multiple_image) {
            $oldImages = explode(',', $events->multiple_image);
            foreach ($oldImages as $oldImage) {
                if (file_exists(public_path("assets/multiple_$folderName/" . $oldImage))) {
                    unlink(public_path("assets/multiple_$folderName/" . $oldImage));
                }
            }
        }

        foreach ($request->file('multiple_image') as $image) {
            if ($image->isValid()) {
                $imgName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path("assets/multiple_$folderName/"), $imgName);
                $imageNames[] = $imgName;
            }
        }
        $events->multiple_image = implode(',', $imageNames);
    }


        $events->summary = $request->summary;
        $events->address = $request->address;
        $events->from_date = $request->from_date;
        $events->help_name = $request->help_name;
        $events->need_name = $request->need_name;
        $events->skill = $request->skill;
        $events->space = $request->space;
        $events->other = $request->other;
        $events->recurrent = $request->recurrent;
        $events->to_date = $request->to_date;
        $events->material_type = $request->material_type;
        $events->amount = $request->amount;
        $events->save();

        return response()->json(['success' => 'Events Updated Successfully']);
    }
}


