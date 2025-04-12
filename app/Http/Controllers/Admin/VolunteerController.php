<?php

namespace App\Http\Controllers\Admin;

use App\Models\Volunteer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function volunteer_index()
    {
        $volunteerlist = Volunteer::select('id', 'name', 'image', 'details')
            ->orderBy('id', 'desc')
            ->get();
        return view('adminmaster.volunteer_master', compact('volunteerlist'));
    }

    public function volunteer_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'details' => 'required|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/volunteer/'), $imageName);
        } else {
            $imageName = null;
        }

        $volunteer = Volunteer::create([
            'name' => $request->name,
            'image' => $imageName,
            'details' => $request->details,
        ]);

        return response()->json([
            'success' => 'Volunteer added successfully!',
            'data' => $volunteer,
        ]);
    }


    public function volunteer_edit($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return response()->json(['volunteer' => $volunteer]);
    }



    public function volunteer_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $volunteer = Volunteer::findOrFail($id);

        if ($request->hasFile('image')) {
            // New image upload
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/volunteer/'), $imageName);
            $volunteer->image = $imageName;
        }

        // Updating other fields
        $volunteer->name = $request->name;
        $volunteer->details = $request->details;
        $volunteer->save();

        return response()->json(['success' => 'Volunteer Updated Successfully']);
    }


    public function destroy($id)
    {
        $donation = Volunteer::findOrFail($id);
        $donation->delete();

        return response()->json(['success' => 'Volunteer Deleted Successfully']);
    }
}
