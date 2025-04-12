<x-admin.admin-layout>
    <style>
        /* Apply color #665ed5 to the input field border */
        .custom-input {
            border: 2px solid #665ed5 !important;
            border-radius: 5px;
            padding: 8px;
        }

        /* Style the submit button */
        .custom-submit-btn {
            background-color: #665ed5 !important;
            color: white !important;
            border: none !important;
            padding: 10px 20px;
            border-radius: 5px;
        }

        /* Change button hover effect */
        .custom-submit-btn:hover {
            background-color: #5748c5 !important;
        }
    </style>
    <x-slot name="title">Recommendation Master</x-slot>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>So Evaluation Pending List</h3>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </div>



         {{-- view Form --}}
         <div class="row" id="viewContainerp" style="display:none;">
            <div class="col">
                <form class="form-horizontal form-bordered" method="post" id="viewFormevaluationp">
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


        <!--Reason modal-->
        <div id="rejectModal" class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Reject Evaluation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="reject_id">
                        <label for="reject_reason">Reason:</label>
                        <input type="text" id="reject_reason" class="form-control" placeholder="Enter reason">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" id="submitReject" class="btn btn-danger">Submit</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid support-ticket" id="tableid">
            <div class="row">
                   <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="">
                                        {{-- <button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button> --}}
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
                                            <th>Address</th>
                                            <th>Organization</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sopendinglist as $list)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $list->mem_seva }}</td>
                                            <td>{{ $list->eva_name }}</td>
                                            <td>{{ $list->eva_address }}</td>
                                            <td>{{ $list->eva_org }}</td>
                                            <td>
                                                <button class="btn btn-success approve-element px-2 py-1" title="Approve Evaluation" data-id="{{ $list->id }}">
                                                    <i data-feather="check"></i> Approve
                                                </button>
                                                <button class="btn btn-danger reject-element px-2 py-1" title="Reject Evaluation" data-id="{{ $list->id }}">
                                                    <i data-feather="x"></i> Reject
                                                </button>
                                                <button class="view-elementp btn btn-primary px-2 py-1" title="Edit User" data-id="{{ $list->id }}">
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
        <!-- Container-fluid Ends-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click', '.approve-element, .reject-element', function() {
        let id = $(this).data('id');
        let action = $(this).hasClass('approve-element') ? 'approve' : 'reject';

        if (action === 'reject') {
            // Show SweetAlert with input field for reason
            Swal.fire({
                title: "Reject Evaluation",
                input: "text",
                inputPlaceholder: "Enter rejection reason",
                showCancelButton: true,
                confirmButtonText: "Submit",
                cancelButtonText: "Cancel",
                inputValidator: (value) => {
                    if (!value) {
                        return "Reason is required!";
                    }
                },
                customClass: {
                    input: 'custom-input',
                    confirmButton: 'custom-submit-btn'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    sendAjaxRequest(id, action, result.value);
                }
            });
        } else {
            // Directly send approve request
            sendAjaxRequest(id, action);
        }
    });

    function sendAjaxRequest(id, action, reason = null) {
        $.ajax({
            url: '/evaluation_status/' + action,
            type: 'POST',
            data: {
                id: id,
                reason: reason,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                console.log("Response:", response);
                if (response.message) {
                    Swal.fire({
                        title: "Success!",
                        text: response.message,
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then(() => {
                        // Hide row after success
                        $(`.approve-element[data-id="${id}"], .reject-element[data-id="${id}"]`).closest('tr').fadeOut();
                    });
                } else {
                    Swal.fire({
                        title: "Error!",
                        text: "Unexpected response format!",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                }
            },
            error: function(error) {
                console.log("AJAX Error:", error);
                Swal.fire({
                    title: "Error!",
                    text: error.responseText || "Something went wrong!",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });
    }
</script>




<!--view scritp-->
<script>
    $(document).ready(function() {
     $("#datatable-tabletools").on("click", ".view-elementp", function(e) {
         e.preventDefault();
         var evaluation_id = $(this).attr("data-id");
         var url = "{{ route('evaluation.pendingview', ':id') }}".replace(':id', evaluation_id);

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

                    $("#viewContainerp").hide().slideDown(400, function() {
                        $("html, body").animate({
                            scrollTop: $("#viewContainerp").offset().top
                        }, 'slow');
                    });

                    // Corrected variable name
                    let evaluations = data.so_evaluation;

                    $("#editForm input[name='edit_model_id']").val(evaluations.id);
                    $("#viewFormevaluationp input[name='seva_id']").val(evaluations.seva_id);
                    $("#viewFormevaluationp select[name='eva_name']").val(evaluations.eva_name).change();
                    $("#viewFormevaluationp input[name='mem_name']").val(evaluations.mem_name);
                    $("#viewFormevaluationp input[name='mem_seva']").val(evaluations.mem_seva);
                    $("#viewFormevaluationp input[name='eva_org']").val(evaluations.eva_org);
                    $("#viewFormevaluationp select[name='org_type']").val(evaluations.org_type);
                    $("#viewFormevaluationp input[name='eva_address']").val(evaluations.eva_address);

                    $("#viewFormevaluationp select[name='eval_sector']").html(data.sectorsHtml);

                    $("#viewFormevaluationp input[name='eva_incharge']").val(evaluations.eva_incharge);
                    $("#viewFormevaluationp input[name='eva_in_no']").val(evaluations.eva_in_no);
                    $("#viewFormevaluationp input[name='eva_year']").val(evaluations.eva_year);
                    $("#viewFormevaluationp select[name='eva_letter']").val(evaluations.eva_letter).change();
                    // $("#viewFormevaluation select[name='eva_documents']").val(evaluations.eva_documents).change();

                    $("#viewFormevaluationp select[name='eva_documents']").html(data.documentHtml);
                    $("#viewFormevaluationp textarea[name='eva_gap']").val(evaluations.eva_gap);
                    $("#viewFormevaluationp textarea[name='eva_existing']").val(evaluations.eva_existing);
                    $("#viewFormevaluationp textarea[name='eva_up']").val(evaluations.eva_up);
                    $("#viewFormevaluationp textarea[name='eva_benefeed']").val(evaluations.eva_benefeed);
                    $("#viewFormevaluationp textarea[name='eve_comments']").val(evaluations.eve_comments);
                } else {
                    swal("Error!", "Sector data is missing or malformed", "error");
                }
            },
        });

     });


     $("#btnCancel").click(function() {
         $("#viewContainerp").slideUp(300, function() {
             $("html, body").animate({
                 scrollTop: $("#datatable-tabletools").offset().top
             }, 200);
         });
     });
 });
</script>
</x-admin.admin-layout>



