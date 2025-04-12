<x-admin.admin-layout>
    <x-slot name="title">SO Evaluation Master</x-slot>

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">


                <!-- Add Form Start -->
                <div class="row" id="addContainer" style="display:none;">
                    <div class="col-sm-12">
                        <div class="card">
                            <form class="theme-form" name="addFormEvaluation" id="addFormEvaluation" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header pb-0">
                                    <h4>Create SO Evaluation</h4>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="mb-3 row">
                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_name">Who is evaluating? <span class="text-danger">*</span></label>
                                            <select class="form-control" id="eva_name" name="eva_name">
                                                <option value="">Select Evaluator</option>
                                                <option value="Core team member">Core team member</option>
                                                <option value="Area coordinator">Area coordinator</option>
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="mem_name">Name of the member <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="mem_name" name="mem_name" type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="mem_seva">Enter Seva ID <span class="text-danger">*</span></label>
                                            <select class="form-control" id="mem_seva" name="mem_seva">
                                                <option value="">Select Seva ID</option>
                                                @foreach($recommandlist as $recommendation)
                                                    <option value="{{ $recommendation->seva_id }}">{{ $recommendation->seva_id }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_org">Name of Organization <span class="text-danger">*</span></label>
                                            <input class="form-control" id="eva_org" name="eva_org" type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        {{-- <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="org_type">Organization  Type <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="org_type" name="org_type" type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div> --}}

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="org_type">Organization Type <span class="text-danger">*</span></label>
                                            <select class="form-control" id="org_type" name="org_type" >
                                                @foreach( $recommandlist as $orgType)
                                                <option value="{{ $orgType->id }}">{{ $orgType->name }}</option>
                                            @endforeach
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>



                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_address">Address in short <span class="text-danger">*</span></label>
                                            <input class="form-control" id="eva_address" name="eva_address" type="text" placeholder="Enter Sector Initial"
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eval_sector">Sectors <span class="text-danger">*</span></label>

                                            <select class="js-example-basic-multiple" id="eval_sector" name="eval_sector[]" multiple="multiple">
                                                <option value="">Select Sector</option>
                                                @foreach($sector_list as $sector)
                                                    <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_incharge">Inchanrge Name <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="eva_incharge" name="eva_incharge" type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_in_no">Incharge No <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="eva_in_no" name="eva_in_no" type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_year">Years of work
                                                <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="eva_year" name="eva_year" type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_letter">Does the organization has following?<span class="text-danger">*</span></label>
                                            <select class="form-control" id="eva_letter" name="eva_letter">
                                                <option value="">Select Organization</option>
                                                <option value="A">Appeal letter</option>
                                                <option value="R">Requiremet letter</option>
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_documents">
                                                Documents Required <span class="text-danger">*</span>
                                            </label>
                                            <select class="js-example-basic-multiple" id="eva_documents" name="eva_documents[]" multiple="multiple">
                                                <option value="">Select Documents</option>
                                                @foreach($eva_documents as $documents)
                                                    <option value="{{ $documents->id }}">{{ $documents->name }}</option>
                                                @endforeach
                                            </select>

                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>





                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_gap">Gaps identified/Needs
                                                <span class="text-danger">*</span> </label>
                                            {{-- <input class="form-control" id="eva_gap" name="eva_gap" type="text" placeholder="Enter Sector Initial"> --}}
                                            <textarea class="form-control" id="eva_gap" name="eva_gap" rows="4" placeholder="Enter Comments"></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_existing">Existing tie ups
                                            <span class="text-danger">*</span> </label>
                                            <textarea class="form-control" id="eva_existing" name="eva_existing" rows="4" placeholder="Enter Comments"></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_up">Possible tie ups

                                            <span class="text-danger">*</span> </label>
                                            <textarea class="form-control" id="eva_up" name="eva_up" rows="4" placeholder="Enter Comments"></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_benefeed">
                                                Beneficiary feedback <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" id="eva_benefeed" name="eva_benefeed" rows="4" placeholder="Enter Comments"></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                         <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eve_comments">
                                                Comments(Best challenges) <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" id="eve_comments" name="eve_comments" rows="4" placeholder="Enter Comments"></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>


                                     </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id="addSubmitEvaluation">Submit</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>



                   {{-- Edit Form --}}
                   <div class="row" id="editContainer" style="display:none;">
                    <div class="col">
                        <form class="form-horizontal form-bordered" method="post" id="editForm">
                            @csrf
                            <section class="card">
                                <header class="card-header">
                                    <h4 class="card-title">Edit User</h4>
                                </header>

                                <div class="card-body py-2">
                                    <input type="hidden" id="edit_model_id" name="edit_model_id" value="">
                                    <div class="mb-3 row">
                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_name">Who is evaluating? <span class="text-danger">*</span></label>
                                            <select class="form-control" id="eva_name" name="eva_name">
                                                <option value="">Select Evaluator</option>
                                                <option value="Core team member">Core team member</option>
                                                <option value="Area coordinator">Area coordinator</option>
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="mem_name">Name of the member <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="mem_name" name="mem_name" type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="mem_seva">Enter Seva ID <span class="text-danger">*</span> </label>
                                            <select class="form-control" id="mem_seva" name="mem_seva">
                                                <option value="">Select Seva ID</option>
                                                @foreach($recommandlist as $recommendation)
                                                    <option value="{{ $recommendation->seva_id }}">{{ $recommendation->seva_id }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_org">Name of Organization <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="eva_org" name="eva_org" type="text" placeholder="Enter Sector Initial" >
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        {{-- <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="org_type">Organization  Type <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="org_type" name="org_type" type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div> --}}


                                    <div class="col-md-4 mt-3">
                                        <label class="col-form-label" for="org_type">Organization Type <span class="text-danger">*</span></label>
                                        <select class="form-control" id="org_type" name="org_type" >
                                            @foreach( $recommandlist as $orgType)
                                            <option value="{{ $orgType->id }}">{{ $orgType->name }}</option>
                                        @endforeach
                                        </select>
                                        <span class="text-danger error-text volunteer_name_err"></span>
                                    </div>



                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_address"> Address in short <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="eva_address" name="eva_address" type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eval_sector">Sectors <span class="text-danger">*</span> </label>
                                            <select class="js-example-basic-multiple" id="eval_sector" name="eval_sector" multiple="multiple">

                                                <option value="">Select Sector</option>
                                                @foreach($sector_list as $sector)
                                                    <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_incharge">Inchanrge Name <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="eva_incharge" name="eva_incharge" type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_in_no">Incharge No <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="eva_in_no" name="eva_in_no" type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_year">Years of work
                                                <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="eva_year" name="eva_year" type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_letter">Does the organization has following?<span class="text-danger">*</span></label>
                                            <select class="form-control" id="eva_letter" name="eva_letter">
                                                <option value="">Select Organization</option>
                                                <option value="A">Appeal letter</option>
                                                <option value="R">Requiremet letter</option>
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>



                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_documents">
                                                Documents Required <span class="text-danger">*</span>
                                            </label>
                                            <select class="js-example-basic-multiple" id="eva_documents" name="eva_documents" multiple="multiple">
                                                <option value="">Select Documents</option>
                                                @foreach($eva_documents as $documents)
                                                    <option value="{{ $documents->id }}">{{ $documents->name }}</option>
                                                @endforeach
                                            </select>

                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>



                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_gap">Gaps identified/Needs
                                                <span class="text-danger">*</span> </label>
                                            {{-- <input class="form-control" id="eva_gap" name="eva_gap" type="text" placeholder="Enter Sector Initial"> --}}
                                            <textarea class="form-control" id="eva_gap" name="eva_gap" rows="4" placeholder="Enter Comments"></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_existing">Existing tie ups
                                            <span class="text-danger">*</span> </label>
                                            {{-- <input class="form-control" id="eva_existing" name="eva_existing" type="text" placeholder="Enter Sector Initial"> --}}
                                            <textarea class="form-control" id="eva_existing" name="eva_existing" rows="4" placeholder="Enter Comments"></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_up">Possible tie ups

                                            <span class="text-danger">*</span> </label>
                                            {{-- <input class="form-control" id="eva_up" name="eva_up" type="text" placeholder="Enter Sector Initial"> --}}
                                            <textarea class="form-control" id="eva_up" name="eva_up" rows="4" placeholder="Enter Comments"></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_benefeed">
                                                Beneficiary feedback <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" id="eva_benefeed" name="eva_benefeed" rows="4" placeholder="Enter Comments"></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                         <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eve_comments">
                                                Comments(Best challenges) <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" id="eve_comments" name="eve_comments" rows="4" placeholder="Enter Comments"></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary" id="editSubmit">Update</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>





                 {{-- view Form --}}
                 <div class="row" id="viewContainer" style="display:none;">
                    <div class="col">
                        <form class="form-horizontal form-bordered" method="post" id="viewFormevaluation">
                            @csrf
                            <section class="card">
                                <header class="card-header">
                                    <h4 class="card-title">View So Evaluation</h4>
                                </header>

                                <div class="card-body py-2">

                                    <input type="hidden" id="edit_model_id" name="edit_model_id" value="">

                                    <div class="row">

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_name">Who is evaluating? <span class="text-danger">*</span></label>
                                            <select class="form-control" id="eva_name" name="eva_name" Readonly>
                                                <option value="">Select Evaluator</option>
                                                <option value="Core team member" disabled>Core team member</option>
                                                <option value="Area coordinator" disabled>Area coordinator</option>
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="mem_name">Name of the member <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="mem_name" Readonly name="mem_name" type="text" placeholder="Enter Sector Initial" disabled>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="mem_seva">Enter Seva ID <span class="text-danger">*</span> </label>
                                            <select class="form-control" id="mem_seva" name="mem_seva" disabled>
                                                <option value="">Select Seva ID</option>
                                                @foreach($recommandlist as $recommendation)
                                                    <option value="{{ $recommendation->seva_id }}">{{ $recommendation->seva_id }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_org">Name of Organization <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="eva_org" name="eva_org" disabled type="text" placeholder="Enter Sector Initial" >
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        {{-- <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="org_type">Organization  Type <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="org_type" name="org_type" type="text" placeholder="Enter Sector Initial" disabled>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div> --}}

                                            <div class="col-md-4 mt-3">
                                                <label class="col-form-label" for="org_type">Organization Type <span class="text-danger">*</span></label>
                                                <select class="form-control" id="org_type" name="org_type" disabled>
                                                    @foreach( $recommandlist as $orgType)
                                                    <option value="{{ $orgType->id }}">{{ $orgType->name }}</option>
                                                @endforeach
                                                </select>
                                                <span class="text-danger error-text volunteer_name_err"></span>
                                            </div>




                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_address"> Address in short <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="eva_address" disabled name="eva_address" type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eval_sector">Sectors <span class="text-danger">*</span> </label>
                                            <select class="js-example-basic-multiple" id="eval_sector" name="eval_sector" multiple="multiple" disabled>

                                                <option value="">Select Sector</option>
                                                @foreach($sector_list as $sector)
                                                    <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_incharge">Inchanrge Name <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="eva_incharge" name="eva_incharge" disabled type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_in_no">Incharge No <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="eva_in_no" name="eva_in_no" disabled type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_year">Years of work
                                                <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="eva_year" name="eva_year" disabled type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_letter">Does the organization has following?<span class="text-danger">*</span></label>
                                            <select class="form-control" id="eva_letter" name="eva_letter" disabled>
                                                <option value="">Select Organization</option>
                                                <option value="A">Appeal letter</option>
                                                <option value="R">Requiremet letter</option>
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_documents">
                                                Documents Required <span class="text-danger">*</span>
                                            </label>
                                            <select class="js-example-basic-multiple" id="eva_documents" name="eva_documents" multiple="multiple" disabled>
                                                <option value="">Select Documents</option>
                                                @foreach($eva_documents as $documents)
                                                    <option value="{{ $documents->id }}">{{ $documents->name }}</option>
                                                @endforeach
                                            </select>

                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>




                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_gap">Gaps identified/Needs
                                                <span class="text-danger">*</span> </label>
                                            {{-- <input class="form-control" id="eva_gap" name="eva_gap" type="text" placeholder="Enter Sector Initial"> --}}
                                            <textarea class="form-control" id="eva_gap" name="eva_gap" rows="4" placeholder="Enter Comments" disabled></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_existing">Existing tie ups
                                            <span class="text-danger">*</span> </label>
                                            {{-- <input class="form-control" id="eva_existing" name="eva_existing" type="text" placeholder="Enter Sector Initial"> --}}
                                            <textarea class="form-control" id="eva_existing" name="eva_existing" rows="4" placeholder="Enter Comments" disabled></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_up">Possible tie ups

                                            <span class="text-danger">*</span> </label>
                                            {{-- <input class="form-control" id="eva_up" name="eva_up" type="text" placeholder="Enter Sector Initial"> --}}
                                            <textarea class="form-control" id="eva_up" name="eva_up" rows="4" placeholder="Enter Comments" disabled></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eva_benefeed">
                                                Beneficiary feedback <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" id="eva_benefeed" name="eva_benefeed" rows="4" placeholder="Enter Comments" disabled></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                         <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eve_comments">
                                                Comments(Best challenges) <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" id="eve_comments" name="eve_comments" rows="4" placeholder="Enter Comments" disabled></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>
                                    </div>


                                </div>
                                <div class="card-footer">
                                    {{-- <button class="btn btn-primary" id="editrecommendSubmit">Update</button>
                                    <button type="reset" class="btn btn-warning">Reset</button> --}}
                                </div>
                            </section>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <h3>SO Evaluation Details</h3>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid support-ticket">
            <div class="row">

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="">
                                        <button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
                                        <button id="btnCancel" class="btn btn-danger" style="display:none;">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="display table-bordered" id="datatable-tabletools">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>SEVA ID</th>
                                            <th>evaluating Name</th>
                                            <th>sectors</th>

                                            <th>Address</th>
                                            <th>Organization</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($soevaluation_list as $evaluation)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $evaluation->mem_seva }}</td>
                                            <td>{{ $evaluation->eva_name }}</td>
                                            <td>
                                                @foreach ($evaluation->sectors as $sector)
                                                    {{ $sector->sector->name }} {{ $loop->last ? '' : ', ' }}
                                                @endforeach
                                            </td>

                                            <td>{{ $evaluation->eva_address }}</td>
                                            <td>{{ $evaluation->eva_org }}</td>
                                            <td>
                                                <button class="edit-element btn btn-primary px-2 py-1" title="Edit Evaluation" data-id="{{ $evaluation->id }}">
                                                    <i data-feather="edit"></i>
                                                </button>
                                                <button class="btn btn-dark rem-element px-2 py-1" title="Delete Evaluation" data-id="{{ $evaluation->id }}">
                                                    <i data-feather="trash-2"></i>
                                                </button>
                                                <button class="view-element btn btn-primary px-2 py-1" title="Edit User" data-id="{{ $evaluation->id }}">
                                                    <i data-feather="eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- Add --}}
    <script>
        $("#addFormEvaluation").submit(function(e) {
            e.preventDefault();
            $("#addSubmitEvaluation").prop('disabled', true);

            var formdata = new FormData(this);

            $.ajax({
                url: '{{ route('so_evaluation.store') }}',
                type: 'POST',
                data: formdata,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#addSubmitEvaluation").prop('disabled', false);
                    swal("Successful!", data.success, "success")
                    .then(() => {
                        window.location.href = '{{ route('so_evaluation_master') }}';
                    });
                },
                statusCode: {
                    422: function(responseObject) {
                        $("#addSubmitEvaluation").prop('disabled', false);
                        resetErrors();
                        printErrMsg(responseObject.responseJSON.errors);
                    },
                    500: function() {
                        $("#addSubmitEvaluation").prop('disabled', false);
                        swal("Error!", "Something went wrong, please try again", "error");
                    }
                }
            });

            function resetErrors() {
                $(".is-invalid").removeClass("is-invalid");
                $(".error-text").text('');
            }

            function printErrMsg(msg) {
                $.each(msg, function(key, value) {
                    $('.' + key + '_err').text(value);
                    $('#' + key).addClass('is-invalid');
                });
            }
        });
    </script>


<!--delete fucntionlity-->
<script>
    $("#datatable-tabletools").on("click", ".rem-element", function(e) {
        e.preventDefault();
        swal({
            title: "Are you sure to delete this evaluation?",
            // text: "Make sure if you have filled Vendor details before proceeding further",
            icon: "info",
            buttons: ["Cancel", "Confirm"]
        })
        .then((justTransfer) =>
        {
            if (justTransfer)
            {
                var model_id = $(this).attr("data-id");
                var url = "{{ route('so_evaluation.destroy', ":model_id") }}";

                $.ajax({
                    url: url.replace(':model_id', model_id),
                    type: 'POST',
                    data: {
                        '_method': "DELETE",
                        '_token': "{{ csrf_token() }}"
                    },
                    success: function(data, textStatus, jqXHR) {
                        if (!data.error && !data.error2) {
                            swal("Success!", data.success, "success")
                                .then((action) => {
                                    window.location.reload();
                                });
                        } else {
                            if (data.error) {
                                swal("Error!", data.error, "error");
                            } else {
                                swal("Error!", data.error2, "error");
                            }
                        }
                    },
                    error: function(error, jqXHR, textStatus, errorThrown) {
                        swal("Error!", "Something went wrong", "error");
                    },
                });
            }
        });
    });
</script>


<!-- edit -->
<script>
    $(document).ready(function() {
    $("#datatable-tabletools").on("click", ".edit-element", function(e) {
        e.preventDefault();
        var evaluation_id = $(this).attr("data-id");
        var url = "{{ route('so_evaluation_edit.edit', ':id') }}".replace(':id', evaluation_id);

        $.ajax({
            url: url,
            type: 'GET',
            success: function(data) {
                console.log("Received Data:", data); // Debugging Response

                if (data && data.so_evaluation) {
                    var evaluation = data.so_evaluation;

                    $("#addContainer").slideUp();
                    $("#btnCancel").show();
                    $("#addToTable").hide();
                    $("#editContainer").slideDown();

                    // Populate form fields
                    $("#editForm input[name='edit_model_id']").val(evaluation.id);
                    $("#editForm select[name='eva_name']").val(evaluation.eva_name).change();
                    $("#editForm input[name='mem_name']").val(evaluation.mem_name);
                    $("#editForm select[name='mem_seva']").val(evaluation.mem_seva).change();
                    $("#editForm input[name='eva_org']").val(evaluation.eva_org);

                    $("#editForm select[name='org_type']").html(data.orgtypeHtml);


                    $("#editForm input[name='eva_address']").val(evaluation.eva_address);

                    // Populate the sector dropdown
                    $("#editForm select[name='eval_sector']").html(data.sectorsHtml);

                    $("#editForm input[name='eva_incharge']").val(evaluation.eva_incharge);
                    $("#editForm input[name='eva_in_no']").val(evaluation.eva_in_no);
                    $("#editForm input[name='eva_year']").val(evaluation.eva_year);
                    $("#editForm select[name='eva_letter']").val(evaluation.eva_letter).change();
                    $("#editForm select[name='eva_documents']").html(data.documentHtml);


                    $("#editForm textarea[name='eva_gap']").val(evaluation.eva_gap);
                    $("#editForm textarea[name='eva_existing']").val(evaluation.eva_existing);
                    $("#editForm textarea[name='eva_up']").val(evaluation.eva_up);
                    $("#editForm textarea[name='eva_benefeed']").val(evaluation.eva_benefeed);
                    $("#editForm textarea[name='eve_comments']").val(evaluation.eve_comments);

                    // Smooth scroll to edit container
                    setTimeout(function() {
                        $("html, body").animate({
                            scrollTop: $("#editContainer").offset().top
                        }, 'slow');
                    }, 300);
                } else {
                    console.log("Error: Missing or malformed data", data);
                    swal("Error!", "so_evaluation data is missing or malformed", "error");
                }
            },
            error: function(xhr, status, error) {
                console.log("AJAX Error:", error);
                swal("Error!", "Something went wrong. Please try again.", "error");
            }
        });
    });
});

</script>

<script>
    $(document).ready(function() {
        $("#editForm").submit(function(e) {
            e.preventDefault();
            $("#editSubmit").prop('disabled', true);
            var formdata = new FormData(this);
            formdata.append('_method', 'PUT');
            var model_id = $('#edit_model_id').val();
            var url = "{{ route('so_evaluation.update', ':model_id') }}";
            //
            $.ajax({
                url: url.replace(':model_id', model_id),
                type: 'POST',
                data: formdata,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#editSubmit").prop('disabled', false);
                    if (!data.error2)
                        swal("Successful!", data.success, "success")
                        .then((action) => {
                            window.location.href = '{{ route('so_evaluation_master') }}';
                        });
                    else
                        swal("Error!", data.error2, "error");
                },
                statusCode: {
                    422: function(responseObject, textStatus, jqXHR) {
                        $("#editSubmit").prop('disabled', false);
                        resetErrors();
                        printErrMsg(responseObject.responseJSON.errors);
                    },
                    500: function(responseObject, textStatus, errorThrown) {
                        $("#editSubmit").prop('disabled', false);
                        swal("Error occured!", "Something went wrong please try again", "error");
                    }
                }
            });

            function resetErrors() {
                var form = document.getElementById('editForm');
                var data = new FormData(form);
                for (var [key, value] of data) {
                    var field = key.replace('[]', '');
                    $('.' + field + '_err').text('');
                    $('#' + field).removeClass('is-invalid');
                    $('#' + field).addClass('is-valid');
                }
            }

            function printErrMsg(msg) {
                $.each(msg, function(key, value) {
                    var field = key.replace('[]', '');
                    $('.' + field + '_err').text(value);
                    $('#' + field).addClass('is-invalid');
                });
            }

        });
    });
</script>

<!--seva id wise data -->
<script>
    $(document).ready(function () {
    $('#mem_seva').on('change', function () {
        var seva_id = $(this).val();

        if (seva_id) {
            $.ajax({
                url: "{{ route('get.recommendation.details') }}",
                type: "GET",
                data: { seva_id: seva_id },
                success: function (response) {
                    if (response.success) {
                        // Populate fields and make them readonly
                        $('#eva_org').val(response.data.org_name);
                        $('#org_type').html(response.orgtypeHtml);
                        // $('#org_type').val(response.data.organization_type_id).change();
                        $('#eva_address').val(response.data.address);
                        // $('#eval_sector').val(response.data.sector_id).change();
                        $('#eval_sector').html(response.sectorsHtml);
                    } else {
                        alert('No data found');
                        clearFields();
                    }
                },
                error: function () {
                    alert('Error fetching data');
                    clearFields();
                }
            });
        } else {
        }
    });
});
</script>

<!--view scritp-->
<script>
    $(document).ready(function() {
     $("#datatable-tabletools").on("click", ".view-element", function(e) {
         e.preventDefault();
         var evaluation_id = $(this).attr("data-id");
         var url = "{{ route('evaluation.view', ':id') }}".replace(':id', evaluation_id);

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                '_token': "{{ csrf_token() }}"
            },
            success: function(data) {
                if (data && data.so_evaluation) {
                    $("#addContainer").slideUp();
                    $("#btnCancel").show();
                    $("#addToTable").hide();
                    $("#editContainer").hide();

                    $("#viewContainer").hide().slideDown(400, function() {
                        $("html, body").animate({
                            scrollTop: $("#viewContainer").offset().top
                        }, 'slow');
                    });

                    // Corrected variable name
                    let evaluations = data.so_evaluation;

                    $("#editForm input[name='edit_model_id']").val(evaluations.id);
                    $("#viewFormevaluation input[name='seva_id']").val(evaluations.seva_id);
                    $("#viewFormevaluation select[name='eva_name']").val(evaluations.eva_name).change();
                    $("#viewFormevaluation input[name='mem_name']").val(evaluations.mem_name);
                    $("#viewFormevaluation select[name='mem_seva']").val(evaluations.mem_seva).change();
                    $("#viewFormevaluation input[name='eva_org']").val(evaluations.eva_org);

                    $("#viewFormevaluation select[name='org_type']").html(data.orgtypeHtml);
                    $("#viewFormevaluation input[name='eva_address']").val(evaluations.eva_address);
                    $("#viewFormevaluation select[name='eval_sector']").html(data.sectorsHtml);
                    $("#viewFormevaluation input[name='eva_incharge']").val(evaluations.eva_incharge);
                    $("#viewFormevaluation input[name='eva_in_no']").val(evaluations.eva_in_no);
                    $("#viewFormevaluation input[name='eva_year']").val(evaluations.eva_year);
                    $("#viewFormevaluation select[name='eva_letter']").val(evaluations.eva_letter).change();
                    // $("#viewFormevaluation select[name='eva_documents']").val(evaluations.eva_documents).change();
                    $("#viewFormevaluation select[name='eva_documents']").html(data.documentHtml);

                    $("#viewFormevaluation textarea[name='eva_gap']").val(evaluations.eva_gap);
                    $("#viewFormevaluation textarea[name='eva_existing']").val(evaluations.eva_existing);
                    $("#viewFormevaluation textarea[name='eva_up']").val(evaluations.eva_up);
                    $("#viewFormevaluation textarea[name='eva_benefeed']").val(evaluations.eva_benefeed);
                    $("#viewFormevaluation textarea[name='eve_comments']").val(evaluations.eve_comments);
                } else {
                    swal("Error!", "Sector data is missing or malformed", "error");
                }
            },
        });

     });


     $("#btnCancel").click(function() {
         $("#viewContainer").slideUp(300, function() {
             $("html, body").animate({
                 scrollTop: $("#datatable-tabletools").offset().top
             }, 200);
         });
     });
 });
</script>

<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>







</x-admin.admin-layout>



