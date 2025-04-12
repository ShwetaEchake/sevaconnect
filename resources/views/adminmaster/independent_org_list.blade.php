<x-admin.admin-layout>
    <!--area of interest design-->
<style>
    .custom-dropdown {
        position: relative;
    }

    .dropdown-toggle-box {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 8px;
        cursor: pointer;
        background: #fff;
    }

    .dropdown-options {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 1000;
        border: 1px solid #ccc;
        background: #fff;
        max-height: 350px;
        overflow-y: auto;
        display: none;
        padding: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .dropdown-options.show {
        display: block;
    }

    .sector-label {
        background-color: #f0f0ff;
        padding: 6px 10px;
        border-radius: 5px;
        font-weight: bold;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .subsectors, .subsectorsnine {
        margin-left: 20px;
        margin-top: 5px;
    }

    .subsectors label, .subsectorsnine label {
        display: block;
        padding: 2px 0;
    }

    .toggle-subsectors, .toggle-subsectorsnine {
        font-weight: bold;
        cursor: pointer;
        border: none;
        background: none;
        padding: 0 5px;
    }

    .form-check {
        padding-left: 1.2rem;
    }

    .select-all-container {
        margin-bottom: 10px;
        border-bottom: 1px solid #ccc;
        padding-bottom: 5px;
    }
</style>
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
                                    <h4 class="card-title">Edit Independant Organization</h4>
                                </header>

                                <div class="card-body py-2">

                                    <input type="hidden" id="edit_model_id" name="edit_model_id" value="">

                                    <div class="row">

                                        <div class="col-md-4 mt-3">
                                            <label for="name">Who are you?</label>
                                            <select name="user_type" id="name" class="form-control">
                                                <option value="" disabled>--select--</option>
                                                <option value="Social Organization" disabled>Social Organization</option>
                                                <option value="Individual" disabled>Individual</option>
                                                <option value="Independent organization" selected>Independent organization</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label>Seva ID:</label>
                                            <input type="text" class="form-control" name="seva_id" id="seva_id" placeholder="Enter Organization"  required Readonly>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label for="name">Name<span class="text-danger"></span> </label>
                                            <input type="text" name="name" class="form-control" id="name" Placeholder="Enter Name">
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label for="off_address">Address<span class="text-danger"></span> </label>
                                            <input type="text" class="form-control" name="off_address" id="off_address" placeholder="Enter Address">
                                        </div>


                                        {{-- <div class="col-md-4 mt-3">
                                            <label for="work_place">Place of work</label>
                                            <input type="text" name="work_place" class="form-control" id="work_place" placeholder="Enter Place of Work">
                                        </div> --}}
                                        <div class="col-md-4 mt-3">
                                            <label for="work_place">Geographical Area of Impact</label>
                                            {{-- <input type="text" name="work_place" class="form-control" id="work_place" placeholder="Enter Place of Work"> --}}
                                            <textarea name="work_place" class="form-control" id="work_place" placeholder="eg.(thane corporation,bhivandi corporation)..." rows="2" disabled></textarea>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label for="area_interest">Areas of Interest</label>
                                            <div class="custom-dropdown" id="areaInterestDropdownnine">
                                                <div class="dropdown-toggle-box" onclick="toggleDropdownnine()">Select Areas</div>
                                        
                                                <div class="dropdown-options" id="dropdownOptionsnine">
                                                    <div class="select-all-container">
                                                        <label><input type="checkbox" id="selectAllnine"> Select All</label>
                                                        <input type="text" class="form-control mt-2" placeholder="Search..." id="sectorSearch">
                                                    </div>
                                        
                                                    @foreach($sectors as $sector)
                                                        <div class="mb-2 sector-group">
                                                            <label class="sector-label">
                                                                <span>
                                                                    <input type="checkbox"
                                                                           class="sector-checkbox"
                                                                           name="areas_of_interest_sectors[]"
                                                                           value="{{ $sector->id }}"
                                                                           data-type="sector"
                                                                           data-sector-id="{{ $sector->id }}">
                                                                    {{ $sector->name }}
                                                                </span>
                                                                <button type="button" class="toggle-subsectorsnine" data-sector-id="{{ $sector->id }}">+</button>
                                                            </label>
                                        
                                                            <div class="subsectorsnine d-none" data-sector-id="{{ $sector->id }}">
                                                                @foreach($sector->subSectors as $subSector)
                                                                    <label>
                                                                        <input type="checkbox"
                                                                               class="subsector-checkbox"
                                                                               name="is_area_interest_subsector[]"
                                                                               value="{{ $subSector->id }}"
                                                                               data-type="subSector"
                                                                               data-sector-id="{{ $sector->id }}">
                                                                        {{ $subSector->name }}
                                                                    </label>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <input type="hidden" id="selected_sectors" name="selected_sectors">
                                        <input type="hidden" id="selected_sub_sectors" name="selected_sub_sectors">

                                        <div class="col-md-4 mt-3">
                                            <label for="org_contact_name">Name Contact person</label>
                                            <input type="text" name="org_contact_name" class="form-control" id="org_contact_name" placeholder="Enter Name Contact Person" pattern="^[A-Za-z\s]+$" >
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label for="org_contact_no">Mobile number of contact person </label>
                                            <input type="text" name="org_contact_no" id="org_contact_no" class="form-control" placeholder="Enter Mobile Number Of Contact Person">
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label for="email">Email ID</label>
                                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email ID">
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label for="comfortable_call">Are you comfortable for a call?</label>
                                            <select name="comfortable_call" id="comfortable_call" class="form-control">
                                                <option value="" disabled selected>--select--</option>
                                                <option value="1">YES</option>
                                                <option value="0">NO</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label for="time_date">Select Date & Time</label>
                                            <input type="datetime-local" id="time_date" name="time_date" class="form-control">
                                        </div>
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
                                    <h4 class="card-title">View Independant Organization</h4>
                                </header>

                                <div class="card-body py-2">

                                    <input type="hidden" id="edit_model_id" name="edit_model_id" value="">

                                    <div class="row">

                                        <div class="col-md-4 mt-3">
                                            <label for="name">Who are you?</label>
                                            <select name="user_type" id="name" class="form-control" disabled>
                                                <option value="" disabled>--select--</option>
                                                <option value="Social Organization" disabled>Social Organization</option>
                                                <option value="Individual" disabled>Individual</option>
                                                <option value="Independent organization" selected>Independent organization</option>
                                            </select>
                                        </div>



                                        <div class="col-md-4 mt-3">
                                            <label>Seva ID:</label>
                                            <input type="text" class="form-control" name="seva_id" id="seva_id" placeholder="Enter Organization"  required disabled>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" Placeholder="Enter Name" disabled>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label for="off_address">Address</label>
                                            <input type="text" class="form-control" name="off_address" id="off_address" placeholder="Enter Address" disabled>
                                        </div>


                                        {{-- <div class="col-md-4 mt-3">
                                            <label for="work_place">Place of work</label>
                                            <input type="text" name="work_place" class="form-control" id="work_place" placeholder="Enter Place of Work" disabled>
                                        </div> --}}
                                        <div class="col-md-4 mt-3">
                                            <label for="work_place">Geographical Area of Impact</label>
                                            {{-- <input type="text" name="work_place" class="form-control" id="work_place" placeholder="Enter Place of Work"> --}}
                                            <textarea name="work_place" class="form-control" id="work_place" placeholder="eg.(thane corporation,bhivandi corporation)..." rows="2"></textarea>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label for="area_interest">Areas of Interest</label>
                                            <div class="custom-dropdown" id="areaInterestDropdownfive">
                                                <div class="dropdown-toggle-box" onclick="toggleDropdownfive()">Select Areas</div>
                                        
                                                <div class="dropdown-options" id="dropdownOptionsfive">
                                                    <div class="select-all-container">
                                                        <label><input type="checkbox" id="selectAllfive"> Select All</label>
                                                        <input type="text" class="form-control mt-2" placeholder="Search..." id="sectorSearchfive">
                                                    </div>
                                        
                                                    @foreach($sectors as $sector)
                                                        <div class="mb-2 sector-group">
                                                            <label class="sector-label">
                                                                <span>
                                                                    <input type="checkbox"
                                                                           class="sector-checkbox"
                                                                           name="areas_of_interest_sectors[]"
                                                                           value="{{ $sector->id }}"
                                                                           data-type="sector"
                                                                           data-sector-id="{{ $sector->id }}">
                                                                    {{ $sector->name }}
                                                                </span>
                                                                <button type="button" class="toggle-subsectorsfive" data-sector-id="{{ $sector->id }}">+</button>
                                                            </label>
                                        
                                                            <div class="subsectors d-none" data-sector-id="{{ $sector->id }}">
                                                                @foreach($sector->subSectors as $subSector)
                                                                    <label>
                                                                        <input type="checkbox"
                                                                               class="subsector-checkbox"
                                                                               name="is_area_interest_subsector[]"
                                                                               value="{{ $subSector->id }}"
                                                                               data-type="subSector"
                                                                               data-sector-id="{{ $sector->id }}">
                                                                        {{ $subSector->name }}
                                                                    </label>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <input type="hidden" id="selected_sectors" name="selected_sectors">
                                        <input type="hidden" id="selected_sub_sectors" name="selected_sub_sectors">

                                        <div class="col-md-4 mt-3">
                                            <label for="org_contact_name">Name Contact person</label>
                                            <input type="text" name="org_contact_name" class="form-control" id="org_contact_name" placeholder="Enter Name Contact Person" pattern="^[A-Za-z\s]+$" disabled>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label for="org_contact_no">Mobile number of contact person </label>
                                            <input type="text" name="org_contact_no" id="org_contact_no" class="form-control" placeholder="Enter Mobile Number Of Contact Person" disabled>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label for="email">Email ID</label>
                                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email ID" disabled>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label for="comfortable_call">Are you comfortable for a call?</label>
                                            <select name="comfortable_call" id="comfortable_call" class="form-control" disabled>
                                                <option value="" disabled selected>--select--</option>
                                                <option value="1">YES</option>
                                                <option value="0">NO</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label for="time_date">Select Date & Time</label>
                                            <input type="datetime-local" id="time_date" name="time_date" class="form-control" disabled>
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
                        <h3>Independant Organization List</h3>
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
                                             <th>Name Of Contact Person</th> 
                                            <th>Email</th>
                                            <th>Phone No</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($independantlist as $independant)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $independant->seva_id }}</td>
                                    <td>{{ $independant->org_contact_name }}</td> 
                                    <td>{{ $independant->email }}</td>
                                    <td>{{ $independant->org_contact_no }}</td>

                                    <td>
                                                    @if($independant->status == 0)
                                                        <div class="d-flex gap-2">
                                                            <button class="btn btn-success btn-sm approve-element" style="font-size:0.7rem;" title="Approve Evaluation" data-id="{{ $independant->id }}">
                                                                Approve
                                                            </button>
                                                            <button class="btn btn-danger btn-sm reject-element" style="font-size:0.7rem;" title="Reject Evaluation" data-id="{{ $independant->id }}">
                                                                Reject
                                                            </button>
                                                        </div>
                                                    @elseif($independant->status == 1)
                                                        <b class="text-success">Approved</b>
                                                    @elseif($independant->status == 2)
                                                        <b class="text-danger">Rejected</b>
                                                    @endif
                                                </td>

                                                <td>
                                                    <button class="edit-element btn btn-primary px-2 py-1" title="Edit User" data-id="{{$independant->id }}">
                                                        <i data-feather="edit"></i>
                                                    </button>
                                                    <br>

                                                    <button class="view-element btn btn-primary px-2 py-1" title="Edit User" data-id="{{$independant->id }}">
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
        $(document).ready(function () {
            $("#datatable-tabletools").on("click", ".edit-element", function (e) {
                e.preventDefault();
                var recommnad_id = $(this).attr("data-id");
                var url = "{{ route('recommend.edit', ':id') }}".replace(':id', recommnad_id);
    
                $.ajax({
                    url: url,
                    type: 'GET',
                    data: {
                        '_token': "{{ csrf_token() }}"
                    },
                    success: function (data) {
                        if (data && data.recommands) {
                            $("#addContainer").slideUp();
                            $("#btnCancel").show();
                            $("#addToTable").hide();
                            $("#viewContainer").hide();
                            $("#editContainer").slideDown();
    
                            // Populate form fields
                            $("#editFormrecommendation input[name='edit_model_id']").val(data.recommands.id);
                            $("#editFormrecommendation input[name='seva_id']").val(data.recommands.seva_id);
                            $("#editFormrecommendation input[name='org_name']").val(data.recommands.org_name);
                            $("#editFormrecommendation select[name='organization_type']").val(data.recommands.organization_type);
                            $("#editFormrecommendation input[name='address']").val(data.recommands.address);
                            $("#editFormrecommendation input[name='phone_no']").val(data.recommands.phone_no);
                            $("#editFormrecommendation input[name='mobile_no']").val(data.recommands.mobile_no);
                            $("#editFormrecommendation input[name='name']").val(data.recommands.name);
                            $("#editFormrecommendation input[name='contact_address']").val(data.recommands.contact_address);
                            $("#editFormrecommendation input[name='email']").val(data.recommands.email);
                            $("#editFormrecommendation input[name='off_address']").val(data.recommands.off_address);
                            $("#editFormrecommendation select[name='social_org']").val(data.recommands.social_org);
                            $("#editFormrecommendation select[name='comfortable_call']").val(data.recommands.comfortable_call);
                            $("#editFormrecommendation input[name='time_date']").val(data.recommands.time_date);
                            $("#editFormrecommendation input[name='org_contact_name']").val(data.recommands.org_contact_name);
                            $("#editFormrecommendation input[name='org_contact_no']").val(data.recommands.org_contact_no);
                            $("#editFormrecommendation select[name='is_visited']").val(data.recommands.is_visited);
                            $("#editFormrecommendation input[name='contact_no']").val(data.recommands.contact_no);
                            $("#editFormrecommendation textarea[name='opinion']").val(data.recommands.opinion);
                            $("#editFormrecommendation textarea[name='work_place']").val(data.recommands.work_place);
                            $("#editFormrecommendation select[name='is_connected']").val(data.recommands.is_connected);
                            $("#editFormrecommendation select[name='sector_id[]']").html(data.sectorHtml);
                            // Populate area interest dropdown
                            console.log(data.areaInterestHtml);
                            $('#dropdownOptionsnine').html(data.areaInterestHtml);
    
                            // ✅ Populate checkbox values for sectors
                           
                            // Populate sector dropdown if needed
                            let sectors = data.recommend_sector;
                            let selectedSector = data.recommands.recommend_sector;
    
                            let sectorOptions = `<option value="" disabled>Select Sectors</option>`;
                            $.each(sectors, function (index, sector) {
                                let isSelected = (sector.id == selectedSector) ? "selected" : "";
                                sectorOptions += `<option value="${sector.id}" ${isSelected}>${sector.sector_name}</option>`;
                            });
                            $("#editFormrecommendation select[name='recommend_sector']").html(sectorOptions);
    
                            // Scroll to the edit container
                            setTimeout(function () {
                                $("html, body").animate({
                                    scrollTop: $("#editContainer").offset().top
                                }, 'slow');
                            }, 300);
                        } else {
                            swal("Error!", "Sector data is missing or malformed", "error");
                        }
                    }
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
            var url = "{{ route('recommends.update', ':model_id') }}";
            //
            $.ajax({
                url: url.replace(':model_id', model_id),
                type: 'POST',
                data: formdata,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#editrecommendSubmit").prop('disabled', false);
                    if (!data.error2)
                        swal("Successful!", data.success, "success")
                        .then((action) => {
                            window.location.href = '{{ route('independent_org_list') }}';
                        });
                    else
                        swal("Error!", data.error2, "error");
                },
                statusCode: {
                    422: function(responseObject, textStatus, jqXHR) {
                        $("#editrecommendSubmit").prop('disabled', false);
                        resetErrors();
                        printErrMsg(responseObject.responseJSON.errors);
                    },
                    500: function(responseObject, textStatus, errorThrown) {
                        $("#editrecommendSubmit").prop('disabled', false);
                        swal("Error occured!", "Something went wrong please try again", "error");
                    }
                }
            });

            function resetErrors() {
                var form = document.getElementById('editFormrecommendation');
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

<!--view scritp-->
<script>
   $(document).ready(function() {
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
                    $("#viewFormrecommendation select[name='organization_type']").val(data.recommands.organization_type);
                    $("#viewFormrecommendation input[name='name']").val(data.recommands.name);
                    $("#viewFormrecommendation input[name='phone_no']").val(data.recommands.phone_no);
                    $("#viewFormrecommendation input[name='org_contact_name']").val(data.recommands.org_contact_name);
                    $("#viewFormrecommendation input[name='org_contact_no']").val(data.recommands.org_contact_no);
                    $("#viewFormrecommendation select[name='is_visited']").val(data.recommands.is_visited);
                    $("#viewFormrecommendation input[name='contact_no']").val(data.recommands.contact_no);
                    $("#viewFormrecommendation textarea[name='opinion']").val(data.recommands.opinion);
                    $("#viewFormrecommendation textarea[name='work_place']").val(data.recommands.work_place);
                    $("#viewFormrecommendation select[name='is_connected']").val(data.recommands.is_connected);

                    $("#viewFormrecommendation input[name='name']").val(data.recommands.name);
                    $("#viewFormrecommendation input[name='off_address']").val(data.recommands.off_address);
                    $("#viewFormrecommendation input[name='email']").val(data.recommands.email);
                    $("#viewFormrecommendation select[name='comfortable_call']").val(data.recommands.comfortable_call);

                    $("#viewFormrecommendation input[name='time_date']").val(data.recommands.time_date);
                    console.log(data.areaInterestHtml);
                            $('#dropdownOptionsfive').html(data.areaInterestHtml);

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



<script>
    function toggleDropdownnine() {
            document.getElementById('dropdownOptionsnine').classList.toggle('show');
        }
    
        $(document).ready(function () {
    
            // Hide dropdown when clicking outside
            $(document).on('click', function (e) {
                const $dropdown = $('#areaInterestDropdownnine');
                if (!$dropdown.is(e.target) && $dropdown.has(e.target).length === 0) {
                    $('#dropdownOptionsnine').removeClass('show');
                }
            });
    
            // Sector checkbox controls subsectors
            $(document).on('change', '.sector-checkbox', function () {
                const sectorId = $(this).data('sector-id');
                $('.subsector-checkbox[data-sector-id="' + sectorId + '"]').prop('checked', $(this).prop('checked'));
                updateSelectAllStatus();
            });
    
            // Subsector checkbox sync to sector
            $(document).on('change', '.subsector-checkbox', function () {
                const sectorId = $(this).data('sector-id');
                const $allSubs = $('.subsector-checkbox[data-sector-id="' + sectorId + '"]');
                const allChecked = $allSubs.length === $allSubs.filter(':checked').length;
                $('.sector-checkbox[data-sector-id="' + sectorId + '"]').prop('checked', allChecked);
                updateSelectAllStatus();
            });
    
            // Toggle subsectors
            $(document).on('click', '.toggle-subsectorsnine', function () {
                const sectorId = $(this).data('sector-id');
                const $subSectorDiv = $('.subsectorsnine[data-sector-id="' + sectorId + '"]');
                const isHidden = $subSectorDiv.hasClass('d-none');
    
                // Hide all subsectors and reset buttons
                $('.subsectorsnine').addClass('d-none');
                $('.toggle-subsectorsnine').text('+');
    
                if (isHidden) {
                    $subSectorDiv.removeClass('d-none');
                    $(this).text('−');
                }
            });
    
            // Sector search filter
            $(document).on('input', '#sectorSearch', function () {
                const query = $(this).val().toLowerCase();
                $('.sector-group').each(function () {
                    const sectorText = $(this).find('.sector-checkbox').parent().text().toLowerCase();
                    const subSectorTexts = $(this).find('.subsector-checkbox').map(function () {
                        return $(this).parent().text().toLowerCase();
                    }).get();
    
                    const matches = sectorText.includes(query) || subSectorTexts.some(txt => txt.includes(query));
                    $(this).toggle(matches);
                });
            });
    
            // Select All toggle
            $(document).on('change', '#selectAllnine', function () {
                const checked = $(this).prop('checked');
                $('.sector-checkbox, .subsector-checkbox').prop('checked', checked);
            });
    
            // Update "Select All" checkbox based on manual selection
            function updateSelectAllStatus() {
                const all = $('.sector-checkbox, .subsector-checkbox');
                const allChecked = all.length === all.filter(':checked').length;
                $('#selectAll').prop('checked', allChecked);
            }
        });
    </script>

<!--view script for area of interest -->
<script>

    function toggleDropdownfive() {
            document.getElementById('dropdownOptionsfive').classList.toggle('show');
        }
    
        $(document).ready(function () {
    
            // Hide dropdown when clicking outside
            $(document).on('click', function (e) {
                const $dropdown = $('#areaInterestDropdownfive');
                if (!$dropdown.is(e.target) && $dropdown.has(e.target).length === 0) {
                    $('#dropdownOptionsfive').removeClass('show');
                }
            });
    
            // Sector checkbox controls subsectors
            $(document).on('change', '.sector-checkbox', function () {
                const sectorId = $(this).data('sector-id');
                $('.subsector-checkbox[data-sector-id="' + sectorId + '"]').prop('checked', $(this).prop('checked'));
                updateSelectAllStatus();
            });
    
            // Subsector checkbox sync to sector
            $(document).on('change', '.subsector-checkbox', function () {
                const sectorId = $(this).data('sector-id');
                const $allSubs = $('.subsector-checkbox[data-sector-id="' + sectorId + '"]');
                const allChecked = $allSubs.length === $allSubs.filter(':checked').length;
                $('.sector-checkbox[data-sector-id="' + sectorId + '"]').prop('checked', allChecked);
                updateSelectAllStatus();
            });
    
            // Toggle subsectors
            $(document).on('click', '.toggle-subsectorsfive', function () {
                const sectorId = $(this).data('sector-id');
                const $subSectorDiv = $('.subsectors[data-sector-id="' + sectorId + '"]');
                const isHidden = $subSectorDiv.hasClass('d-none');
    
                // Hide all subsectors and reset buttons
                $('.subsectors').addClass('d-none');
                $('.toggle-subsectorsfive').text('+');
    
                if (isHidden) {
                    $subSectorDiv.removeClass('d-none');
                    $(this).text('−');
                }
            });
    
            // Sector search filter
            $(document).on('input', '#sectorSearchfive', function () {
                const query = $(this).val().toLowerCase();
                $('.sector-group').each(function () {
                    const sectorText = $(this).find('.sector-checkbox').parent().text().toLowerCase();
                    const subSectorTexts = $(this).find('.subsector-checkbox').map(function () {
                        return $(this).parent().text().toLowerCase();
                    }).get();
    
                    const matches = sectorText.includes(query) || subSectorTexts.some(txt => txt.includes(query));
                    $(this).toggle(matches);
                });
            });
    
            // Select All toggle
            $(document).on('change', '#selectAllfive', function () {
                const checked = $(this).prop('checked');
                $('.sector-checkbox, .subsector-checkbox').prop('checked', checked);
            });
    
            // Update "Select All" checkbox based on manual selection
            function updateSelectAllStatus() {
                const all = $('.sector-checkbox, .subsector-checkbox');
                const allChecked = all.length === all.filter(':checked').length;
                $('#selectAllfive').prop('checked', allChecked);
            }
        });
    </script>
</x-admin.admin-layout>



