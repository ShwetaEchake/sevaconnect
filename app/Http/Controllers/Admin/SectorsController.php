<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sector;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectorsController extends Controller
{
    public function sector_index()
    {
        $sectorlist = Sector::select('id', 'name','sector_image','initial')
            ->orderBy('id', 'desc')
            ->get();
            return view('adminmaster.sector_master', compact('sectorlist'));
    }
    public function  sector_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'initial' => 'required',
            'sector_image'=> 'required',
        ]);

        $folderName = 'sector_images';
        $imageName = null;

        if ($request->hasFile('sector_image')) {
            $image = $request->file('sector_image');
            $imageName =$image->getClientOriginalName();
            $image->move("assets/$folderName/", $imageName);
        }

        $sector = Sector::create([
            'name' => $request->name,
            'initial' => $request->initial,
            'sector_image' =>$imageName,
        ]);

        return response()->json([
            'success' => 'Sector added successfully!',
            'data' => $sector,
        ]);
    }

    public function destroy($id)
    {
        $sector = Sector::findOrFail($id);
        $sector->delete();

        return response()->json(['success' => 'Sector Deleted Successfully']);
    }


    public function sector_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'initial' => 'required',
            'sector_image'=> 'required',
        ]);

        $sector  = Sector::findOrFail($id);

        $folderName = 'sector_images';
        $imageName = null;

        if ($request->hasFile('sector_image')) {
            // Delete old image if exists
            if ($sector->sector_image && file_exists(public_path("assets/$folderName/" . $sector->sector_image))) {
                unlink(public_path("assets/$folderName/" . $sector->sector_image));
            }

            $image = $request->file('sector_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("assets/$folderName/"), $imageName);
            $sector->sector_image = $imageName;
        }


        // Updating other fields
        $sector->name = $request->name;
        $sector->initial = $request->initial;
        $sector->save();

        return response()->json(['success' => 'Sector Updated Successfully']);
    }

    public function sector_edit($id)
    {
        $sector = Sector::findOrFail($id);
        return response()->json(['sector' => $sector]);
    }
}
