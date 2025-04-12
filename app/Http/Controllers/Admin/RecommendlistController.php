<?php

namespace App\Http\Controllers\Admin;

use App\Models\Recommendation;
use App\Models\Sector;
use App\Models\OrganizationType;
use App\Models\NgoType;
use App\Models\SubSector;

use App\Models\RecommendationSector;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecommendlistController extends Controller
{
    public function recommend_list()
    {
        $recommandlist = Recommendation::with('orgType','sectors.sector')->where('user_type','Social Organization')->orderBy('id', 'desc')->get();
        $seclist = Recommendation::with('sectors.sector')->orderBy('id', 'desc')->get();

        $seclistview = Recommendation::with('sectors.sector')->orderBy('id', 'desc')->first();

        $sectors = Sector::select('id', 'name', 'initial')
                                    ->orderBy('id')
                                    ->get();


            $ngoTypes = NgoType::select('id', 'name')
            ->orderBy('id', 'asc')
            ->get();

            $orgTypes = OrganizationType::select('id', 'name')
            ->orderBy('id', 'asc')
            ->get();


        return view('adminmaster.recommand_list', compact('recommandlist','sectors','seclist','seclistview','ngoTypes','orgTypes'));
    }



    // public function recommend_edit_old($id)
    // {
    //     $recommands = Recommendation::findOrFail($id);
    //     $recommend_sector = Sector::select('id', 'name', 'initial')
    //         ->orderBy('id', 'asc')
    //         ->get();





    //     return response()->json([
    //         'recommands' => $recommands,
    //         'recommend_sector' => $recommend_sector,


    //     ]);
    // }



    public function recommend_edit($id)
    {
        $recommands = Recommendation::with(['sectors.sector.subsectors','area_interests.sector.subsectors'])->findOrFail($id);
       
    if($recommands->user_type == "Individual")
     {
        $recommend_sector = Sector::with('subsectors')
        ->select('id', 'name', 'initial')
        ->orderBy('id', 'asc')
        
        ->get();
        $selectedSectors = $recommands->sectors->pluck('sector_id')->toArray();
       // dd($selectedSectors);
        $selectedSubSectors = $recommands->sectors->pluck('sub_sector_id')->toArray();

        $sectorHtml = '<option value="">--Select Sector--</option>';

       foreach ($recommend_sector as $sector) {
        $isSelected = in_array($sector->id, $selectedSectors) ? 'selected' : '';

        $sectorHtml .= '<option value="' . $sector->id . '" ' . $isSelected . '>' . $sector->name . '</option>';
        //dd($sectorHtml);

    }





     }else{
        $recommend_sector = Sector::with('subsectors')
        ->select('id', 'name', 'initial')
        ->orderBy('id', 'asc')
        ->get();
        $selectedSectors = $recommands->sectors->pluck('sector_id')->toArray();
        $selectedSubSectors = $recommands->sectors->pluck('sub_sector_id')->toArray();
        $sectorHtml = '<option value="">--Select Sector--</option>';

        foreach ($recommend_sector as $sector) {
        $isSelected = in_array($sector->id, $selectedSectors) ? 'selected' : '';

        $sectorHtml .= '<option value="' . $sector->id . '" ' . $isSelected . '>' . $sector->name . '</option>';

        }

        $subsectorHtml = '';
        foreach ($recommend_sector as $sector) {
            if ($sector->subsectors->count()) {
                $subsectorHtml .= '<optgroup label="' . $sector->name . '">';
                foreach ($sector->subsectors as $sub) {
                    $isSubSelected = in_array($sub->id, $selectedSubSectors) ? 'selected' : '';

                    $subsectorHtml .= '<option value="' . $sub->id . '" ' . $isSubSelected . '>' . $sub->name . '</option>';

                }
                $subsectorHtml .= '</optgroup>';
            }
        }


     }
     $areaInterestHtml = ' <div class="select-all-container">
     <label><input type="checkbox" id="selectAll"> Select All</label>
     <input type="text" class="form-control mt-2" placeholder="Search..." id="sectorSearch">
     </div>';
     $selectedSectors = $recommands->area_interests?->pluck('sector_id')->toArray();
     $selectedSubSectors = $recommands->area_interests?->pluck('sub_sector_id')->toArray();
   
            foreach ($recommend_sector as $sector) {
                $isSectorChecked = in_array($sector->id, $selectedSectors) ? 'checked' : '';

                $areaInterestHtml .= '<div class="mb-2 sector-group">';
                $areaInterestHtml .= '<label class="sector-label">';
                $areaInterestHtml .= '<span>';
                $areaInterestHtml .= '<input type="checkbox" class="sector-checkbox" name="areas_of_interest_sectors[]" value="' . $sector->id . '" data-type="sector" data-sector-id="' . $sector->id . '" ' . $isSectorChecked . '>';
                $areaInterestHtml .= ' ' . $sector->name;
                $areaInterestHtml .= '</span>';
                $areaInterestHtml .= '<button type="button" class="toggle-subsectorsnine" data-sector-id="' . $sector->id . '">+</button>';
                $areaInterestHtml .= '</label>';

                if ($sector->subsectors->count()) {
                    $areaInterestHtml .= '<div class="subsectorsnine d-none" data-sector-id="' . $sector->id . '">';
                    foreach ($sector->subsectors as $subSector) {
                        $isSubChecked = in_array($subSector->id, $selectedSubSectors) ? 'checked' : '';
                        $areaInterestHtml .= '<label>';
                        $areaInterestHtml .= '<input type="checkbox" class="subsector-checkbox" name="is_area_interest_subsector[]" value="' . $subSector->id . '" data-type="subSector" data-sector-id="' . $sector->id . '" ' . $isSubChecked . '>';
                        $areaInterestHtml .= ' ' . $subSector->name;
                        $areaInterestHtml .= '</label>';
                    }
                    $areaInterestHtml .= '</div>';
                }

                $areaInterestHtml .= '</div>';
            }
            return response()->json([
                    'recommands' => $recommands,
                    'recommend_sector' => $recommend_sector,
                    'sectorHtml' => $sectorHtml,
                    'subsectorHtml' => @$subsectorHtml,
                    'areaInterestHtml' => $areaInterestHtml,
             ]);
            }

  



    public function recommend_update(Request $request, $id)
    {
       // dd($request->all());
        $recommend = Recommendation::find($id);
        if (!$recommend) {
            return response()->json(['error' => 'Recommendation not found!'], 404);
        }
    
        // Update main recommendation table
        $recommend->update([
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
            'area_interest' => $request->area_interest,
            'area_cause' => $request->area_cause,
            'social_org' => $request->social_org,
            'off_address' => $request->off_address,
            'off_pincode' => $request->off_pincode,
            'comfortable_call' => $request->comfortable_call,
            'induction_cause' => $request->induction_cause,
            'time_date' => $request->time_date,
            'ngo_type_id' => $request->ngo_details,
        ]);
    
        // Step 1: Delete old sector/subsector mappings
        RecommendationSector::where('recommendation_id', $recommend->id)->delete();
    
        // Step 2: Add selected sub_sectors (general interest)
        $generalSubSectors = $request->sub_sector_id ?? [];
        if (!empty($generalSubSectors)) {
            $subsectors = Subsector::whereIn('id', $generalSubSectors)->get();
            foreach ($subsectors as $sub_sector) {
                RecommendationSector::create([
                    'sector_id' => $sub_sector->sector_id,
                    'recommendation_id' => $recommend->id,
                    'sub_sector_id' => $sub_sector->id,
                ]);
            }
        }
    
        // Step 3: Area of Interest - Subsector
        $areaInterestSubsectors = $request->is_area_interest_subsector ?? [];
        if (!empty($areaInterestSubsectors)) {
            $subsectors = Subsector::whereIn('id', $areaInterestSubsectors)->get();
            foreach ($subsectors as $sub_sector) {
                RecommendationSector::create([
                    'sector_id' => $sub_sector->sector_id,
                    'recommendation_id' => $recommend->id,
                    'sub_sector_id' => $sub_sector->id,
                    'is_area_interest' => 1,
                ]);
            }
        }
    
        // Step 4: Area of Interest - Sector only (no sub-sectors under it)
        $areaInterestSectors = $request->areas_of_interest_sectors ?? [];
        if (!empty($areaInterestSectors)) {
            $subsectors = Subsector::whereIn('sector_id', $areaInterestSectors)->get();
    
            foreach ($areaInterestSectors as $sector_id) {
                $hasSubsector = $subsectors->where('sector_id', $sector_id)->isNotEmpty();
    
                if (!$hasSubsector) {
                    RecommendationSector::create([
                        'sector_id' => $sector_id,
                        'recommendation_id' => $recommend->id,
                        'is_area_interest' => 1,
                    ]);
                }
            }
        }
    
        // Step 5: Simple sector insert if selected (not part of area of interest)
        $sectors = $request->sector_id ?? [];
        if (!empty($sectors)) {
            foreach ($sectors as $sector) {
                RecommendationSector::create([
                    'sector_id' => $sector,
                    'recommendation_id' => $recommend->id,
                ]);
            }
        }


        
    
        return response()->json([
            'success' => 'Recommendation updated successfully!',
            'seva_id' => $recommend->seva_id,
            'user_type' => $recommend->user_type,
        ]);
    }
    

    

    public function recommend_view($id)
{
    // Load recommendation with nested sector, subsectors and area interests
    $recommands = Recommendation::with([
        'sectors.sector.subsectors',
        'area_interests.sector.subsectors' 
    ])->findOrFail($id);

    $recommend_sector = Sector::with('subsectors')
        ->select('id', 'name', 'initial')
        ->orderBy('id', 'asc')
        ->get();

    $selectedSectors = $recommands->sectors->pluck('sector_id')->toArray();
    $selectedSubSectors = $recommands->sectors->pluck('sub_sector_id')->toArray();

    $sectorHtml = '<option value="">--Select Sector--</option>';
    foreach ($recommend_sector as $sector) {
        $isSelected = in_array($sector->id, $selectedSectors) ? 'selected' : '';
        $sectorHtml .= '<option value="' . $sector->id . '" ' . $isSelected . '>' . $sector->name . '</option>';
    }

    $subsectorHtml = '';
    foreach ($recommend_sector as $sector) {
        if ($sector->subsectors->count()) {
            $subsectorHtml .= '<optgroup label="' . $sector->name . '">';
            foreach ($sector->subsectors as $sub) {
                $isSubSelected = in_array($sub->id, $selectedSubSectors) ? 'selected' : '';
                $subsectorHtml .= '<option value="' . $sub->id . '" ' . $isSubSelected . '>' . $sub->name . '</option>';
            }
            $subsectorHtml .= '</optgroup>';
        }
    }

    // Area of Interest HTML generation (View-Only / Disabled Mode)
    $areaInterestHtml = '<div class="select-all-container">
        <input type="text" class="form-control mt-2" placeholder="Search..." id="sectorSearch" disabled>
    </div>';

    $selectedAreaSectors = $recommands->area_interests?->pluck('sector_id')->toArray();
    $selectedAreaSubSectors = $recommands->area_interests?->pluck('sub_sector_id')->toArray();

    foreach ($recommend_sector as $sector) {
        $isSectorChecked = in_array($sector->id, $selectedAreaSectors) ? 'checked' : '';

        $areaInterestHtml .= '<div class="mb-2 sector-group">';
        $areaInterestHtml .= '<label class="sector-label">';
        $areaInterestHtml .= '<span>';
        $areaInterestHtml .= '<input type="checkbox" class="sector-checkbox" name="areas_of_interest_sectors[]" value="' . $sector->id . '" data-type="sector" data-sector-id="' . $sector->id . '" ' . $isSectorChecked . ' disabled>';
        $areaInterestHtml .= ' ' . $sector->name;
        $areaInterestHtml .= '</span>';
        $areaInterestHtml .= '<button type="button" class="toggle-subsectorsone" data-sector-id="' . $sector->id . '" disabled>+</button>';
        $areaInterestHtml .= '</label>';

        if ($sector->subsectors->count()) {
            $areaInterestHtml .= '<div class="subsectors d-none" data-sector-id="' . $sector->id . '">';
            foreach ($sector->subsectors as $subSector) {
                $isSubChecked = in_array($subSector->id, $selectedAreaSubSectors) ? 'checked' : '';
                $areaInterestHtml .= '<label>';
                $areaInterestHtml .= '<input type="checkbox" class="subsector-checkbox" name="is_area_interest_subsector[]" value="' . $subSector->id . '" data-type="subSector" data-sector-id="' . $sector->id . '" ' . $isSubChecked . ' disabled>';
                $areaInterestHtml .= ' ' . $subSector->name;
                $areaInterestHtml .= '</label>';
            }
            $areaInterestHtml .= '</div>';
        }

        $areaInterestHtml .= '</div>';
    }

    return response()->json([
        'recommands' => $recommands,
        'recommend_sector' => $recommend_sector,
        'sectorHtml' => $sectorHtml,
        'subsectorHtml' => $subsectorHtml,
        'areaInterestHtml' => $areaInterestHtml,
    ]);
}

    

    //individual list//
    public function individualList()
    {
        $individuallist = Recommendation::with('orgType','sectors.sector')->where('user_type','Individual')->orderBy('id', 'desc')->get();
        //dd($individuallist);
        $seclist = Recommendation::with('sectors.sector')->orderBy('id', 'desc')->get();
        $seclistview = Recommendation::with('sectors.sector')->orderBy('id', 'desc')->get();
        $sectors = Sector::select('id', 'name', 'initial')->orderBy('id')->get();
        $orgTypes = OrganizationType::select('id', 'name')->orderBy('id', 'asc')->get();
        return view('adminmaster.individual_master', compact('individuallist','sectors','orgTypes','seclist','seclistview'));
    }


    public function update_status(Request $request,$status)
    {
        //dd($request->all(),$status);
        $status_code= $status=='approve'? 1:2;
       //dd($status_code);
       $recomlistone = Recommendation::where('id',$request->id)->update(['status'=>$status_code]);
     
       return response()->json(['message' => "Update $status Status Successfully."]);   
    }

    public function independentOrgList()
    {
        $independantlist = Recommendation::with('orgType','sectors.sector')->where('user_type','Independent organization')->orderBy('id', 'desc')->get();
        // dd($individuallist);
        $seclist = Recommendation::with('sectors.sector')->orderBy('id', 'desc')->get();
        $seclistview = Recommendation::with('sectors.sector')->orderBy('id', 'desc')->get();
        $sectors = Sector::select('id', 'name', 'initial')->orderBy('id')->get();
        $orgTypes = OrganizationType::select('id', 'name')->orderBy('id', 'asc')->get();
        return view('adminmaster.independent_org_list', compact('independantlist','sectors','orgTypes','seclist','seclistview'));
    }

     public function getSubsectors(Request $request)
    {
        $subSectors = SubSector::whereIn('sector_id', $request->sector_id)->get();
        return response()->json($subSectors);
    }
}
