<x-admin.admin-layout>
    <x-slot name="title">So Evaluation Approve</x-slot>

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>So Evaluation Approved List</h3>
                    </div>
                </div>
            </div>
        </div>


         {{-- view Form --}}
         <div class="row" id="viewContainerapprove" style="display:none;">
            <div class="col">
                <form class="form-horizontal form-bordered" method="post" id="viewFormevaluationapprove">
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
                                        <option value="Core team member">Core team member</option>
                                        <option value="Area coordinator">Area coordinator</option>
                                    </select>
                                    <span class="text-danger error-text volunteer_name_err"></span>
                                </div>


                                <div class="col-md-4 mt-3">
                                    <label class="col-form-label" for="mem_name">Name of the member <span class="text-danger">*</span> </label>
                                    <input class="form-control" id="mem_name" Readonly name="mem_name" type="text" placeholder="Enter Sector Initial">
                                    <span class="text-danger error-text volunteer_name_err"></span>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label class="col-form-label" for="mem_seva">Enter Seva ID <span class="text-danger">*</span> </label>
                                    <input class="form-control" id="mem_seva" Readonly name="mem_seva" type="text" >

                                    <span class="text-danger error-text volunteer_name_err"></span>
                                </div>


                                <div class="col-md-4 mt-3">
                                    <label class="col-form-label" for="eva_org">Name of Organization <span class="text-danger">*</span> </label>
                                    <input class="form-control" id="eva_org" name="eva_org" Readonly type="text" placeholder="Enter Sector Initial" >
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

                                        </select>
                                        <span class="text-danger error-text volunteer_name_err"></span>
                                    </div>




                                <div class="col-md-4 mt-3">
                                    <label class="col-form-label" for="eva_address"> Address in short <span class="text-danger">*</span> </label>
                                    <input class="form-control" id="eva_address" Readonly name="eva_address" type="text" placeholder="Enter Sector Initial">
                                    <span class="text-danger error-text volunteer_name_err"></span>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label class="col-form-label" for="eval_sector">Sectors <span class="text-danger">*</span> </label>
                                    <select class="js-example-basic-multiple" id="eval_sector" name="eval_sector" multiple="multiple">

                                        <option value="">Select Sector</option>

                                    </select>
                                    <span class="text-danger error-text volunteer_name_err"></span>
                                </div>



                                <div class="col-md-4 mt-3">
                                    <label class="col-form-label" for="eva_incharge">Inchanrge Name <span class="text-danger">*</span> </label>
                                    <input class="form-control" id="eva_incharge" name="eva_incharge" Readonly type="text" placeholder="Enter Sector Initial">
                                    <span class="text-danger error-text volunteer_name_err"></span>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label class="col-form-label" for="eva_in_no">Incharge No <span class="text-danger">*</span> </label>
                                    <input class="form-control" id="eva_in_no" name="eva_in_no" Readonly type="text" placeholder="Enter Sector Initial">
                                    <span class="text-danger error-text volunteer_name_err"></span>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label class="col-form-label" for="eva_year">Years of work
                                        <span class="text-danger">*</span> </label>
                                    <input class="form-control" id="eva_year" name="eva_year" Readonly type="text" placeholder="Enter Sector Initial">
                                    <span class="text-danger error-text volunteer_name_err"></span>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label class="col-form-label" for="eva_letter">Does the organization has following?<span class="text-danger">*</span></label>
                                    <select class="form-control" id="eva_letter" name="eva_letter" Readonly>
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

                                    </select>

                                    <span class="text-danger error-text volunteer_name_err"></span>
                                </div>



                                <div class="col-md-4 mt-3">
                                    <label class="col-form-label" for="eva_gap">Gaps identified/Needs
                                        <span class="text-danger">*</span> </label>
                                    {{-- <input class="form-control" id="eva_gap" name="eva_gap" type="text" placeholder="Enter Sector Initial"> --}}
                                    <textarea class="form-control" id="eva_gap" name="eva_gap" rows="4" placeholder="Enter Comments" Readonly></textarea>
                                    <span class="text-danger error-text volunteer_name_err"></span>
                                </div>


                                <div class="col-md-4 mt-3">
                                    <label class="col-form-label" for="eva_existing">Existing tie ups
                                    <span class="text-danger">*</span> </label>
                                    {{-- <input class="form-control" id="eva_existing" name="eva_existing" type="text" placeholder="Enter Sector Initial"> --}}
                                    <textarea class="form-control" id="eva_existing" name="eva_existing" rows="4" placeholder="Enter Comments" Readonly></textarea>
                                    <span class="text-danger error-text volunteer_name_err"></span>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label class="col-form-label" for="eva_up">Possible tie ups

                                    <span class="text-danger">*</span> </label>
                                    {{-- <input class="form-control" id="eva_up" name="eva_up" type="text" placeholder="Enter Sector Initial"> --}}
                                    <textarea class="form-control" id="eva_up" name="eva_up" rows="4" placeholder="Enter Comments" Readonly></textarea>
                                    <span class="text-danger error-text volunteer_name_err"></span>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label class="col-form-label" for="eva_benefeed">
                                        Beneficiary feedback <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control" id="eva_benefeed" name="eva_benefeed" rows="4" placeholder="Enter Comments" Readonly></textarea>
                                    <span class="text-danger error-text volunteer_name_err"></span>
                                </div>

                                 <div class="col-md-4 mt-3">
                                    <label class="col-form-label" for="eve_comments">
                                        Comments(Best challenges) <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control" id="eve_comments" name="eve_comments" rows="4" placeholder="Enter Comments" Readonly></textarea>
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
        <div class="container-fluid support-ticket" id="tableid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <button id="btnCancel" class="btn btn-danger" style="display:none;">Cancel</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="display table-bordered" id="datatable-tabletools">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>SEVA ID</th>
                                            <th>Evaluating Name</th>
                                            <th>Address</th>
                                            <th>Organization</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($approvedEvaluations as $list)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $list->mem_seva }}</td>
                                            <td>{{ $list->eva_name }}</td>
                                            <td>{{ $list->eva_address }}</td>
                                            <td>{{ $list->eva_org }}</td>
                                            <td>
                                                <button class="btn btn-success" title="Approved" disabled>
                                                    <i data-feather="check"></i> Approved
                                                </button>
                                                <button class="view-elementapprove btn btn-primary px-2 py-1" title="Edit User" data-id="{{ $list->id }}">
                                                    <i data-feather="eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
     $("#datatable-tabletools").on("click", ".view-elementapprove", function(e) {
         e.preventDefault();
         var evaluation_id = $(this).attr("data-id");
         var url = "{{ route('evaluation.approveview', ':id') }}".replace(':id', evaluation_id);

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

                    $("#viewContainerapprove").hide().slideDown(400, function() {
                        $("html, body").animate({
                            scrollTop: $("#viewContainerapprove").offset().top
                        }, 'slow');
                    });

                    // Corrected variable name
                    let evaluations = data.so_evaluation;

                    $("#editForm input[name='edit_model_id']").val(evaluations.id);
                    $("#viewFormevaluationapprove input[name='seva_id']").val(evaluations.seva_id);
                    $("#viewFormevaluationapprove select[name='eva_name']").val(evaluations.eva_name).change();
                    $("#viewFormevaluationapprove input[name='mem_name']").val(evaluations.mem_name);
                    $("#viewFormevaluationapprove input[name='mem_seva']").val(evaluations.mem_seva);
                    $("#viewFormevaluationapprove input[name='eva_org']").val(evaluations.eva_org);
                    $("#viewFormevaluationapprove select[name='org_type']").val(evaluations.org_type);
                    $("#viewFormevaluationapprove input[name='eva_address']").val(evaluations.eva_address);

                    $("#viewFormevaluationapprove select[name='eval_sector']").html(data.sectorsHtml);

                    $("#viewFormevaluationapprove input[name='eva_incharge']").val(evaluations.eva_incharge);
                    $("#viewFormevaluationapprove input[name='eva_in_no']").val(evaluations.eva_in_no);
                    $("#viewFormevaluationapprove input[name='eva_year']").val(evaluations.eva_year);
                    $("#viewFormevaluationapprove select[name='eva_letter']").val(evaluations.eva_letter).change();
                    // $("#viewFormevaluation select[name='eva_documents']").val(evaluations.eva_documents).change();

                    $("#viewFormevaluationapprove select[name='eva_documents']").html(data.documentHtml);
                    $("#viewFormevaluationapprove textarea[name='eva_gap']").val(evaluations.eva_gap);
                    $("#viewFormevaluationapprove textarea[name='eva_existing']").val(evaluations.eva_existing);
                    $("#viewFormevaluationapprove textarea[name='eva_up']").val(evaluations.eva_up);
                    $("#viewFormevaluationapprove textarea[name='eva_benefeed']").val(evaluations.eva_benefeed);
                    $("#viewFormevaluationapprove textarea[name='eve_comments']").val(evaluations.eve_comments);
                } else {
                    swal("Error!", "Sector data is missing or malformed", "error");
                }
            },
        });

     });


     $("#btnCancel").click(function() {
         $("#viewContainerapprove").slideUp(300, function() {
             $("html, body").animate({
                 scrollTop: $("#datatable-tabletools").offset().top
             }, 200);
         });
     });
 });
</script>

</x-admin.admin-layout>
