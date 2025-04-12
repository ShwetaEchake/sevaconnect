<?php

namespace App\Http\Controllers\Admin;

use App\Models\Donation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function donation_index()
    {
        $donationlist = Donation::select('id', 'name', 'description', 'price', 'raised')
            ->orderBy('id', 'desc')
            ->get();
        return view('adminmaster.donation_master', compact('donationlist'));
    }


    public function donation_store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'raised' => 'required',
        ]);

        $donation = Donation::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'raised' => $request->raised,
        ]);

        return response()->json([
            'success' => 'Donation added successfully!',
            'data' => $donation,
        ]);
    }


    public function donation_edit($id)
    {
        $donation = Donation::findOrFail($id);
        return response()->json(['donation' => $donation]);
    }


    public function  donation_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'raised' => 'required',
        ]);

        $donation = Donation::findOrFail($id);

        $donation->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'raised' => $request->raised,
        ]);

        return response()->json(['success' => 'Donation Updated Successfully']);
    }


    public function destroy($id)
    {
        $donation = Donation::findOrFail($id);
        $donation->delete();

        return response()->json(['success' => 'Donation Deleted Successfully']);
    }
}
