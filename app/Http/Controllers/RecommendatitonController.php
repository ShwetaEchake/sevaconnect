<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use Illuminate\Http\Request;
use App\Models\Sector;
use App\Models\SubSector;
use App\Models\OrganizationType;
use App\Models\NgoType;
use App\Models\RecommendationSector;
use Illuminate\Support\Facades\Validator;

class RecommendatitonController extends Controller
{
    public function index()
    {
        $sectors = Sector::select('id', 'name', 'initial')
                                    ->orderBy('id','desc')
                                    ->get();
        $orgTypes = OrganizationType::select('id', 'name')
                                    ->orderBy('id', 'asc')
                                    ->get();
        $ngoTypes = NgoType::select('id', 'name')
                                    ->orderBy('id', 'asc')
                                    ->get();
        $subsectors = Sector::with('subSectors')->get();
        return view('auth.recommendation', compact('sectors', 'orgTypes','ngoTypes','subsectors'));
    }


    public function recommend_store(Request $request)

    {
       // dd($request->sector_id());
        // $request->validate([
            
        // ]);

        $validator = Validator::make($request->all(), [
            'user_type' => 'required',
            'name' => 'sometimes|required',
            'mobile_no' => 'sometimes|required',
            'org_name' => 'sometimes|required',
            'off_address' => 'sometimes|required',
        ]);
    
        $validator->after(function ($validator) use ($request) {
            if ($request->user_type === 'Individual') {
                if (!$request->name) {
                    $validator->errors()->add('name', 'Name is required for Individuals.');
                }
                if (!$request->mobile_no) {
                    $validator->errors()->add('mobile_no', 'Mobile number is required for Individuals.');
                }
            }
    
            if ($request->user_type === 'Social Organization') {
                if (!$request->org_name) {
                    $validator->errors()->add('org_name', 'Organization name is required for Social Organizations.');
                }
            }
    
            if ($request->user_type === 'Independent organization') {
                if (!$request->name) {
                    $validator->errors()->add('name', 'Name is required for Independent Organizations.');
                }
                if (!$request->off_address) {
                    $validator->errors()->add('off_address', 'Office address is required for Independent Organizations.');
                }
            }
        });
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        //end validation code//
    
        // Generate new seva_id
        $lastId = Recommendation::where('seva_id', 'LIKE', 'SEVA%')
            ->orderByRaw("CAST(SUBSTRING(seva_id, 5) AS UNSIGNED) DESC")
            ->value('seva_id');
    
        $lastNumericId = $lastId ? intval(substr($lastId, 4)) : 0;
        $newSevaId = 'SEVA' . str_pad($lastNumericId + 1, 4, '0', STR_PAD_LEFT);
    
        // Collect areas of interest
        $areas_of_interest_sectors = $request->input('areas_of_interest_sectors', []);
        $is_area_interest_subsector = $request->input('is_area_interest_subsector', []);
    
      
    
      
        // Create recommendation
        $recommend = Recommendation::create([
            'org_name' => $request->org_name,
            'organization_type_id' => $request->organization_type_id,
            'work_place' => $request->work_place,
            'address' => $request->address,
            'phone_no' => $request->phone_no,
            'name' => $request->name,
            'org_contact_name' => $request->org_contact_name,
            'org_contact_no' => $request->org_contact_no,
            'is_connected' => $request->is_connected,
            'contact_no' => $request->contact_no,
            'is_visited' => $request->is_visited,
            'seva_id' => $newSevaId,
            'opinion' => $request->opinion,
            'user_type' => $request->user_type,
            'managing' => $request->managing,
            'contact_address' => $request->contact_address,
            'contact_pincode' => $request->contact_pincode,
            'area' => $request->area,
            'email' => $request->email,
            'year' => $request->year,
            'vision_induction' => $request->vision_induction,
            'current' => $request->current,
            'mobile_no' => $request->mobile_no,
            'area_cause' => $request->area_cause,
            'social_org' => $request->social_org,
            'off_address' => $request->off_address,
            'off_pincode' => $request->off_pincode,
            'comfortable_call' => $request->comfortable_call,
            'induction_cause' => $request->induction_cause,
            'time_date' => $request->time_date,
            'ngo_type_id' => $request->ngo_details,
           
        ]);
    
        // Subsector-wise insert
        if (isset($request->sub_sector_id)) {
            $subsectes=implode(',',$request->sub_sector_id);

            $subsectors=Subsector::whereIn('id',explode(',',$subsectes))->get();
    
            foreach ($subsectors as $sub_sector) {
                RecommendationSector::create([
                    'sector_id' => $sub_sector->sector_id,
                    'recommendation_id' => $recommend->id,
                    'sub_sector_id' => $sub_sector->id,
                ]);
            }
        }


        if (isset($is_area_interest_subsector)) {
            $subsectors = Subsector::whereIn('id', $is_area_interest_subsector)->get();
    
            foreach ($subsectors as $sub_sector) {
                RecommendationSector::create([
                    'sector_id' => $sub_sector->sector_id,
                    'recommendation_id' => $recommend->id,
                    'sub_sector_id' => $sub_sector->id,
                    'is_area_interest' => 1,
                ]);
            }
        }
        // If only sectors are selected

        if (isset($areas_of_interest_sectors)) {
            $subsectors = Subsector::whereIn('sector_id', $areas_of_interest_sectors)->get();
        
            foreach ($areas_of_interest_sectors as $sector_id) {
                $sector_subsectors = $subsectors->where('sector_id', $sector_id);
        
                // Agar koi subsector nahi mila toh hi create karna hai
                if ($sector_subsectors->isEmpty()) {
                    RecommendationSector::create([
                        'sector_id' => $sector_id,
                        'recommendation_id' => $recommend->id, 
                        'is_area_interest' => 1,
                    ]);
                }
            }
        }
        
       
        // if (isset($request->sector_id)) {
           
        //     $sectors= explode(',',$request->sector_id);
        //     foreach ($sectors as $sector) {
        //         RecommendationSector::create([
        //             'sector_id' => $sector,
        //             'recommendation_id' => $recommend->id,
        //         ]);
        //     }
        // }

        if (isset($request->sector_id)) {
            $sectors = is_array($request->sector_id)
                ? $request->sector_id
                : explode(',', $request->sector_id);
        
            foreach ($sectors as $sector) {
                RecommendationSector::create([
                    'sector_id' => (int) trim($sector), 
                    'recommendation_id' => $recommend->id,
                ]);
            }
        }
        
    
    
        return response()->json([
            'success' => 'Recommendation added successfully!',
            'seva_id' => $newSevaId,
        ]);
    }
    
    //  public function getSubsectors(Request $request)
    // {
    //     $subSectors = SubSector::whereIn('sector_id', $request->sector_id)->get();
    //     return response()->json($subSectors);
    // }
    public function getSubsectors(Request $request)
{
    $subSectors = SubSector::whereIn('sector_id', $request->sector_id)->get();
    return response()->json($subSectors);
}


    public function getSubSectorsold(Request $request)
{
    $subSectors = SubSector::whereIn('sector_id', $request->sector_id)->get();
    return response()->json($subSectors);
}

    public function getSubSectorsone(Request $request)
    {
        $subSectors = SubSector::where('sector_id', $request->sector_id)->get();
        return response()->json($subSectors);
    }
    public function getSubSectorstwo(Request $request)
    {
        $subSectors = SubSector::where('sector_id', $request->sector_id)->get();
        return response()->json($subSectors);
    }



    
}
