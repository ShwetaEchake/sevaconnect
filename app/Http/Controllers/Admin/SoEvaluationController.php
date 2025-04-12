<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sector;
use App\Models\subsectors;
use App\Models\Recommendation;
use App\Models\OrganizationType;
use App\Models\SoevaluationSectors;
use App\Models\Soevaluation;
use App\Models\SoevaluationDocuments;
use App\Models\SoevaluationDocList;




use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoEvaluationController extends Controller
{
    public function evaluation_list()
    {


        $eva_documents = SoevaluationDocuments::select('id', 'name')
            ->orderBy('id', 'asc')
            ->get();

        $recommandlist = Recommendation::with('orgType', 'sectors.sector')->orderBy('id', 'desc')->get();

        $sector_evalist = Soevaluation::with('sectors.sector')->orderBy('id', 'desc')->get();

        $sector_list = Sector::select('id', 'name', 'initial')
            ->orderBy('id', 'asc')
            ->get();



        $recommandlist = Recommendation::select('id', 'seva_id')
            ->orderBy('id', 'desc')
            ->get();

        $soevaluation_list = Soevaluation::select('id', 'eva_name', 'mem_seva', 'eva_address', 'eva_org')
            ->orderBy('id', 'desc')
            ->get();

        return view('adminmaster.so_evaluation_master', compact('sector_list', 'recommandlist', 'soevaluation_list', 'sector_evalist', 'recommandlist', 'eva_documents'));
    }


    public function  so_evaluation_store(Request $request)
    {
        $request->validate([
            'eva_name' => 'required',
            'mem_name' => 'required',
            'mem_seva' => 'required',

            'eva_incharge' => 'required',
            'eva_in_no' => 'required',
            'eva_year' => 'required',
            'eva_letter' => 'required',
            'eva_documents' => 'required',
            'eva_gap' => 'required',
            'eva_existing' => 'required',
            'eva_up' => 'required',
            'eva_benefeed' => 'required',
            'eve_comments' => 'required',
        ]);

        $so_evaluation = Soevaluation::create([

            'eva_name' => $request->eva_name,
            'mem_name' => $request->mem_name,
            'mem_seva' => $request->mem_seva,
            'eva_org' => $request->eva_org,
            'org_type' => $request->org_type,
            'eva_address' => $request->eva_address,

            'eva_incharge' => $request->eva_incharge,
            'eva_in_no' => $request->eva_in_no,
            'eva_year' => $request->eva_year,
            'eva_letter' => $request->eva_letter,

            'eva_gap' => $request->eva_gap,
            'eva_existing' => $request->eva_existing,
            'eva_up' => $request->eva_up,
            'eva_benefeed' => $request->eva_benefeed,
            'eve_comments' => $request->eve_comments,
            'status' => 0,
        ]);

        foreach ($request->eval_sector as $soevaluation) {
            SoevaluationSectors::create([
                'sector_id' => $soevaluation,
                'soevaluation_id' => $so_evaluation->id,
            ]);
        }


        foreach ($request->eva_documents as $documents) {
            SoevaluationDocList::create([
                'soevaluation_id' => $documents,
                'soevaluation_documents_id' => $so_evaluation->id,
            ]);
        }
        return response()->json([
            'success' => 'SO Evaluation added successfully!',
            'data' => $so_evaluation,

        ]);
    }

    public function destroy($id)
    {
        $so_evaluation = Soevaluation::findOrFail($id);
        $so_evaluation->delete();

        return response()->json(['success' => 'SO Evaluation Deleted Successfully']);
    }


    public function so_evaluation_edit(Request $request, $id)
    {
        $so_evaluation = Soevaluation::with('documents', 'sectors', 'orgType')->where('id', $id)->first();
        $sectors = Sector::all();
        $org = OrganizationType::get();
        $eva_documents = SoevaluationDocuments::select('id', 'name')
            ->orderBy('id', 'asc')
            ->get();



        $selecteddocuments = $so_evaluation ? $so_evaluation->documents->pluck('soevaluation_id')->toArray() : [];
        $documentHtml = '<option value="">--Select Documents--</option>';
        foreach ($eva_documents as $doc)
        {
            $isSelected = in_array($doc->id, $selecteddocuments) ? 'selected' : '';
            $documentHtml .= '<option value="' . $doc->id . '" ' . $isSelected . '>' . $doc->name . '</option>';
        }
        $documentHtml .= '';


        $selectedSectors = $so_evaluation ? $so_evaluation->sectors->pluck('sector_id')->toArray() : [];
        $sectorsHtml = '<option value="">--Select Sectors--</option>';
        foreach ($sectors as $sector)
        {
            $isSelected = in_array($sector->id, $selectedSectors) ? 'selected' : '';
            $sectorsHtml .= '<option value="' . $sector->id . '" ' . $isSelected . '>' . $sector->name . '</option>';

        }
        $sectorsHtml .= '';


        $orgtypeHtml = '<span><option>--Select Type--</option>';
        foreach ($org as $orgtype)
        {
            $isSelected = ($orgtype->id == $so_evaluation->organization_type_id) ? 'selected' : '';
            $orgtypeHtml .= '<option value=' . $orgtype->id . ' ' . $isSelected . '>' . $orgtype->name . '</option>';
        }
        $orgtypeHtml .= '</span>';

        return response()->json([
            'so_evaluation' => $so_evaluation,
            'sectorsHtml'   => $sectorsHtml,
            'orgtypeHtml' => $orgtypeHtml,
            'documentHtml' => $documentHtml,
            'eva_documents' => $eva_documents
        ]);
    }








    public function so_evaluation_update(Request $request, $id)
    {
        $request->validate([
            'eva_name' => 'required',
            'mem_name' => 'required',
            'mem_seva' => 'required',

            'eva_incharge' => 'required',
            'eva_in_no' => 'required',
            'eva_year' => 'required',
            'eva_letter' => 'required',
            'eva_documents' => 'required',
            'eva_gap' => 'required',
            'eva_existing' => 'required',
            'eva_up' => 'required',
            'eva_benefeed' => 'required',
            'eve_comments' => 'required',
        ]);

        $so_evaluation  = Soevaluation::findOrFail($id);
        $so_evaluation->eva_name = $request->eva_name;
        $so_evaluation->mem_name = $request->mem_name;
        $so_evaluation->mem_seva = $request->mem_seva;
        $so_evaluation->eva_org = $request->eva_org;
        $so_evaluation->org_type = $request->org_type;
        $so_evaluation->eva_address = $request->eva_address;
        $so_evaluation->eval_sector = $request->eval_sector;
        $so_evaluation->eva_incharge = $request->eva_incharge;
        $so_evaluation->eva_in_no = $request->eva_in_no;
        $so_evaluation->eva_year = $request->eva_year;
        $so_evaluation->eva_letter = $request->eva_letter;
        $so_evaluation->eva_documents = $request->eva_documents;
        $so_evaluation->eva_gap = $request->eva_gap;
        $so_evaluation->eva_existing = $request->eva_existing;
        $so_evaluation->eva_up = $request->eva_up;
        $so_evaluation->eva_benefeed = $request->eva_benefeed;
        $so_evaluation->eve_comments = $request->eve_comments;
        $so_evaluation->save();
        return response()->json(['success' => 'SO Evaluation Updated Successfully']);
    }

    public function getRecommendationDetails(Request $request)
    {
        $seva_id = $request->seva_id;
        $recommendation = Recommendation::with('orgType', 'sectors.sector')->where('seva_id', $seva_id)->first();
        $sectors = Sector::get();
        //dd($sectors);
        $org = OrganizationType::get();
        $orgtypeHtml = '<span><option>--Select Type--</option>';

        foreach ($org as $orgtype) {
            //$isSelected = ($orgtype->id, $recommendation->organization_type_id,) ? 'selected' : '';
            $isSelected = ($orgtype->id == $recommendation->organization_type_id) ? 'selected' : '';
            $orgtypeHtml .= '<option value=' . $orgtype->id . ' ' . $isSelected . '>' . $orgtype->name . '</option>';

        }
        $orgtypeHtml .= '</span>';

        $sectorsHtml = '<option>--Select Sectors--</option>';
        foreach ($sectors as $sector) {
            $isSelected = in_array($sector->id, $recommendation->sectors->pluck('sector_id')->toArray()) ? 'selected' : '';

            $sectorsHtml .= '<option value=' . $sector->id . ' ' . $isSelected . '>' . $sector->name . '</option>';
        }
        $sectorsHtml .= '';

        if ($recommendation) {
            return response()->json([
                'success' => true,
                'data' => $recommendation,
                'sectorsHtml' => $sectorsHtml,
                'orgtypeHtml' => $orgtypeHtml,


            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'No data found'
            ]);
        }
    }

    public function updateStatus(Request $request, $action)
    {
        if (!in_array($action, ['approve', 'reject'])) {
            return response()->json(['message' => 'Invalid action'], 400);
        }

        $evaluation = Soevaluation::find($request->id);

        if (!$evaluation) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        if ($action == 'approve') {
            $evaluation->status = 1;
        } elseif ($action == 'reject') {
            $evaluation->status = 2;
        }

        $evaluation->save();
        return response()->json(['message' => 'Evaluation ' . ($action == 'approve' ? 'approved' : 'rejected') . ' successfully.']);
    }

    public function approved_list()
    {
        $approvedEvaluations = Soevaluation::where('status', 1)
            ->select('id', 'eva_name', 'mem_seva', 'eva_address', 'eva_org', 'status')
            ->orderBy('id', 'desc')
            ->get();
        return view('adminmaster.so_evaluation_approve', compact('approvedEvaluations'));
    }


    public function rejected_list()
    {

        $rejectedEvaluations = Soevaluation::where('status', 2)
            ->select('id', 'eva_name', 'mem_seva', 'eva_address', 'eva_org', 'status','remark')
            ->orderBy('id', 'desc')
            ->get();
        return view('adminmaster.so_evaluation_reject', compact('rejectedEvaluations'));
    }



    public function pending_list()
    {
        $sopendinglist = Soevaluation::where('status', 0)
            ->select('id', 'eva_name', 'mem_seva', 'eva_address', 'eva_org', 'status')
            ->orderBy('id', 'desc')
            ->get();
        return view('adminmaster.so_evaluation_pending', compact('sopendinglist'));
    }


    public function evaluation_view($id)
    {
        {
            $so_evaluation = Soevaluation::with('documents', 'sectors', 'orgType')->where('id', $id)->first();
            $sectors = Sector::all();
            $org = OrganizationType::get();
            $eva_documents = SoevaluationDocuments::select('id', 'name')
                ->orderBy('id', 'asc')
                ->get();



            $selecteddocuments = $so_evaluation ? $so_evaluation->documents->pluck('soevaluation_id')->toArray() : [];
            $documentHtml = '<option value="">--Select Documents--</option>';
            foreach ($eva_documents as $doc)
            {
                $isSelected = in_array($doc->id, $selecteddocuments) ? 'selected' : '';
                $documentHtml .= '<option value="' . $doc->id . '" ' . $isSelected . '>' . $doc->name . '</option>';
            }

            $documentHtml .= '';


            $selectedSectors = $so_evaluation ? $so_evaluation->sectors->pluck('sector_id')->toArray() : [];
            $sectorsHtml = '<option value="">--Select Sectors--</option>';
            foreach ($sectors as $sector)
            {
                $isSelected = in_array($sector->id, $selectedSectors) ? 'selected' : '';
                $sectorsHtml .= '<option value="' . $sector->id . '" ' . $isSelected . '>' . $sector->name . '</option>';
            }

            $sectorsHtml .= '';


            $orgtypeHtml = '<span><option>--Select Type--</option>';
            foreach ($org as $orgtype)
            {
                $isSelected = ($orgtype->id == $so_evaluation->organization_type_id) ? 'selected' : '';
                $orgtypeHtml .= '<option value=' . $orgtype->id . ' ' . $isSelected . '>' . $orgtype->name . '</option>';
            }

            $orgtypeHtml .= '</span>';

            return response()->json([
                'so_evaluation' => $so_evaluation,
                'sectorsHtml'   => $sectorsHtml,
                'orgtypeHtml' => $orgtypeHtml,
                'documentHtml' => $documentHtml,
                'eva_documents' => $eva_documents
            ]);
        }

    }



    public function evaluationpending_view($id)
    {
        {
            $so_evaluation = Soevaluation::with('documents', 'sectors', 'orgType')->where('id', $id)->first();
            $sectors = Sector::all();
            $org = OrganizationType::get();
            $eva_documentss = SoevaluationDocuments::select('id', 'name')
                ->orderBy('id', 'asc')
                ->get();


                $sector_listsm = Sector::select('id', 'name', 'initial')
                ->orderBy('id', 'asc')
                ->get();






            $selecteddocuments = $so_evaluation ? $so_evaluation->documents->pluck('soevaluation_id')->toArray() : [];
            $documentHtml = '<option value="">--Select Documents--</option>';
            foreach ($eva_documentss as $doc)
            {
                $isSelected = in_array($doc->id, $selecteddocuments) ? 'selected' : '';
                $documentHtml .= '<option value="' . $doc->id . '" ' . $isSelected . '>' . $doc->name . '</option>';
            }

            $documentHtml .= '';


            $selectedSectors = $so_evaluation ? $so_evaluation->sectors->pluck('sector_id')->toArray() : [];
            $sectorsHtml = '<option value="">--Select Sectors--</option>';

            foreach ($sectors as $sector)
            {
                $isSelected = in_array($sector->id, $selectedSectors) ? 'selected' : '';
                $sectorsHtml .= '<option value="' . $sector->id . '" ' . $isSelected . '>' . $sector->name . '</option>';
            }

            $sectorsHtml .= '';


            $orgtypeHtml = '<span><option>--Select Type--</option>';
            foreach ($org as $orgtype)
            {
                $isSelected = ($orgtype->id == $so_evaluation->organization_type_id) ? 'selected' : '';
                $orgtypeHtml .= '<option value=' . $orgtype->id . ' ' . $isSelected . '>' . $orgtype->name . '</option>';
            }

            $orgtypeHtml .= '</span>';

            return response()->json([
                'so_evaluation' => $so_evaluation,
                'sectorsHtml'   => $sectorsHtml,
                'orgtypeHtml' => $orgtypeHtml,
                'documentHtml' => $documentHtml,
                'eva_documents' => $eva_documentss,
                'sec_list' => $sector_listsm

            ]);
        }
    }



    public function evaluationreject_view($id)
    {
        {
            $so_evaluation = Soevaluation::with('documents', 'sectors', 'orgType')->where('id', $id)->first();
            $sectors = Sector::all();
            $org = OrganizationType::get();
            $eva_documentss = SoevaluationDocuments::select('id', 'name')
                ->orderBy('id', 'asc')
                ->get();


                $sector_listsm = Sector::select('id', 'name', 'initial')
                ->orderBy('id', 'asc')
                ->get();






            $selecteddocuments = $so_evaluation ? $so_evaluation->documents->pluck('soevaluation_id')->toArray() : [];
            $documentHtml = '<option value="">--Select Documents--</option>';
            foreach ($eva_documentss as $doc)
            {
                $isSelected = in_array($doc->id, $selecteddocuments) ? 'selected' : '';
                $documentHtml .= '<option value="' . $doc->id . '" ' . $isSelected . '>' . $doc->name . '</option>';
            }

            $documentHtml .= '';


            $selectedSectors = $so_evaluation ? $so_evaluation->sectors->pluck('sector_id')->toArray() : [];
            $sectorsHtml = '<option value="">--Select Sectors--</option>';
            foreach ($sectors as $sector)
            {
                $isSelected = in_array($sector->id, $selectedSectors) ? 'selected' : '';
                $sectorsHtml .= '<option value="' . $sector->id . '" ' . $isSelected . '>' . $sector->name . '</option>';
            }

            $sectorsHtml .= '';


            $orgtypeHtml = '<span><option>--Select Type--</option>';
            foreach ($org as $orgtype)
            {
                $isSelected = ($orgtype->id == $so_evaluation->organization_type_id) ? 'selected' : '';
                $orgtypeHtml .= '<option value=' . $orgtype->id . ' ' . $isSelected . '>' . $orgtype->name . '</option>';
            }

            $orgtypeHtml .= '</span>';

            return response()->json([
                'so_evaluation' => $so_evaluation,
                'sectorsHtml'   => $sectorsHtml,
                'orgtypeHtml' => $orgtypeHtml,
                'documentHtml' => $documentHtml,
                'eva_documents' => $eva_documentss,
                'sec_list' => $sector_listsm

            ]);
        }
    }



    public function  evaluationapprove_view($id)
    {
        {
            $so_evaluation = Soevaluation::with('documents', 'sectors', 'orgType')->where('id', $id)->first();
            $sectors = Sector::all();
            $org = OrganizationType::get();
            $eva_documentss = SoevaluationDocuments::select('id', 'name')
                ->orderBy('id', 'asc')
                ->get();


                $sector_listsm = Sector::select('id', 'name', 'initial')
                ->orderBy('id', 'asc')
                ->get();






            $selecteddocuments = $so_evaluation ? $so_evaluation->documents->pluck('soevaluation_id')->toArray() : [];
            $documentHtml = '<option value="">--Select Documents--</option>';
            foreach ($eva_documentss as $doc)
            {
                $isSelected = in_array($doc->id, $selecteddocuments) ? 'selected' : '';
                $documentHtml .= '<option value="' . $doc->id . '" ' . $isSelected . '>' . $doc->name . '</option>';
            }

            $documentHtml .= '';


            $selectedSectors = $so_evaluation ? $so_evaluation->sectors->pluck('sector_id')->toArray() : [];
            $sectorsHtml = '<option value="">--Select Sectors--</option>';
            foreach ($sectors as $sector)
            {
                $isSelected = in_array($sector->id, $selectedSectors) ? 'selected' : '';
                $sectorsHtml .= '<option value="' . $sector->id . '" ' . $isSelected . '>' . $sector->name . '</option>';
            }

            $sectorsHtml .= '';


            $orgtypeHtml = '<span><option>--Select Type--</option>';
            foreach ($org as $orgtype)
            {
                $isSelected = ($orgtype->id == $so_evaluation->organization_type_id) ? 'selected' : '';
                $orgtypeHtml .= '<option value=' . $orgtype->id . ' ' . $isSelected . '>' . $orgtype->name . '</option>';
            }

            $orgtypeHtml .= '</span>';

            return response()->json([
                'so_evaluation' => $so_evaluation,
                'sectorsHtml'   => $sectorsHtml,
                'orgtypeHtml' => $orgtypeHtml,
                'documentHtml' => $documentHtml,
                'eva_documents' => $eva_documentss,
                'sec_list' => $sector_listsm

            ]);
        }
    }

    public function rejectEvaluation(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'reason' => 'required|string'
        ]);


            $updated = Soevaluation::where('id', $request->id)->update([
                'status' => 2,
                'remark' => $request->reason,
                'updated_at' => now()
            ]);

            if ($updated) {
                return response()->json(['message' => 'Evaluation rejected successfully.']);
            } else {
                return response()->json(['message' => 'Evaluation not found or already rejected.'], 404);
            }
    }


















}
