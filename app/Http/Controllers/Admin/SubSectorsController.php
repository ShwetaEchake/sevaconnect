<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubSector;
use App\Models\Sector;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubSectorsController extends Controller
{
    public function sub_sector_index()
    {
        $sectorlists = Sector::select('id', 'name', 'initial')
            ->orderBy('id', 'asc')
            ->get();

            $sub_sectorlist = SubSector::select(
                'sub_sectors.id',
                'sub_sectors.sector_id',
                'sub_sectors.name as subsector_name',
                'sub_sectors.initial',
                'sectors.name as sector_name'
            )
            ->leftJoin('sectors', 'sectors.id', '=', 'sub_sectors.sector_id')
            ->orderBy('sub_sectors.id', 'desc')
            ->get();

        return view('adminmaster.sub_sector_master', compact('sectorlists', 'sub_sectorlist'));
    }


    public function sub_sector_store(Request $request)
    {
        $request->validate([

            'sector_id' => 'required',
            'name' => 'required',
            'initial' => 'required',
        ]);

        $sub_sector = SubSector::create([
            'sector_id' => $request->sector_id,
            'name' => $request->name,
            'initial' => $request->initial,

        ]);

        return response()->json([
            'success' => 'Sub Sector added successfully!',
            'data' =>  $sub_sector,
        ]);
    }

    public function destroy($id)
    {
        $sub_sector = SubSector::findOrFail($id);
        $sub_sector->delete();

        return response()->json(['success' => 'Sub Sector Deleted Successfully']);
    }


    public function  sub_sector_edit($id)
    {
        $sub_sector = SubSector::findOrFail($id);
        return response()->json(['sub_sector' => $sub_sector]);
    }


    public function sub_sector_update(Request $request, $id)
    {
        $request->validate([
            'sector_id' => 'required',
            'name' => 'required',
            'initial' => 'required',
        ]);

        $sub_sector  = SubSector::findOrFail($id);


        // Updating other fields
        $sub_sector->sector_id = $request->sector_id;
        $sub_sector->name = $request->name;
        $sub_sector->initial = $request->initial;
        $sub_sector->save();

        return response()->json(['success' => 'Sub Sector Updated Successfully']);
    }

}
