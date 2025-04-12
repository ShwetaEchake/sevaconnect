<?php

namespace App\Http\Controllers\Admin;

use App\Models\Charity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CharityController extends Controller
{
    public function charity_index()
    {
        $charitylist = Charity::select('id', 'charity_name', 'charity_image', 'charity_details')
            ->orderBy('id', 'desc')
            ->get();

        return view('adminmaster.charity_master', compact('charitylist'));
    }





    public function  charity_store(Request $request)
    {
        $request->validate([
            'charity_name' => 'required|string|max:255',
            'charity_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'charity_details' => 'required|string',
        ]);

        // Handle image upload
        if ($request->hasFile('charity_image')) {
            $image = $request->file('charity_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/charity/'), $imageName);
        } else {
            $imageName = null;
        }

        $charity = Charity::create([
            'charity_name' => $request->charity_name,
            'charity_image' => $imageName,
            'charity_details' => $request->charity_details,
        ]);

        return response()->json([
            'success' => 'Charity added successfully!',
            'data' => $charity,
        ]);
    }

    public function charity_edit($id)
    {
        $charity = Charity::findOrFail($id);
        return response()->json(['charity' => $charity]);
    }



    public function charity_update(Request $request, $id)
    {
        $request->validate([
            'charity_name' => 'required|string|max:255',
            'charity_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'charity_details' => 'required|string',
        ]);

        $charity = Charity::findOrFail($id);

        if ($request->hasFile('charity_image')) {
            // New image upload
            $image = $request->file('charity_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/charity/'), $imageName);
            $charity->charity_image = $imageName;
        }

        // Updating other fields
        $charity->charity_name = $request->charity_name;
        $charity->charity_details = $request->charity_details;
        $charity->save();

        return response()->json(['success' => 'Charity Updated Successfully']);
    }

    public function destroy($id)
    {
        $charity = Charity::findOrFail($id);
        $charity->delete();

        return response()->json(['success' => 'Charity Deleted Successfully']);
    }
}
