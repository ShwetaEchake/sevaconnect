<?php
namespace App\Http\Controllers;
use App\Models\Sector;
use Illuminate\Http\Request;

class CausesController extends Controller
{

    public function causesone()
    {
        $sectorlists = Sector::select('id', 'name','sector_image')
            ->orderBy('id', 'asc')
            ->get();
        return view('causes',compact('sectorlists'));
    }
}
