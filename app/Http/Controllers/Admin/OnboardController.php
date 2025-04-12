<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sector;
use App\Models\SubSector;

use App\Models\Recommendation;
use App\Models\OrganizationType;
use App\Models\OnboardDocument;
use App\Models\OnboardSectorsSubsectos;
use App\Models\SoevaluationSectors;
use App\Models\Soevaluation;
use App\Models\SoevaluationDocuments;
use App\Models\SoevaluationDocList;
use App\Models\Onboard;
use App\Models\OnboardDocumentsDetails;




use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OnboardController extends Controller
{
    public function onboard_list()
    {
        $onsector_list = Sector::select('id', 'name', 'initial')
        ->orderBy('id', 'asc')
        ->get();

        $onboard_doc = OnboardDocument::select('id','name')
        ->orderBy('id','asc')
        ->get();

        $orgTypeslist = OrganizationType::select('id', 'name')
                                ->orderBy('id', 'asc')
                                ->get();

        $subsector_list = Subsector::select('id','name')
        ->orderBy('id','asc')
        ->get();

        $onboard_list = Onboard::select('id','onboard_seva','name','onboard_trustee','onboard_name','onboard_mobile')
        ->orderBy('id', 'desc')
        ->get();

    $sevaonlist = Recommendation::with('orgType', 'sectors.sector')->orderBy('id', 'desc')->get();
        return view('adminmaster.onboard_form_master',compact('sevaonlist','onsector_list','subsector_list','onboard_doc','orgTypeslist','onboard_list'));
    }


 public function getOnboardDetails(Request $request)
{
    $seva_id = $request->seva_id;
    $recommendation = Recommendation::with('orgType', 'sectors.sector')->where('seva_id', $seva_id)->first();
    $sectors = Sector::get();
    $org = OrganizationType::get();

    // Organization Type Dropdown
    $orgtypeHtml = '<option>--Select Type--</option>';
    foreach ($org as $orgtype) {
        $isSelected = ($recommendation && $orgtype->id == $recommendation->organization_type_id) ? 'selected' : '';
        $orgtypeHtml .= '<option value="' . $orgtype->id . '" ' . $isSelected . '>' . $orgtype->name . '</option>';
    }

    // Sectors Dropdown
    $sectorsHtml = '<option>--Select Sectors--</option>';
    $selectedSectorIds = $recommendation ? $recommendation->sectors->pluck('sector_id')->toArray() : [];
    foreach ($sectors as $sector) {
        $isSelected = in_array($sector->id, $selectedSectorIds) ? 'selected' : '';
        $sectorsHtml .= '<option value="' . $sector->id . '" ' . $isSelected . '>' . $sector->name . '</option>';
    }

    // Sub-Sectors Dropdown
    $subSectorsHtml = '<option>--Select Sub-Sector--</option>';
    if (!empty($selectedSectorIds)) {
        $subSectors = SubSector::whereIn('sector_id', $selectedSectorIds)->get();
        foreach ($subSectors as $subSector) {
            $subSectorsHtml .= '<option value="' . $subSector->id . '">' . $subSector->name . '</option>';
        }
    }

    if ($recommendation) {
        return response()->json([
            'success' => true,
            'data' => $recommendation,
            'sectorsHtml' => $sectorsHtml,
            'orgtypeHtml' => $orgtypeHtml,
            'subSectorsHtml' => $subSectorsHtml,
        ]);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'No data found'
        ]);
    }
}

    public function getSubsectorsBySectors(Request $request)
{
    $selectedSectorIds = $request->sector_ids;

    $subSectorsHtml = '<option>--Select Sub-Sector--</option>';
    if (!empty($selectedSectorIds)) {
        $subSectors = SubSector::whereIn('sector_id', $selectedSectorIds)->get();
        foreach ($subSectors as $subSector) {
            $subSectorsHtml .= '<option value="' . $subSector->id . '">' . $subSector->name . '</option>';
        }
    }

    return response()->json([
        'success' => true,
        'subSectorsHtml' => $subSectorsHtml,
    ]);
}



public function oboard_store(Request $request)
{
    $request->validate([
        'onboard_seva' => 'required',
        'name' => 'required',
        'onboard_org_type' => 'required|integer|exists:organization_types,id',
        'onboard_trustee' => 'required',
        'onboard_name' => 'required',
        'onboard_mobile' => 'required',
        'onboard_address' => 'required',
        'area_name' => 'required',
        'onboard_email' => 'required',
        'onboard_year' => 'required',
      //  'onboard_sector' => 'required',
       // 'onboard_subsector' => 'required',
        'vision_name' => 'required',
       // 'current_name' => 'required',
        'onboard_format' => 'required',
        'current_benf' => 'required',
        'sevakarar' => 'required',
        'onboard_achiev' => 'required',
        'onboard_future' => 'required',
        'onboard_specific' => 'required',
        'certificate' => 'required',
    ]);

    $onboard = Onboard::create([

        'onboard_seva' => $request->onboard_seva,
        'name' => $request->name,
        'onboard_org_type ' => $request->onboard_org_type ,
        'onboard_trustee' => $request->onboard_trustee,
        'onboard_name' => $request->onboard_name,
        'onboard_mobile' => $request->onboard_mobile,
        'onboard_address' => $request->onboard_address,
        'area_name' => $request->area_name,
        'onboard_email' => $request->onboard_email,
        'onboard_year' => $request->onboard_year,
        'onboard_sector' => $request->onboard_sector,
        'onboard_subsector' => $request->onboard_subsector,
        'vision_name' => $request->vision_name,
        'current_name' => $request->current_name,
        'onboard_format' => $request->onboard_format,
        'current_benf' => $request->current_benf,
        'sevakarar' => $request->sevakarar,
        'onboard_achiev' => $request->onboard_achiev,
        'onboard_future' => $request->onboard_future,
        'onboard_specific' => $request->onboard_specific,
        //'certificate' => $request->certificate,
        'onboard_upload'=>$request->onboard_upload,
]);


if ($request->hasFile('file_name')) {
    $onboardDocuments = OnboardDocument::whereIn('id', $request->certificate)->get()->keyBy('id');
    $files = $request->allFiles()['file_name'] ?? [];

    foreach ($request->certificate as $key => $onb) {
        if (!isset($onboardDocuments[$onb])) {
            throw new \Exception("Document with ID '{$onb}' not found.");
        }

        if (!isset($files[$key])) {
            throw new \Exception("File not uploaded for certificate ID '{$onb}'.");
        }

        $file = $files[$key];
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = 'assets/onboarddocuments/' . $fileName;
        $file->move(public_path('assets/onboarddocuments'), $fileName);

        OnboardDocumentsDetails::create([
            'documents_id' => $onb,
            'onboard_id' => $onboard->id,
            'onboard_document_id' => $onboardDocuments[$onb]->id,
            'file_name' => $filePath,
        ]);
    }
}



foreach ($request->onboard_sector as $onbd) {

        $subsectors = SubSector::where('sector_id', $onbd)->get();
        if ($subsectors->isNotEmpty()) {
            foreach ($subsectors as $subsector) {
                OnboardSectorsSubsectos::create([
                    'sector_id' => $onbd,
                    'onboardids_id' => $onboard->id,
                    'subsector_id' => $subsector->id,
                ]);
            }
        } else {

            OnboardSectorsSubsectos::create([
                'sector_id' => $onbd,
                'onboardids_id' => $onboard->id,
                'subsector_id' => null,
            ]);
        }
    }

    return response()->json([
        'success' => 'Onboard added successfully!',
        'data' => $onboard,

    ]);
}


public function onboard_update(Request $request, $id)
{
    $request->validate([
        'onboard_seva' => 'required',
        'name' => 'required',
        'onboard_org_type' => 'required|integer|exists:organization_types,id',
        'onboard_trustee' => 'required',
        'onboard_name' => 'required',
        'onboard_mobile' => 'required',
        'onboard_address' => 'required',
        'area_name' => 'required',
        'onboard_email' => 'required',
        'onboard_year' => 'required',
        'vision_name' => 'required',
        'onboard_format' => 'required',
        'current_benf' => 'required',
        'sevakarar' => 'required',
        'onboard_achiev' => 'required',
        'onboard_future' => 'required',
        'onboard_specific' => 'required',
        'certificate' => 'required',
    ]);


    $onboard = Onboard::findOrFail($id);
    $onboard->onboard_seva = $request->onboard_seva;
    $onboard->name = $request->name;
    $onboard->onboard_org_type = $request->onboard_org_type;
    $onboard->onboard_trustee = $request->onboard_trustee;
    $onboard->onboard_name = $request->onboard_name;
    $onboard->onboard_mobile = $request->onboard_mobile;
    $onboard->onboard_address = $request->onboard_address;
    $onboard->area_name = $request->area_name;
    $onboard->onboard_email = $request->onboard_email;
    $onboard->onboard_year = $request->onboard_year;
    $onboard->vision_name = $request->vision_name;
    $onboard->current_name = $request->current_name;
    $onboard->onboard_format = $request->onboard_format;
    $onboard->current_benf = $request->current_benf;
    $onboard->sevakarar = $request->sevakarar;
    $onboard->onboard_achiev = $request->onboard_achiev;
    $onboard->onboard_future = $request->onboard_future;
    $onboard->onboard_specific = $request->onboard_specific;
    $onboard->save();
    return response()->json(['success' => 'Onboard Updated Successfully']);
}






public function onboard_edit($id)
{
    $onboard = Onboard::findOrFail($id);


    $onboardDocuments = OnboardDocumentsDetails::where('onboard_id', $id)
        ->with('document') // Fetch related document name
        ->get();


    $onboardDocList = OnboardDocument::all();

    return response()->json([
        'onboard' => $onboard,
        'onboardDocuments' => $onboardDocuments,
        'onboardDocList' => $onboardDocList
    ]);
}




public function destroy($id)
    {
        $onboard = Onboard::findOrFail($id);
        $onboard->delete();

        return response()->json(['success' => 'Onboard Deleted Successfully']);
    }
}







