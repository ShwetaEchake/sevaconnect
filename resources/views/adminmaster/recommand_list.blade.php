<x-admin.admin-layout>
    <x-slot name="title">Induction Master</x-slot>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">

                {{-- Edit Form --}}
                 <div class="row" id="editContainer" style="display:none;">
                    <div class="col">
                        <form class="form-horizontal form-bordered" method="post" id="editFormrecommendation">
                            @csrf
                            <section class="card">
                                <header class="card-header">
                                    <h4 class="card-title">Edit Social Organization</h4>
                                </header>

                                <div class="card-body py-2">

                                    <input type="hidden" id="edit_model_id" name="edit_model_id" value="">

                                    <div class="row">

                                        <div class="col-md-4 mt-3">
                                            <label for="name">Who are you?</label>
                                            <select name="user_type" id="name" class="form-control">
                                                <option value="" disabled>--select--</option>
                                                <option value="Individual" disabled>Individual</option>
                                                <option value="Social Organization" selected>Social Organization</option>
                                                <option value="Independent organization" disabled>Independent organization</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label>Seva ID:</label>
                                            <input type="text" class="form-control" name="seva_id" id="seva_id" placeholder="Enter Organization"  required Readonly>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>





                                        <div class="col-md-4 mt-3">
                                            <label>Type of organization<span class="text-danger">*</span> </label>
                                            <select name="organization_type_id" id="organization_type_id" class="form-control">
                                                @foreach($orgTypes as $orgType)
                                                    <option value="{{ $orgType->id }}">{{ $orgType->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3" id="ngo_details_div">
                                            <label for="ngo_details">NGO details</label>
                                            <select name="ngo_details" id="ngo_details" class="form-control" >
                                                @foreach($ngoTypes as $ngoType)
                                                   <option value="{{$ngoType->id}}">{{$ngoType->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label for="org_name">Name of organization<span class="text-danger">*</span> </label>
                                            <input type="text" name="org_name" id="org_name" class="form-control" placeholder="Enter Organization Name" pattern="^[A-Za-z\s]+$" >
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label for="managing">Managing trustee/director</label>
                                            <input type="text" class="form-control" name="managing" id="managing" placeholder="Enter Managing trustee/director">
                                        </div>

                                         <div class="col-md-4 mt-3">
                                            <label for="org_contact_name">Name Contact person of SO</label>
                                            <input type="text" name="org_contact_name" class="form-control" id="org_contact_name" placeholder="Enter Contact Person Of SO" pattern="^[A-Za-z\s]+$" >
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label for="org_contact_no">Mobile number of contact person </label>
                                            <input type="text" name="org_contact_no" id="org_contact_no" class="form-control" placeholder="Enter Mobile number of contact person" pattern="[789][0-9]{9}" maxlength="10" >
                                        </div>

                                        {{-- <div class="col-md-4 mt-3">
                                            <label for="address">Registered address</label>
                                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter Registered Address">
                                        </div> --}}

                                        <div class="col-md-4 mt-3">
                                            <label for="contact_address">Contact address</label>
                                            <input type="text" class="form-control" name="contact_address" id="contact_address" placeholder="Enter Contact Address">
                                        </div>


                                        {{-- <div class="col-md-4 mt-3">
                                            <label>Address:</label>
                                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div> --}}



                                        <div class="col-md-4 mt-3">
                                            <label>Geographical Area Of Impact :</label>
                                            {{-- <input type="text" class="form-control" name="work_place" id="work_place" placeholder="Enter Address"> --}}
                                            <textarea name="work_place" class="form-control" id="work_place" placeholder="eg.(thane corporation,bhivandi corporation)..." rows="2"></textarea>

                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>




                                        {{-- <div class="col-md-4 mt-3">
                                            <label for="area">Area of work</label>
                                            <input type="text" name="area" class="form-control" id="area" placeholder="Enter Area of Work">
                                        </div> --}}

                                        <div class="col-md-4 mt-3">
                                            <label for="email">Email ID</label>
                                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email ID">
                                        </div>

                                        {{-- <div class="col-md-4 mt-3">
                                            <label for="year">Year of Establishment</label>
                                            <input type="text" name="year" class="form-control" id="year" placeholder="Enter Year Of Establishment">
                                        </div> --}}

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eval_sector">Sectors <span class="text-danger">*</span></label>

                                            <select class="js-example-basic-multiple" id="sector_id" name="sector_id[]" multiple="multiple">
                                                <option value="">Select Sector</option>
                                                @foreach($sectors as $sector)
                                                    <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label for="sub_sectors_induction">Sub-Sectors</label><br>
                                            <select name="sub_sector_id[]" id="sub_sectors_induction" class="js-example-basic-multiple" multiple="multiple">

                                            </select>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label for="vision_induction">Vision and mission statement</label>
                                            <input type="text" name="vision_induction" class="form-control" id="vision" placeholder="Vision and mission statement">
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label for="current">Current nature of work</label>
                                            <input type="text" name="current" class="form-control" id="current" placeholder="Enter Current Nature Of Work">
                                        </div>




                                        {{-- <div class="col-md-4 mt-3">
                                            <label>Visit Organization Yourself?</label>
                                            <select class="form-control" name="is_visited" id="is_visited">
                                                <option value="" disabled selected>Visit Organisation</option>
                                                <option value="1">YES</option>
                                                <option value="0">NO</option>
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div> --}}

                                        {{-- <div class="col-md-4 mt-3">
                                            <label>Your Contact Number:</label>
                                            <input type="text" class="form-control" name="contact_no" id="contact_no" placeholder="Enter Your Contact Number" pattern="[789][0-9]{9}" maxlength="10" title="Contact number must be 10 digits and start with 7, 8, or 9" required>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div> --}}

                                        {{-- <div class="col-md-12 mt-3">
                                            <label>Short Description:</label>
                                            <textarea class="form-control" name="opinion" id="opinion" placeholder="Your opinion in short..." rows="4"></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div> --}}
                                    </div>


                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary" id="editrecommendSubmit">Update</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>






                 {{-- view Form --}}
                 <div class="row" id="viewContainer" style="display:none;">
                    <div class="col">
                        <form class="form-horizontal form-bordered" method="post" id="viewFormrecommendation">
                            @csrf
                            <section class="card">
                                <header class="card-header">
                                    <h4 class="card-title">View Social Organization</h4>
                                </header>

                                <div class="card-body py-2">

                                    <input type="hidden" id="edit_model_id" name="edit_model_id" value="">

                                    <div class="row">

                                        <div class="col-md-4 mt-3">
                                            <label for="name">Who are you?</label>
                                            <select name="user_type" id="name" class="form-control" disabled>
                                                <option value="" disabled>--select--</option>
                                                <option value="Individual">Individual</option>
                                                <option value="Social Organization" selected>Social Organization</option>
                                                <option value="Independent organization">Independent organization</option>
                                            </select>
                                            <input type="hidden" name="user_type" value="Social Organization">
                                        </div>





                                        <div class="col-md-4 mt-3">
                                            <label>Seva ID:</label>
                                            <input type="text" class="form-control" name="seva_id" id="seva_id" placeholder="Enter Organization"  required Readonly>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>




                                        <div class="col-md-4 mt-3">
                                            <label>Organization Type:</label>
                                            <select name="organization_type_id" id="organization_type_id" class="form-control" disabled>
                                                @foreach($orgTypes as $orgType)
                                                    <option value="{{ $orgType->id }}">{{ $orgType->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3" id="ngo_details_div_one">
                                            <label for="ngo_details">NGO details</label>
                                            <select name="ngo_details" id="ngo_details" class="form-control" disabled>
                                                @foreach($ngoTypes as $ngoType)
                                                   <option value="{{$ngoType->id}}">{{$ngoType->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                          <div class="col-md-4 mt-3">
                                            <label for="org_name">Name of organization</label>
                                            <input type="text" name="org_name" id="org_name" class="form-control" placeholder="Enter Organization Name" pattern="^[A-Za-z\s]+$" disabled>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label for="managing">Managing trustee/director</label>
                                            <input type="text" class="form-control" name="managing" id="managing" placeholder="Enter Managing trustee/director" disabled>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label for="org_contact_name">Name Contact person of SO</label>
                                            <input type="text" name="org_contact_name" class="form-control" id="org_contact_name" placeholder="Enter Contact Person Of SO" pattern="^[A-Za-z\s]+$" disabled>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label for="org_contact_no">Mobile number of contact person </label>
                                            <input type="text" name="org_contact_no" id="org_contact_no" class="form-control" placeholder="Enter Mobile number of contact person" pattern="[789][0-9]{9}" maxlength="10" disabled>
                                        </div>



                                        {{-- <div class="col-md-4 mt-3">
                                            <label for="address">Registered address</label>
                                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter Registered Address" disabled>
                                        </div> --}}

                                        <div class="col-md-4 mt-3">
                                            <label for="contact_address">Contact address</label>
                                            <input type="text" class="form-control" name="contact_address" id="contact_address" placeholder="Enter Contact Address" disabled>
                                        </div>



                                        <div class="col-md-4 mt-3">
                                            <label>Geographical Area of Impact:</label>
                                            <textarea name="work_place" class="form-control" id="work_place" placeholder="eg.(thane corporation,bhivandi corporation)..." rows="2" disabled></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>




                                        {{-- <div class="col-md-4 mt-3">
                                            <label for="area">Area of work</label>
                                            <input type="text" name="area" class="form-control" id="area" placeholder="Enter Area of Work" disabled>
                                        </div> --}}

                                        <div class="col-md-4 mt-3">
                                            <label for="email">Email ID</label>
                                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email ID" disabled>
                                        </div>

                                        {{-- <div class="col-md-4 mt-3">
                                            <label for="year">Year of Establishment</label>
                                            <input type="text" name="year" class="form-control" id="year" placeholder="Enter Year Of Establishment" disabled>
                                        </div> --}}

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eval_sector">Sectors <span class="text-danger">*</span></label>

                                            <select class="js-example-basic-multiple" id="sector_id" name="sector_id[]" multiple="multiple" disabled>
                                                <option value="">Select Sector</option>
                                                @foreach($sectors as $sector)
                                                    <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label for="sub_sectors_induction">Sub-Sectors</label><br>
                                            <select name="sub_sector_id[]" id="sub_sectors_induction" class="js-example-basic-multiple" multiple="multiple" disabled>

                                            </select>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label for="vision_induction">Vision and mission statement</label>
                                            <input type="text" name="vision_induction" class="form-control" id="vision" placeholder="Vision and mission statement" disabled>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label for="current">Current nature of work</label>
                                            <input type="text" name="current" class="form-control" id="current" placeholder="Enter Current Nature Of Work" disabled>
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
                        <h3>Social Organization List</h3>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
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
                                            <th>Seva ID</th>
                                            <th>Organization Name</th>
                                            <th>Name of contact Person</th> 
                                            <th>Phone No</th>
                                            
                                           
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recommandlist as $recommend)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $recommend->seva_id }}</td>
                                                <td>{{ $recommend->org_name }}</td>
                                                <td>{{ $recommend->org_contact_name }}</td> 
                                                <td>{{ $recommend->org_contact_no }}</td>
                                            
                                                {{-- <td>{{ $recommend->orgType?->name}}</td> --}}
                                                {{-- <td>
                                                    @foreach ($recommend->sectors as $sector)
                                                        {{ $sector->sector->group_by('name') }} {{ $loop->last ? '' : ', ' }}
                                                    @endforeach

                                                </td> --}}
                                                {{-- <td>{{ $recommend->sectors?->name }}</td> --}}
                                                
                                              
                                                <td>
                                                    @if($recommend->status==0)
                                                    <div class="d-flex gap-2">
                                                        <button class="btn btn-success btn-sm approve-element" style="font-size:0.7rem;" title="Approve Evaluation" data-id="{{ $recommend->id }}">
                                                            Approve
                                                        </button>
                                                        <button class="btn btn-danger btn-sm reject-element" style="font-size:0.7rem;" title="Reject Evaluation" data-id="{{ $recommend->id }}">
                                                            Reject
                                                        </button>
                                                    </div>
                                                    @elseif($recommend->status==1)
                                                    <b class="text-success">Approved</b>
                                                    @elseif($recommend->status==2)
                                                  
                                                    <b class="text-danger">Rejected</b>
                                                    @endif
                                                </td>


                                                <td>
                                                    <button class="edit-element btn btn-primary px-2 py-1" title="Edit User" data-id="{{ $recommend->id }}">
                                                        <i data-feather="edit"></i>
                                                    </button>
                                                    <br>

                                                    <button class="view-element btn btn-primary px-2 py-1" title="Edit User" data-id="{{ $recommend->id }}">
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





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- edit -->
<script>
   $(document).ready(function() {

    $('#organization_type_id').on('change',function(e){

    var ngo = ($('#organization_type_id option:selected').text());

    if(ngo == 'NGO')
    {
        $('#ngo_details_div').show();
    }else{
        $('#ngo_details_div').hide();
    }
})

    $("#datatable-tabletools").on("click", ".edit-element", function(e) {
        e.preventDefault();
        var recommnad_id = $(this).attr("data-id");
        var url = "{{ route('recommend.edit', ':id') }}".replace(':id', recommnad_id);

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                '_token': "{{ csrf_token() }}"
            },
            success: function(data) {
                if (data && data.recommands) {
                    $("#addContainer").slideUp();
                    $("#btnCancel").show();
                    $("#addToTable").hide();
                    $("#viewContainer").hide();
                    $("#editContainer").slideDown();

                    $("#editFormrecommendation input[name='edit_model_id']").val(data.recommands.id);
                    $("#editFormrecommendation input[name='seva_id']").val(data.recommands.seva_id);
                    $("#editFormrecommendation input[name='org_name']").val(data.recommands.org_name);
                    $("#editFormrecommendation select[name='organization_type_id']").val(data.recommands.organization_type_id);

                    let selectedText = $("#editFormrecommendation select[name='organization_type_id'] option:selected").text();
                      if(selectedText == 'NGO'){
                        $('#ngo_details_div').show();
                    }else{
                        $('#ngo_details_div').hide();
                    }
                    $("#editFormrecommendation input[name='managing']").val(data.recommands.managing);
                    $("#editFormrecommendation input[name='address']").val(data.recommands.address);
                    $("#editFormrecommendation select[name='ngo_details']").val(data.recommands.ngo_type_id);

                    $("#editFormrecommendation input[name='contact_address']").val(data.recommands.contact_address);
                    $("#editFormrecommendation input[name='area']").val(data.recommands.area);
                    $("#editFormrecommendation input[name='email']").val(data.recommands.email);
                    $("#editFormrecommendation input[name='year']").val(data.recommands.year);
                    $("#editFormrecommendation input[name='year']").val(data.recommands.year);
                    $("#editFormrecommendation input[name='vision_induction']").val(data.recommands.vision_induction);
                    $("#editFormrecommendation input[name='current']").val(data.recommands.current);
                    $("#editFormrecommendation select[name='sector_id[]']").html(data.sectorHtml);
                    $("#editFormrecommendation select[name='sub_sector_id[]']").html(data.subsectorHtml).trigger('change');
                    $("#editFormrecommendation input[name='phone_no']").val(data.recommands.phone_no);
                    $("#editFormrecommendation input[name='org_contact_name']").val(data.recommands.org_contact_name);
                    $("#editFormrecommendation input[name='org_contact_no']").val(data.recommands.org_contact_no);
                    $("#editFormrecommendation select[name='is_visited']").val(data.recommands.is_visited);
                    $("#editFormrecommendation input[name='contact_no']").val(data.recommands.contact_no);
                    $("#editFormrecommendation textarea[name='opinion']").val(data.recommands.opinion);
                    $("#editFormrecommendation textarea[name='work_place']").val(data.recommands.work_place);
                    $("#editFormrecommendation select[name='is_connected']").val(data.recommands.is_connected);
                    


                    let sectors = data.recommend_sector;
                    let selectedSector = data.recommands.recommend_sector;

                    let sectorOptions = `<option value="" disabled>Select Sectors</option>`;
                    $.each(sectors, function(index, sector) {
                        let isSelected = (sector.id == selectedSector) ? "selected" : "";
                        sectorOptions += `<option value="${sector.id}" ${isSelected}>${sector.sector_name}</option>`;
                    });

                    $("#editFormrecommendation select[name='recommend_sector']").html(sectorOptions);

                    // ✅ Smooth scroll to the form
                    setTimeout(function() {
                        $("html, body").animate({
                            scrollTop: $("#editContainer").offset().top
                        }, 'slow');
                    }, 300);
                } else {
                    swal("Error!", "Sector data is missing or malformed", "error");
                }
            },
        });
    });
});
</script>



<!--update recommendation form -->
<script>
    $(document).ready(function() {
    
        $("#editFormrecommendation").submit(function(e) {
            e.preventDefault();
            $("#editrecommendSubmit").prop('disabled', true);
    
            var formdata = new FormData(this);
            formdata.append('_method', 'PUT');
    
            var model_id = $('#edit_model_id').val();
            var url = "{{ route('recommends.update', ':model_id') }}".replace(':model_id', model_id);
    
            $.ajax({
                url: url,
                type: 'POST',
                data: formdata,
                contentType: false,
                processData: false,
    
                success: function(data) {
                    $("#editrecommendSubmit").prop('disabled', false);
    
                    if (!data.error2) {
                        swal("Successful!", data.success, "success")
                        .then(() => {
                            // Reset form & Select2 fields
                            $('#editFormrecommendation')[0].reset();
                            $('.select2').val(null).trigger('change');
    
                            window.location.href = '{{ route('recommendlist_master') }}';
                        });
                    } else {
                        swal("Error!", data.error2, "error");
                    }
                },
    
                statusCode: {
                    422: function(responseObject) {
                        $("#editrecommendSubmit").prop('disabled', false);
                        resetErrors();
                        printErrMsg(responseObject.responseJSON.errors);
                    },
                    500: function() {
                        $("#editrecommendSubmit").prop('disabled', false);
                        swal("Error occurred!", "Something went wrong, please try again", "error");
                    }
                }
            });
    
            // Reset validation errors
            function resetErrors() {
                var form = document.getElementById('editFormrecommendation');
                var data = new FormData(form);
                for (var [key] of data) {
                    var field = key.replace('[]', '');
                    $('.' + field + '_err').text('');
                    $('#' + field).removeClass('is-invalid');
                    $('#' + field).addClass('is-valid');
                }
            }
    
            // Print validation error messages
            function printErrMsg(msg) {
                $.each(msg, function(key, value) {
                    var field = key.replace('[]', '');
                    $('.' + field + '_err').text(value[0]);
                    $('#' + field).addClass('is-invalid');
                });
            }
        });
    
        // Initialize select2 if not already
        $('.select2').select2({
            placeholder: "Select an option",
            width: '100%'
        });
    
    });
    </script>
    

<!--view scritp-->
<script>
   $(document).ready(function() {

    $('#organization_type_id').on('change',function(e){
        var ngo = ($('#organization_type_id option:selected').text());
        if(ngo == 'NGO')
        {
         $('#ngo_details_div_one').show();
        }else{
         $('#ngo_details_div_one').hide();
       }
    })

    $("#datatable-tabletools").on("click", ".view-element", function(e) {
        e.preventDefault();
        var recommnad_id = $(this).attr("data-id");
        var url = "{{ route('recommend.view', ':id') }}".replace(':id', recommnad_id);

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                '_token': "{{ csrf_token() }}"
            },
            success: function(data) {
                if (data && data.recommands) {
                    $("#addContainer").slideUp();
                    $("#btnCancel").show();
                    $("#addToTable").hide();
                    $("#editContainer").hide();


                    $("#viewContainer").hide().slideDown(400, function() {
                        $("html, body").animate({
                            scrollTop: $("#viewContainer").offset().top
                        }, 'slow');
                    });






                    $("#viewFormrecommendation input[name='edit_model_id']").val(data.recommands.id);
                    $("#viewFormrecommendation input[name='seva_id']").val(data.recommands.seva_id);
                    $("#viewFormrecommendation input[name='org_name']").val(data.recommands.org_name);
                    $("#viewFormrecommendation select[name='organization_type_id']").val(data.recommands.organization_type_id);

                            let selectedText = $("#viewFormrecommendation select[name='organization_type_id'] option:selected").text();
                            if(selectedText == 'NGO'){
                                $('#ngo_details_div_one').show();
                            }else{
                                $('#ngo_details_div_one').hide();
                            }
                    $("#viewFormrecommendation select[name='ngo_details']").val(data.recommands.ngo_type_id);
                    $("#viewFormrecommendation input[name='address']").val(data.recommands.address);
                    $("#viewFormrecommendation input[name='phone_no']").val(data.recommands.phone_no);
                    $("#viewFormrecommendation input[name='org_contact_name']").val(data.recommands.org_contact_name);
                    $("#viewFormrecommendation input[name='org_contact_no']").val(data.recommands.org_contact_no);
                    $("#viewFormrecommendation select[name='is_visited']").val(data.recommands.is_visited);
                    $("#viewFormrecommendation input[name='contact_no']").val(data.recommands.contact_no);
                    $("#viewFormrecommendation textarea[name='opinion']").val(data.recommands.opinion);
                    $("#viewFormrecommendation textarea[name='work_place']").val(data.recommands.work_place);
                    $("#viewFormrecommendation select[name='is_connected']").val(data.recommands.is_connected);


                    $("#viewFormrecommendation input[name='managing']").val(data.recommands.managing);
                    $("#viewFormrecommendation input[name='address']").val(data.recommands.address);
                    $("#viewFormrecommendation input[name='contact_address']").val(data.recommands.contact_address);
                    $("#viewFormrecommendation input[name='area']").val(data.recommands.area);
                    $("#viewFormrecommendation input[name='email']").val(data.recommands.email);
                    $("#viewFormrecommendation input[name='year']").val(data.recommands.year);
                    $("#viewFormrecommendation input[name='year']").val(data.recommands.year);
                    $("#viewFormrecommendation input[name='vision_induction']").val(data.recommands.vision_induction);
                    $("#viewFormrecommendation input[name='current']").val(data.recommands.current);
                    $("#viewFormrecommendation select[name='sector_id[]']").html(data.sectorHtml);
                    $("#viewFormrecommendation select[name='sub_sector_id[]']").html(data.subsectorHtml).trigger('change');
                    let sectors = data.recommend_sector;
                    let selectedSector = data.recommands.recommend_sector;

                    let sectorOptions = `<option value="" disabled>Select Sector</option>`;
                    $.each(sectors, function(index, sector) {
                        let isSelected = (sector.id == selectedSector) ? "selected" : "";
                        sectorOptions += `<option value="${sector.id}" ${isSelected}>${sector.sector_name}</option>`;
                    });

                    $("#viewFormrecommendation select[name='recommend_sector']").html(sectorOptions);

                } else {
                    swal("Error!", "Sector data is missing or malformed", "error");
                }
            },
        });
    });


    $("#btnCancel").click(function() {
        $("#viewContainer").slideUp(300, function() {
            $("html, body").animate({
                scrollTop: $("#tableid").offset().top
            }, 200);
        });
    });
});
</script>


<!--add pending and approve list-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).on('click', '.approve-element, .reject-element', function() {
        let id = $(this).data('id');
        let action = $(this).hasClass('approve-element') ? 'approve' : 'reject';

        if (action === 'reject') {
            // Show SweetAlert with input field for reason
            sendAjaxRequest(id, action);
        } else {
            // Directly send approve request
            sendAjaxRequest(id, action);
        }
    });

    function sendAjaxRequest(id, action, reason = null) {
        $.ajax({
            url: '/induction_status/' + action,
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
                        window.location.reload();
                        // $(`.approve-element[data-id="${id}"], .reject-element[data-id="${id}"]`).closest('tr').fadeOut();
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









</x-admin.admin-layout>



