<x-admin.admin-layout>

    <x-slot name="title">Onboard Master</x-slot>

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <!-- Add Form Start -->
                <div class="row" id="addContainer" style="display:none;">
                    <div class="col-sm-12">
                        <div class="card">
                            <form class="theme-form" name="addFormOnboard" id="addFormOnboard" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header pb-0">
                                    <h4>Create Onboard</h4>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="mb-3 row">


                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_seva">Enter Seva ID <span class="text-danger">*</span></label>
                                            <select class="form-control" id="onboard_seva" name="onboard_seva">
                                                <option value="">Select Seva ID</option>
                                                @foreach($sevaonlist as $sevadetails)
                                                    <option value="{{ $sevadetails->seva_id }}">{{ $sevadetails->seva_id }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_org_type">Organization Type <span class="text-danger">*</span> </label>
                                            <select class="form-control" id="onboard_org_type" name="onboard_org_type" >
                                                <option value="">Select Organization Type</option>
                                                @foreach($orgTypeslist as $orgdetails)
                                                    <option value="{{ $orgdetails->id }}">{{ $orgdetails->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="name"> Organization Name<span class="text-danger">*</span> </label>
                                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter Organization Name">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_trustee">Managing trustee/director<span class="text-danger">*</span> </label>
                                            <input class="form-control" id="onboard_trustee" name="onboard_trustee" type="text" placeholder="Enter Managing trustee/director">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_name">Name of contact person<span class="text-danger">*</span> </label>
                                            <input class="form-control" id="onboard_name" name="onboard_name" type="text" placeholder="Enter Name of contact person">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_mobile">Mobile number of contact person<span class="text-danger">*</span> </label>
                                            <input class="form-control" id="onboard_mobile" name="onboard_mobile" type="text" placeholder="Mobile number of contact person">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_address">Registered address<span class="text-danger">*</span> </label>
                                            <input class="form-control" id="onboard_address" name="onboard_address" type="text" placeholder="Enter Registered address">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_name">Area of work
                                                <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="area_name" name="area_name" type="text" placeholder="Enter Area of work">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_name">Email ID
                                                <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="onboard_email" name="onboard_email" type="text" placeholder="Enter Email ID">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_year">Year of establishment
                                            <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="onboard_year" name="onboard_year" type="text" placeholder="Enter Year of establishment">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>




                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eval_sector">Sectors <span class="text-danger">*</span></label>

                                            <select class="js-example-basic-multiple" id="onboard_sector" name="onboard_sector[]" multiple="multiple">
                                                <option value="">--Select Sector--</option>
                                                @foreach($onsector_list as $onsec)
                                                    <option value="{{ $onsec->id }}">{{ $onsec->name }}</option>
                                                @endforeach
                                            </select>


                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_subsector">Sub Sectors <span class="text-danger">*</span> </label>
                                            <select class="js-example-basic-multiple" id="onboard_subsector" name="onboard_subsector[]"  multiple="multiple">
                                              <option value="">--Select Sub-Sector--</option>


                                            </select>
                                        </div>



                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="vision_name">Vision and mission statement
                                                <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="vision_name" name="vision_name" type="text" placeholder="Vision and mission statement">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="current_name">Current nature of work
                                                <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="current_name" name="current_name" type="text" placeholder="Enter Current nature of work">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_format">Format of the organization<span class="text-danger">*</span> </label>
                                            <select class="form-control" id="onboard_format" name="onboard_format" >
                                                <option value="">--Select Format--</option>
                                                <option value="ab">Completely free</option>
                                                <option value="abc">govt subsidy</option>
                                                <option value="abc">partially free</option>
                                                <option value="abc">Paid but subsiised</option>
                                                <option value="abc">rented</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="current_name">Number of beneficiaries till date
                                                <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="current_name" name="current_name" type="text" placeholder="Enter Number of beneficiaries till date">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="current_benf">Current Beneficiries
                                                <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="current_benf" name="current_benf" type="text" placeholder="Enter Current Beneficiries">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="sevakarar">
                                                SevaKarar <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" id="sevakarar" name="sevakarar" type="text" placeholder="Enter SevaKarar Name">
                                            <span class="text-danger error-text onboard_achiev_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_achiev">
                                                Achievements in terms of work done (Top 5) <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" id="onboard_achiev" name="onboard_achiev" rows="4" ></textarea>
                                            <span class="text-danger error-text onboard_achiev_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_achiev">
                                                Future plans (top 3)<span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" id="onboard_future" name="onboard_future" rows="4" ></textarea>
                                            <span class="text-danger error-text onboard_achiev_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_specific">
                                                 Any specific inputs<span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" id="onboard_specific" name="onboard_specific" rows="4"></textarea>
                                            <span class="text-danger error-text onboard_achiev_err"></span>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <br>
                                        <h3>Document Details</h3>
                                        <Hr>
                                            <div class="container mt-4">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Certificates</th>
                                                            <th>Upload File</th>
                                                            <th> <button type="button" class="btn btn-primary" id="addmore">Add More</button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tableBody">
                                                        <tr>
                                                            <td>
                                                                <select class="form-control" name="certificate[]" id="certificate">
                                                                    <option value="" selected disabled>Select Certificate</option>

                                                                    @foreach($onboard_doc as $documents)
                                                                    <option value="{{ $documents->id }}">{{ $documents->name }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="file" name="file_name[]" accept=".jpg, .jpeg, .png, .pdf, .doc, .docx">
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger removeRow">Remove</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>



                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id="addSubmitOnboard">Submit</button>
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
                                    <h4 class="card-title">Edit Onboard</h4>
                                </header>

                                <div class="card-body py-2">

                                    <input type="hidden" id="edit_model_id" name="edit_model_id" value="">

                                    <div class="mb-3 row">

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_seva">Enter Seva ID <span class="text-danger">*</span></label>
                                            <select class="form-control" id="onboard_seva" name="onboard_seva">
                                                <option value="">Select Seva ID</option>
                                                @foreach($sevaonlist as $sevadetails)
                                                    <option value="{{ $sevadetails->seva_id }}">{{ $sevadetails->seva_id }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_org_type">Organization Type <span class="text-danger">*</span> </label>
                                            <select class="form-control" id="onboard_org_type" name="onboard_org_type" >
                                                <option value="">Select Organization Type</option>
                                                @foreach($orgTypeslist as $orgdetails)
                                                    <option value="{{ $orgdetails->id }}">{{ $orgdetails->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="name"> Organization Name<span class="text-danger">*</span> </label>
                                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter Organization Name">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_trustee">Managing trustee/director<span class="text-danger">*</span> </label>
                                            <input class="form-control" id="onboard_trustee" name="onboard_trustee" type="text" placeholder="Enter Managing trustee/director">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_name">Name of contact person<span class="text-danger">*</span> </label>
                                            <input class="form-control" id="onboard_name" name="onboard_name" type="text" placeholder="Enter Name of contact person">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_mobile">Mobile number of contact person<span class="text-danger">*</span> </label>
                                            <input class="form-control" id="onboard_mobile" name="onboard_mobile" type="text" placeholder="Mobile number of contact person">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_address">Registered address<span class="text-danger">*</span> </label>
                                            <input class="form-control" id="onboard_address" name="onboard_address" type="text" placeholder="Enter Registered address">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_name">Area of work
                                                <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="area_name" name="area_name" type="text" placeholder="Enter Area of work">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_name">Email ID
                                                <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="onboard_email" name="onboard_email" type="text" placeholder="Enter Email ID">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_year">Year of establishment
                                            <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="onboard_year" name="onboard_year" type="text" placeholder="Enter Year of establishment">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>




                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="eval_sector">Sectors <span class="text-danger">*</span></label>

                                            <select class="js-example-basic-multiple" id="onboard_sector" name="onboard_sector[]" multiple="multiple">
                                                <option value="">--Select Sector--</option>
                                                @foreach($onsector_list as $onsec)
                                                    <option value="{{ $onsec->id }}">{{ $onsec->name }}</option>
                                                @endforeach
                                            </select>


                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_subsector">Sub Sectors <span class="text-danger">*</span> </label>
                                            <select class="js-example-basic-multiple" id="onboard_subsector" name="onboard_subsector[]"  multiple="multiple">
                                              <option value="">--Select Sub-Sector--</option>


                                            </select>
                                        </div>



                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="vision_name">Vision and mission statement
                                                <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="vision_name" name="vision_name" type="text" placeholder="Vision and mission statement">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="current_name">Current nature of work
                                                <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="current_name" name="current_name" type="text" placeholder="Enter Current nature of work">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_format">Format of the organization<span class="text-danger">*</span> </label>
                                            <select class="form-control" id="onboard_format" name="onboard_format" >
                                                <option value="">--Select Format--</option>
                                                <option value="ab">Completely free</option>
                                                <option value="abc">govt subsidy</option>
                                                <option value="abc">partially free</option>
                                                <option value="abc">Paid but subsiised</option>
                                                <option value="abc">rented</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="current_name">Number of beneficiaries till date
                                                <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="current_name" name="current_name" type="date" placeholder="Enter Number of beneficiaries till date">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="current_benf">Current Beneficiries
                                                <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="current_benf" name="current_benf" type="text" placeholder="Enter Current Beneficiries">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="sevakarar">
                                                SevaKarar <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" id="sevakarar" name="sevakarar" type="text" placeholder="Enter SevaKarar Name">
                                            <span class="text-danger error-text onboard_achiev_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_achiev">
                                                Achievements in terms of work done (Top 5) <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" id="onboard_achiev" name="onboard_achiev" rows="4" ></textarea>
                                            <span class="text-danger error-text onboard_achiev_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_achiev">
                                                Future plans (top 3)<span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" id="onboard_future" name="onboard_future" rows="4" ></textarea>
                                            <span class="text-danger error-text onboard_achiev_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="onboard_specific">
                                                 Any specific inputs<span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" id="onboard_specific" name="onboard_specific" rows="4"></textarea>
                                            <span class="text-danger error-text onboard_achiev_err"></span>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <br>
                                        <h3>Document Details</h3>
                                        <Hr>
                                            <div class="container mt-4">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Certificates</th>
                                                            <th>Upload File</th>
                                                            <th> <button type="button" class="btn btn-primary" id="addmore">Add More</button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tableBody">
                                                        <tr>
                                                            <td>
                                                                <select class="form-control" name="certificate[]" id="certificate">
                                                                    <option value="" selected disabled>Select Certificate</option>

                                                                    @foreach($onboard_doc as $documents)
                                                                    <option value="{{ $documents->id }}">{{ $documents->name }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="file" name="file_name[]" accept=".jpg, .jpeg, .png, .pdf, .doc, .docx">
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger removeRow">Remove</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

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





                <div class="row">
                    <div class="col-sm-6">
                        <h3>Onboard Details</h3>
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
                                        <button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
                                        <button id="btnCancel" class="btn btn-danger" style="display:none;">Cancel</button>
                                    </div>
                                </div>
                            </div>
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
                                            <th>Name</th>
                                            <th>Onboard Trustee</th>
                                            <th>Onboard Name</th>
                                            <th>Onboard Mobile</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($onboard_list as $onboard)
                                            <tr>
                                                <td>{{$loop->iteration }}</td>
                                                <td>{{$onboard->onboard_seva}}</td>
                                                <td>{{$onboard->name }}</td>
                                                <td>{{$onboard->onboard_trustee}}</td>
                                                <td>{{$onboard->onboard_name}}</td>
                                                <td>{{$onboard->onboard_mobile}}</td>
                                                <td>
                                                    <button class="edit-element btn btn-primary px-2 py-1" title="Edit Evaluation" data-id="{{ $onboard->id }}">
                                                        <i data-feather="edit"></i>
                                                    </button>
                                                    <button class="btn btn-dark rem-element px-2 py-1" title="Delete Evaluation" data-id="{{ $onboard->id }}">
                                                        <i data-feather="trash-2"></i>
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



</x-admin.admin-layout>
<script>
$(document).ready(function () {
    $('#onboard_seva').on('change', function () {
        var seva_id = $(this).val();
        if (seva_id) {
            $.ajax({
                url: "{{ route('get.onboarddetails.details') }}",
                type: "GET",
                data: { seva_id: seva_id },
                success: function (response) {
                    if (response.success) {
                        $('#onboard_org_type').html(response.orgtypeHtml);
                        $('#onboard_name').val(response.data.org_contact_name).trigger('change');
                        $('#onboard_mobile').val(response.data.org_contact_no).trigger('change');
                        $('#onboard_address').val(response.data.address).trigger('change');
                        $('#area_name').val(response.data.work_place).trigger('change');
                        $('#name').val(response.data.org_name).trigger('change');
                        $('#onboard_sector').html(response.sectorsHtml).trigger('change');
                        $('#onboard_subsector').html(response.subSectorsHtml);

                        // Ensure the correct sub-sectors are selected
                        setTimeout(function () {
                            selectHighlightedSubSectors();
                        }, 100);
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
        }
    });

    // When Sector is changed, update Sub-Sector list dynamically
    $('#onboard_sector').on('change', function () {
        var selectedSectors = $(this).val();
        if (selectedSectors) {
            $.ajax({
                url: "{{ route('get.subsectors.by.sectors') }}",
                type: "GET",
                data: { sector_ids: selectedSectors },
                success: function (response) {
                    if (response.success) {
                        $('#onboard_subsector').html(response.subSectorsHtml);
                        setTimeout(function () {
                            selectHighlightedSubSectors();
                        }, 100);
                    }
                },
                error: function () {
                    alert('Error fetching sub-sectors');
                }
            });
        } else {
            $('#onboard_subsector').html('<option>--Select Sub-Sector--</option>');
        }
    });

    // Function to select pre-highlighted sub-sectors
    function selectHighlightedSubSectors() {
        $('#onboard_subsector option').each(function () {
            if ($(this).data('preselected') === "true") {
                $(this).prop('selected', true);
            }
        });
    }

    function clearFields() {
        $('#onboard_org_type').html('<option>--Select Type--</option>');
        $('#onboard_sector').html('<option>--Select Sectors--</option>');
        $('#onboard_subsector').html('<option>--Select Sub-Sector--</option>');
        $('#onboard_name, #onboard_mobile, #onboard_address, #area_name, #name').val('');
    }
});
</script>
<script>
   $(document).ready(function () {
    $("#addmore").click(function () {
        let newRow = `<tr>
            <td>
                <select class="form-control" name="certificate[]">
                <option value="" selected disabled>Select Certificate</option>
                    @foreach($onboard_doc as $documents)
                        <option value="{{ $documents->id }}">{{ $documents->name }}</option>
                    @endforeach
                </select>
            </td>
            <td>
                <input class="form-control" type="file" name="file_name[]" accept=".jpg, .jpeg, .png, .pdf, .doc, .docx">
            </td>
            <td>
                <button type="button" class="btn btn-danger removeRow">Remove</button>
            </td>
        </tr>`;
        $("#tableBody").append(newRow);
    });

    $(document).on("click", ".removeRow", function () {
        $(this).closest("tr").remove();
    });
});
</script>



{{-- Add --}}

<script>
    $("#addFormOnboard").submit(function(e) {
        e.preventDefault();
        $("#addSubmitOnboard").prop('disabled', true);

        var formdata = new FormData(this);

        $.ajax({
            url: '{{ route('onboard.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmitOnboard").prop('disabled', false);
                swal("Successful!", data.success, "success")
                .then(() => {
                    window.location.href = '{{ route('onboard_form_master') }}';
                });
            },
            statusCode: {
                422: function(responseObject) {
                    $("#addSubmitOnboard").prop('disabled', false);
                    resetErrors();
                    printErrMsg(responseObject.responseJSON.errors);
                },
                500: function() {
                    $("#addSubmitOnboard").prop('disabled', false);
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
            title: "Are you sure to delete this Onboard?",
            // text: "Make sure if you have filled Vendor details before proceeding further",
            icon: "info",
            buttons: ["Cancel", "Confirm"]
        })
        .then((justTransfer) =>
        {
            if (justTransfer)
            {
                var model_id = $(this).attr("data-id");
                var url = "{{ route('onboard.destroy', ":model_id") }}";

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
            var onboard_id = $(this).attr("data-id");
            var url = "{{ route('onboard_edit.edit', ':id') }}".replace(':id', onboard_id);

            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) {
                    console.log("Received Data:", data);

                    if (data && data.onboard) {
                        var onboards = data.onboard;
                        var onboardDocuments = data.onboardDocuments || [];
                        var onboardDocList = data.onboardDocList || [];

                        $("#addContainer").slideUp();
                        $("#btnCancel").show();
                        $("#addToTable").hide();
                        $("#editContainer").slideDown();

                        // Populate form fields
                        $("#editForm input[name='edit_model_id']").val(onboards.id);
                        $("#editForm select[name='onboard_seva']").val(onboards.onboard_seva).change();
                        $("#editForm input[name='name']").val(onboards.name);
                        $("#editForm input[name='onboard_trustee']").val(onboards.onboard_trustee).change();
                        $("#editForm input[name='onboard_name']").val(onboards.onboard_name);
                        $("#editForm input[name='onboard_mobile']").val(onboards.onboard_mobile);
                        $("#editForm input[name='onboard_address']").val(onboards.onboard_address);
                        $("#editForm input[name='area_name']").val(onboards.area_name);
                        $("#editForm input[name='onboard_email']").val(onboards.onboard_email);
                        $("#editForm input[name='onboard_year']").val(onboards.onboard_year).change();
                        $("#editForm input[name='vision_name']").val(onboards.vision_name);
                        $("#editForm input[name='current_name']").val(convertDateFormat(onboards.current_name));
                        $("#editForm select[name='onboard_format']").val(onboards.onboard_format);
                        $("#editForm input[name='current_benf']").val(onboards.current_benf);
                        $("#editForm input[name='sevakarar']").val(onboards.sevakarar);
                        $("#editForm textarea[name='onboard_achiev']").val(onboards.onboard_achiev);
                        $("#editForm textarea[name='onboard_future']").val(onboards.onboard_future);
                        $("#editForm textarea[name='onboard_specific']").val(onboards.onboard_specific);

                        // Populate certificate file details
                        var tableBody = $("#editForm #tableBody");
                        tableBody.empty();

                        onboardDocuments.forEach(function(doc) {
                            var selectOptions = `<option value="" disabled>Select Certificate</option>`;

                            onboardDocList.forEach(function(docOption) {
                                var selected = (docOption.id == doc.onboard_document_id) ? "selected" : "";
                                selectOptions += `<option value="${docOption.id}" ${selected}>${docOption.name}</option>`;
                            });

                            var row = `<tr>
                                <td>
                                    <select class="form-control certificate-select" name="certificate[]">${selectOptions}</select>
                                </td>
                                <td>
                                    <a href="${doc.file_name}" target="_blank">View File</a>
                                    <input class="form-control mt-2" type="file" name="file_name[]">
                                    <input type="hidden" name="file_name[]" value="${doc.id}">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger removeRow" data-id="${doc.id}">Remove</button>
                                </td>
                            </tr>`;

                            tableBody.append(row);
                        });

                        function convertDateFormat(dateStr) {
                                if (!dateStr) return "";
                                if (dateStr.match(/^\d{4}-\d{2}-\d{2}$/)) {
                                    return dateStr;
                                }
                                var parts = dateStr.split("-");
                                return parts[2] + "-" + parts[1] + "-" + parts[0];
                            }

                    } else {
                        console.log("Error: Missing or malformed data", data);
                        swal("Error!", "Onboard data is missing or malformed", "error");
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






 <!-- Update -->
<script>
    $(document).ready(function() {
        $("#editForm").submit(function(e) {
            e.preventDefault();
            $("#editSubmit").prop('disabled', true);
            var formdata = new FormData(this);
            formdata.append('_method', 'PUT');
            var model_id = $('#edit_model_id').val();
            var url = "{{ route('onboard.update', ':model_id') }}";
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
                            window.location.href = '{{ route('onboard_form_master') }}';
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



