<x-admin.admin-layout>
    <x-slot name="title">Event Master</x-slot>

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <!-- Add Form Start -->
                <div class="row" id="addContainer" style="display:none;">
                    <div class="col-sm-12">
                        <div class="card">
                            <form class="theme-form" name="addFormEvent" id="addFormEvent" enctype="multipart/form-data">


                                @csrf
                                <div class="card-header pb-0">
                                    <h4>Create Events</h4>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="mb-3 row">
                                        <div class="row">
                                            <div class="col-md-4 mt-3">
                                                <label class="col-form-label" for="help_name">How may we help you <span class="text-danger">*</span></label>
                                                <select class="form-control" id="help_name" name="help_name">
                                                    <option value="">--Select--</option>
                                                    <option value="Event">Event</option>
                                                    <option value="Need">Need</option>
                                                    <option value="Job opportunity">Job opportunity</option>
                                                </select>
                                                <span class="text-danger error-text volunteer_name_err"></span>
                                            </div>

                                            <div class="col-md-4 mt-3" id="need_dropdown" style="display: none;">
                                                <label class="col-form-label" for="need_name">Select Need Type<span class="text-danger">*</span></label>
                                                <select class="form-control" id="need_name" name="need_name">
                                                    <option value="">--Select Need--</option>
                                                    <option value="Financial">Financial</option>
                                                    <option value="Material">Material</option>
                                                    <option value="Skill Based">Skill Based</option>
                                                    <option value="Space">Space</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>

                                             <!--Skilled Based-->
                                                <div class="col-md-4 mt-3" id="skilled_fields" style="display: none;" >
                                                    <label class="col-form-label" for="skill">Skill Based<span class="text-danger">*</span></label>
                                                    {{-- <input class="form-control" id="skill" name="skill" type="text" placeholder="Enter Skill Based"> --}}
                                                    <textarea class="form-control" id="need_skill" name="skill" rows="4" placeholder="Enter Comments"></textarea>
                                                    <span class="text-danger error-text volunteer_name_err"></span>
                                                </div>

                                                 <!--space-->
                                                <div class="col-md-4 mt-3" id="space_field" style="display: none;">
                                                    <label class="col-form-label" for="need_space">Space<span class="text-danger">*</span></label>
                                                    {{-- <input class="form-control" id="need_space" name="need_space" type="text" placeholder="Enter Space Name"> --}}
                                                    <textarea class="form-control" id="need_space" name="space" rows="4" placeholder="Enter Comments"></textarea>
                                                    <span class="text-danger error-text volunteer_name_err"></span>
                                                </div>

                                                <!--other-->

                                                <div class="col-md-4 mt-3" id="other_filed" style="display: none;">
                                                    <label class="col-form-label" for="need_other">Other<span class="text-danger">*</span></label>
                                                    {{-- <input class="form-control" id="need_other" name="need_other" type="text" placeholder="Enter Other Name"> --}}
                                                    <textarea class="form-control" id="need_other" name="other" rows="4" placeholder="Enter Comments"></textarea>
                                                    <span class="text-danger error-text volunteer_name_err"></span>
                                                </div>
                                            </div>

                                            <div id="event_fields" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="recurrent">Will it be one time or recurrent? <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="recurrent" name="recurrent" type="text" placeholder="Enter Recurrent Name">
                                                        <span class="text-danger error-text volunteer_name_err"></span>
                                                    </div>

                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="date">From Date <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="date" name="from_date" type="date">
                                                        <span class="text-danger error-text volunteer_details_err"></span>
                                                    </div>

                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="to_date">To Date <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="to_date" name="to_date" type="date">
                                                        <span class="text-danger error-text volunteer_details_err"></span>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="address">Event Address <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="address" name="address" type="text" placeholder="Enter Address">
                                                        <span class="text-danger error-text volunteer_name_err"></span>
                                                    </div>

                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="image">Event Image <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="image" name="image" type="file" accept="image/png, image/jpeg, image/jpg">
                                                        <span class="text-danger error-text volunteer_image_err"></span>
                                                    </div>

                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="summary">Event Summary <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" id="summary" name="summary" rows="4" placeholder="Enter Comments"></textarea>
                                                        <span class="text-danger error-text volunteer_name_err"></span>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="multiple_image">Event Multiple Image <span class="text-danger"></span></label>
                                                        <input class="form-control" id="multiple_image" name="multiple_image[]" type="file"  multiple>

                                                        <span class="text-danger error-text volunteer_image_err"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end event-->
                                            <!--financial-->
                                            <div id="financial_fields" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="financial_recurrent">Will it be one time or recurrent?  <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="financial_recurrent" name="recurrent" type="text" placeholder="Enter Financial Recurrent">
                                                        <span class="text-danger error-text volunteer_name_err"></span>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="financial_date">From Date <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="financial_date" name="form_date" type="date">
                                                        <span class="text-danger error-text volunteer_details_err"></span>
                                                    </div>

                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="financial_to_date">To Date <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="financial_to_date" name="to_date" type="date">
                                                        <span class="text-danger error-text volunteer_details_err"></span>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="financial_amount">Approximate amount <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="financial_amount" name="amount" type="text" placeholder="Enter Amount">
                                                        <span class="text-danger error-text volunteer_name_err"></span>
                                                    </div>

                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="need_address">Need Address <span class="text-danger">*</span> </label>
                                                        <input class="form-control" id="need_address" name="address" type="text" placeholder="Enter Address">
                                                        <span class="text-danger error-text volunteer_name_err"></span>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="need_image">Need Image <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="need_image" name="image" type="file" accept="image/png, image/jpeg, image/jpg">
                                                        <span class="text-danger error-text volunteer_image_err"></span>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="need_summary">Need Summary
                                                        <span class="text-danger">*</span> </label>
                                                        <textarea class="form-control" id="need_summary" name="summary" rows="4" placeholder="Enter Comments"></textarea>
                                                        <span class="text-danger error-text volunteer_name_err"></span>
                                                    </div>

                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="need_multiple_image">Need Multiple Image <span class="text-danger"></span></label>
                                                        <input class="form-control" id="need_multiple_image" name="multiple_image[]" type="file" accept="image/png, image/jpeg, image/jpg" multiple>
                                                        <span class="text-danger error-text volunteer_image_err"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--material-->
                                            <div id="material_fields" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-md-4 mt-3" id="material_section" style="display: none;">
                                                            <label class="col-form-label" for="material_type">Select Material <span class="text-danger"></span></label>
                                                            <select class="form-control" id="material_type" name="material_type">
                                                                <option value="">Select Material</option>
                                                                <option value="furniture">Furniture</option>
                                                                <option value="electronics">Electronics</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4 mt-3" id="material_amount_section" style="display: none;">
                                                            <label class="col-form-label" for="material_amount">Approximate Amount <span class="text-danger">*</span></label>
                                                            <input class="form-control" id="material_amount" name="amount" type="text" placeholder="Enter Approximate Amount">
                                                            <span class="text-danger error-text volunteer_name_err"></span>
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <label class="col-form-label" for="need_address">Need Address <span class="text-danger">*</span> </label>
                                                            <input class="form-control" id="need_address" name="address" type="text" placeholder="Enter Address">
                                                            <span class="text-danger error-text volunteer_name_err"></span>
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <label class="col-form-label" for="material_other">Other <span class="text-danger">*</span></label>
                                                            <input class="form-control" id="material_other" name="other" type="text" placeholder="Enter Other">
                                                            <span class="text-danger error-text volunteer_name_err"></span>
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <label class="col-form-label" for="need_image">Need Image <span class="text-danger">*</span></label>
                                                            <input class="form-control" id="need_image" name="image" type="file" accept="image/png, image/jpeg, image/jpg">
                                                            <span class="text-danger error-text volunteer_image_err"></span>
                                                        </div>

                                                        <div class="col-md-4 mt-3">
                                                            <label class="col-form-label" for="need_multiple_image">Need Multiple Image <span class="text-danger"></span></label>
                                                            <input class="form-control" id="need_multiple_image" name="multiple_image" type="file" accept="image/png, image/jpeg, image/jpg" multiple>
                                                            <span class="text-danger error-text volunteer_image_err"></span>
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <label class="col-form-label" for="need_summary">Need Summary
                                                            <span class="text-danger">*</span> </label>
                                                            <textarea class="form-control" id="need_summary" name="summary" rows="4" placeholder="Enter Comments"></textarea>
                                                            <span class="text-danger error-text volunteer_name_err"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--job oportunities-->

                                                <div id="job_fields" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-md-4 mt-3">
                                                            <label class="col-form-label" for="job_date">From Date <span class="text-danger">*</span></label>
                                                            <input class="form-control" id="job_date" name="from_date" type="date">
                                                            <span class="text-danger error-text volunteer_details_err"></span>
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <label class="col-form-label" for="job_to_date">To Date <span class="text-danger">*</span></label>
                                                            <input class="form-control" id="job_to_date" name="to_date" type="date">
                                                            <span class="text-danger error-text volunteer_details_err"></span>
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <label class="col-form-label" for="job_address">Job Address <span class="text-danger">*</span> </label>
                                                            <input class="form-control" id="job_address" name="address" type="text" placeholder="Enter Address">
                                                            <span class="text-danger error-text volunteer_name_err"></span>
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <label class="col-form-label" for="job_image">Job Image <span class="text-danger">*</span></label>
                                                            <input class="form-control" id="job_image" name="image" type="file" accept="image/png, image/jpeg, image/jpg">
                                                            <span class="text-danger error-text volunteer_image_err"></span>
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <label class="col-form-label" for="job_summary">Job Summary
                                                            <span class="text-danger">*</span> </label>
                                                            <textarea class="form-control" id="job_summary" name="summary" rows="4" placeholder="Enter Comments"></textarea>
                                                            <span class="text-danger error-text volunteer_name_err"></span>
                                                        </div>

                                                        <div class="col-md-4 mt-3">
                                                            <label class="col-form-label" for="job_multiple_image">Job Multiple Image <span class="text-danger">*</span></label>
                                                            <input class="form-control" id="job_multiple_image" name="multiple_image[]" type="file" accept="image/png, image/jpeg, image/jpg" multiple>
                                                            <span class="text-danger error-text volunteer_image_err"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" id="addSubmitEvents">Submit</button>
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
                                    <h4 class="card-title">Edit Events</h4>
                                </header>

                                <div class="card-body py-2">

                                    <input type="hidden" id="edit_model_id" name="edit_model_id" value="">

                                    <div class="mb-3 row">

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="help_name">How may we help you <span class="text-danger">*</span></label>
                                            <select class="form-control" id="help_name_edit" name="help_name">
                                                <option value="">--Select--</option>
                                                <option value="Event">Event</option>
                                                <option value="Need">Need</option>
                                                <option value="Job opportunity">Job opportunity</option>
                                            </select>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3" id="need_dropdown_edit" style="display: none;">
                                            <label class="col-form-label" for="need_name">Select Need Type<span class="text-danger">*</span></label>
                                            <select class="form-control" id="need_name_edit" name="need_name">
                                                <option value="">--Select Need--</option>
                                                <option value="Financial">Financial</option>
                                                <option value="Material">Material</option>
                                                <option value="Skill Based">Skill Based</option>
                                                <option value="Space">Space</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>

                                         <!--Skilled Based-->
                                            <div class="col-md-4 mt-3" id="skilled_fields_edit" style="display: none;" >
                                                <label class="col-form-label" for="skill">Skill Based<span class="text-danger">*</span></label>
                                                {{-- <input class="form-control" id="skill" name="skill" type="text" placeholder="Enter Skill Based"> --}}
                                                <textarea class="form-control" id="need_skill_edit" name="skill" rows="4" placeholder="Enter Comments"></textarea>
                                                <span class="text-danger error-text volunteer_name_err"></span>
                                            </div>

                                             <!--space-->
                                            <div class="col-md-4 mt-3" id="space_field_edit" style="display: none;">
                                                <label class="col-form-label" for="need_space">Space<span class="text-danger">*</span></label>
                                                {{-- <input class="form-control" id="need_space" name="need_space" type="text" placeholder="Enter Space Name"> --}}
                                                <textarea class="form-control" id="need_space_edit" name="space" rows="4" placeholder="Enter Comments"></textarea>
                                                <span class="text-danger error-text volunteer_name_err"></span>
                                            </div>

                                            <!--other-->

                                            <div class="col-md-4 mt-3" id="other_filed_edit" style="display: none;">
                                                <label class="col-form-label" for="need_other">Other<span class="text-danger">*</span></label>
                                                {{-- <input class="form-control" id="need_other" name="need_other" type="text" placeholder="Enter Other Name"> --}}
                                                <textarea class="form-control" id="need_other_edit" name="other" rows="4" placeholder="Enter Comments"></textarea>
                                                <span class="text-danger error-text volunteer_name_err"></span>
                                            </div>
                                        </div>

                                        <div id="event_fields_edit" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-4 mt-3">
                                                    <label class="col-form-label" for="recurrent">Will it be one time or recurrent? <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="recurrent_edit" name="recurrent" type="text" placeholder="Enter Recurrent Name">
                                                    <span class="text-danger error-text volunteer_name_err"></span>
                                                </div>

                                                <div class="col-md-4 mt-3">
                                                    <label class="col-form-label" for="date">From Date <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="date_edit" name="from_date" type="date">
                                                    <span class="text-danger error-text volunteer_details_err"></span>
                                                </div>

                                                <div class="col-md-4 mt-3">
                                                    <label class="col-form-label" for="to_date">To Date <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="to_date_edit" name="to_date" type="date">
                                                    <span class="text-danger error-text volunteer_details_err"></span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 mt-3">
                                                    <label class="col-form-label" for="address">Event Address <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="address_edit" name="address" type="text" placeholder="Enter Address">
                                                    <span class="text-danger error-text volunteer_name_err"></span>
                                                </div>

                                                <div class="col-md-4 mt-3">
                                                    <label class="col-form-label" for="image">Event Image <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="image_edit" name="image" type="file" accept="image/png, image/jpeg, image/jpg">
                                                    <span class="text-danger error-text volunteer_image_err"></span>
                                                    <!-- Image Preview -->
                                                    <img class="preview_image" src="" alt="Story Image" width="80" height="80" style="margin-top: 9px;
                                                    ">
                                                </div>

                                                <div class="col-md-4 mt-3">
                                                    <label class="col-form-label" for="summary">Event Summary <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" id="summary_edit" name="summary" rows="4" placeholder="Enter Comments"></textarea>
                                                    <span class="text-danger error-text volunteer_name_err"></span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 mt-3">
                                                    <label class="col-form-label" for="multiple_image">Event Multiple Image <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="multiple_image_edit" name="multiple_image[]" type="file"  multiple>

                                                    <span class="text-danger error-text volunteer_image_err"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end event-->
                                        <!--financial-->
                                        <div id="financial_fields_edit" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-4 mt-3">
                                                    <label class="col-form-label" for="financial_recurrent">Will it be one time or recurrent?  <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="financial_recurrent_edit" name="recurrent" type="text" placeholder="Enter Financial Recurrent">
                                                    <span class="text-danger error-text volunteer_name_err"></span>
                                                </div>
                                                <div class="col-md-4 mt-3">
                                                    <label class="col-form-label" for="financial_date">From Date <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="financial_date_edit" name="form_date" type="date">
                                                    <span class="text-danger error-text volunteer_details_err"></span>
                                                </div>

                                                <div class="col-md-4 mt-3">
                                                    <label class="col-form-label" for="financial_to_date">To Date <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="financial_to_date_edit" name="to_date" type="date">
                                                    <span class="text-danger error-text volunteer_details_err"></span>
                                                </div>
                                                <div class="col-md-4 mt-3">
                                                    <label class="col-form-label" for="financial_amount">Approximate amount <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="financial_amount_edit" name="amount" type="text" placeholder="Enter Amount">
                                                    <span class="text-danger error-text volunteer_name_err"></span>
                                                </div>

                                                <div class="col-md-4 mt-3">
                                                    <label class="col-form-label" for="need_address">Need Address <span class="text-danger">*</span> </label>
                                                    <input class="form-control" id="need_address_edit" name="address" type="text" placeholder="Enter Address">
                                                    <span class="text-danger error-text volunteer_name_err"></span>
                                                </div>
                                                <div class="col-md-4 mt-3">
                                                    <label class="col-form-label" for="need_image">Need Image <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="need_image_edit" name="image" type="file" accept="image/png, image/jpeg, image/jpg">
                                                    <span class="text-danger error-text volunteer_image_err"></span>
                                                </div>
                                                <div class="col-md-4 mt-3">
                                                    <label class="col-form-label" for="need_summary">Need Summary
                                                    <span class="text-danger">*</span> </label>
                                                    <textarea class="form-control" id="need_summary_edit" name="summary" rows="4" placeholder="Enter Comments"></textarea>
                                                    <span class="text-danger error-text volunteer_name_err"></span>
                                                </div>

                                                <div class="col-md-4 mt-3">
                                                    <label class="col-form-label" for="need_multiple_image">Need Multiple Image <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="need_multiple_image_edit" name="multiple_image[]" type="file" accept="image/png, image/jpeg, image/jpg" multiple>
                                                    <span class="text-danger error-text volunteer_image_err"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--material-->
                                        <div id="material_fields_edit" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-4 mt-3" id="material_section_edit" style="display: none;">
                                                        <label class="col-form-label" for="material_type">Select Material <span class="text-danger"></span></label>
                                                        <select class="form-control" id="material_type_edit" name="material_type">
                                                            <option value="">Select Material</option>
                                                            <option value="furniture">Furniture</option>
                                                            <option value="electronics">Electronics</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mt-3" id="material_amount_section_edit" style="display: none;">
                                                        <label class="col-form-label" for="material_amount">Approximate Amount <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="material_amount_edit" name="amount" type="text" placeholder="Enter Approximate Amount">
                                                        <span class="text-danger error-text volunteer_name_err"></span>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="need_address">Need Address <span class="text-danger">*</span> </label>
                                                        <input class="form-control" id="need_address_edit" name="address" type="text" placeholder="Enter Address">
                                                        <span class="text-danger error-text volunteer_name_err"></span>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="material_other">Other <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="material_other_edit" name="other" type="text" placeholder="Enter Other">
                                                        <span class="text-danger error-text volunteer_name_err"></span>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="need_image">Need Image <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="need_image_edit" name="image" type="file" accept="image/png, image/jpeg, image/jpg">
                                                        <span class="text-danger error-text volunteer_image_err"></span>
                                                    </div>

                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="need_multiple_image">Need Multiple Image <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="need_multiple_image_edit" name="multiple_image" type="file" accept="image/png, image/jpeg, image/jpg" multiple>
                                                        <span class="text-danger error-text volunteer_image_err"></span>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="need_summary">Need Summary
                                                        <span class="text-danger">*</span> </label>
                                                        <textarea class="form-control" id="need_summary_edit" name="summary" rows="4" placeholder="Enter Comments"></textarea>
                                                        <span class="text-danger error-text volunteer_name_err"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--job oportunities-->

                                            <div id="job_fields_edit" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="job_date">From Date <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="job_date_edit" name="from_date" type="date">
                                                        <span class="text-danger error-text volunteer_details_err"></span>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="job_to_date">To Date <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="job_to_date_edit" name="to_date" type="date">
                                                        <span class="text-danger error-text volunteer_details_err"></span>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="job_address">Job Address <span class="text-danger">*</span> </label>
                                                        <input class="form-control" id="job_address_edit" name="address" type="text" placeholder="Enter Address">
                                                        <span class="text-danger error-text volunteer_name_err"></span>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="job_image">Job Image <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="job_image_edit" name="image" type="file" accept="image/png, image/jpeg, image/jpg">
                                                        <span class="text-danger error-text volunteer_image_err"></span>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="job_summary">Job Summary
                                                        <span class="text-danger">*</span> </label>
                                                        <textarea class="form-control" id="job_summary_edit" name="summary" rows="4" placeholder="Enter Comments"></textarea>
                                                        <span class="text-danger error-text volunteer_name_err"></span>
                                                    </div>

                                                    <div class="col-md-4 mt-3">
                                                        <label class="col-form-label" for="job_multiple_image">Job Multiple Image <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="job_multiple_image_edit" name="multiple_image[]" type="file" accept="image/png, image/jpeg, image/jpg" multiple>
                                                        <span class="text-danger error-text volunteer_image_err"></span>
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
                        <h3>Event Details</h3>
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
                                            <th>Event Name</th>
                                            <th>Event Images</th>
                                            <th>Event Address</th>
                                            <th>Event Summary</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($eventlist as $events)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $events->help_name }}</td>
                                            <td>
                                                <img src="{{$events->image_path}}"
                                                     alt="Charity Image"
                                                     width="50" height="50"
                                                     style="object-fit: cover; border-radius: 5px;">
                                            </td>
                                            <td>{{ $events->address}}</td>
                                            <td>{{ $events->summary}}</td>
                                            <td>
                                                <button class="edit-element btn btn-primary px-2 py-1" title="Edit User" data-id="{{ $events->id }}">
                                                    <i data-feather="edit"></i>
                                                </button>

                                                <button class="btn btn-dark rem-element px-2 py-1" title="Delete ward" data-id="{{ $events->id }}">
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
{{-- Add --}}
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    $("#addFormEvent").submit(function(e) {
        e.preventDefault();
        $("#addSubmitEvents").prop('disabled', true);

        var formdata = new FormData();


        $("#addFormEvent :input").each(function() {
            if ($(this).is(":visible")) {
                if ($(this).attr("type") === "file" && $(this).attr("id")!= 'multiple_image') {
                    if (this.files.length > 0) {
                        formdata.append(this.name, this.files[0]);
                    }
                } else {
                    formdata.append(this.name, $(this).val());
                }
            }
        });

        var multipleImages = $("#multiple_image")[0].files;
            if (multipleImages.length > 0) {
                for (let i = 0; i < multipleImages.length; i++) {
                    formdata.append('multiple_image[]', multipleImages[i]);
                }
            }



        var csrfToken = $("input[name='_token']").val();
        formdata.append('_token', csrfToken);

        $.ajax({
            url: '{{ route('events.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmitEvents").prop('disabled', false);
                swal("Successful!", data.success, "success")
                .then(() => {
                    window.location.href = '{{ route('event_master') }}';
                });
            },
            statusCode: {
                422: function(responseObject) {
                    $("#addSubmitEvents").prop('disabled', false);
                    resetErrors();
                    printErrMsg(responseObject.responseJSON.errors);
                },
                500: function() {
                    $("#addSubmitEvents").prop('disabled', false);
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



<!-- edit -->
<script>
    $("#datatable-tabletools").on("click", ".edit-element", function (e) {
    e.preventDefault();
    var event_id = $(this).attr("data-id");
    var url = "{{ route('events.edit', ':id') }}".replace(":id", event_id);

    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            console.log("Fetched Data: ", data);

            if (data && data.events) {
                $("#addContainer").slideUp();
                $("#btnCancel").show();
                $("#addToTable").hide();
                $("#editContainer").slideDown();
                if (data.events.image_path) {
                    console.log("Image Path: ", data.events.image_path);
                    $(".preview_image").attr("src",data.events.image_path ).show();

                } else {
                    $(".preview_image").hide();

                }

                $("#editForm input[name='edit_model_id']").val(data.events.id);
                // Set select and input values
                $("#editForm select[name='help_name']").val(data.events.help_name).trigger("change");
                $("#editForm select[name='need_name']").val(data.events.need_name).trigger("change");

                $("#editForm select[name='material_type']").val(data.events.material_type).trigger("change");
                $("#editForm input[name='amount']").val(data.events.amount).trigger("change");

                $("#editForm textarea[name='skill']").val(data.events.skill);
                $("#editForm textarea[name='space']").val(data.events.space);
                $("#editForm input[name='other']").val(data.events.other);
                $("#editForm textarea[name='summary']").val(data.events.summary);
                $("#editForm input[name='recurrent']").val(data.events.recurrent);
                $("#editForm input[name='address']").val(data.events.address);
                $("#editForm input[name='from_date']").val(data.events.from_date);
                $("#editForm input[name='to_date']").val(data.events.to_date);
                $("#editForm input[name='multiple_image']").val(data.events.multiple_image);

                // Image Preview Handling
                console.log("Image Path: ", data.events.image);

                // Ensure select values are properly set with slight delay
                setTimeout(function () {
                    console.log("Available need_name options:", $("#editForm select[name='need_name']").html());
                    console.log("Available material_type options:", $("#editForm select[name='material_type']").html());

                    $("#editForm select[name='help_name']").trigger("change");
                    $("#editForm select[name='need_name']").trigger("change");
                    $("#editForm select[name='material_type']").trigger("change");
                }, 500);

                // Scroll to Edit Form
                setTimeout(function () {
                    $("html, body").animate(
                        {
                            scrollTop: $("#editContainer").offset().top,
                        },
                        "slow"
                    );
                }, 300);
            } else {
                swal("Error!", "Event data is missing or malformed", "error");
            }
        },
        error: function () {
            swal("Error!", "Unable to fetch event data", "error");
        },
    });
});

    </script>




<!--delete fucntionlity-->
<script>
    $("#datatable-tabletools").on("click", ".rem-element", function(e) {
        e.preventDefault();
        swal({
            title: "Are you sure to delete this events?",
            // text: "Make sure if you have filled Vendor details before proceeding further",
            icon: "info",
            buttons: ["Cancel", "Confirm"]
        })
        .then((justTransfer) =>
        {
            if (justTransfer)
            {
                var model_id = $(this).attr("data-id");
                var url = "{{ route('events.destroy', ":model_id") }}";

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

<script>
    document.getElementById("help_name").addEventListener("change", function () {
        let eventFields = document.getElementById("event_fields");
        if (this.value === "Event") {
            eventFields.style.display = "block";
        } else {
            eventFields.style.display = "none";
        }
    });
</script>







<script>
    document.addEventListener("DOMContentLoaded", function () {
        let helpName = document.getElementById("help_name");
        let needDropdown = document.getElementById("need_dropdown");
        let needName = document.getElementById("need_name");
        let financialFields = document.getElementById("financial_fields");

        helpName.addEventListener("change", function () {
            if (this.value === "Need") {
                needDropdown.style.display = "block";
            } else {
                needDropdown.style.display = "none";
                financialFields.style.display = "none";
            }
        });

        needName.addEventListener("change", function () {
            if (this.value === "Financial") {
                financialFields.style.display = "block";
            } else {
                financialFields.style.display = "none";
            }
        });
    });
</script>




<script>
    document.addEventListener("DOMContentLoaded", function () {
        let helpName = document.getElementById("help_name");
        let needDropdown = document.getElementById("need_dropdown");
        let needName = document.getElementById("need_name");
        let materialFields = document.getElementById("material_fields");


        helpName.addEventListener("change", function () {
            if (this.value === "Need") {
                needDropdown.style.display = "block";
            } else {
                needDropdown.style.display = "none";
                materialFields.style.display = "none";
            }
        });

        needName.addEventListener("change", function () {
            if (this.value === "Material") {
                materialFields.style.display = "block";
            } else {
                materialFields.style.display = "none";
            }
        });
    });
</script>




<script>
    document.addEventListener("DOMContentLoaded", function () {
        let helpName = document.getElementById("help_name");
        let needDropdown = document.getElementById("need_dropdown");
        let needName = document.getElementById("need_name");
        let materialSection = document.getElementById("material_section");
        let materialAmountSection = document.getElementById("material_amount_section");

        // Step 1: Show Need Dropdown when "Need" is selected
        helpName.addEventListener("change", function () {
            if (this.value === "Need") {
                needDropdown.style.display = "block";
            } else {
                needDropdown.style.display = "none";
                materialSection.style.display = "none";
                materialAmountSection.style.display = "none";
            }
        });

        // Step 2: Show Material Section when "Material" is selected
        needName.addEventListener("change", function () {
            if (this.value === "Material") {
                materialSection.style.display = "block";
            } else {
                materialSection.style.display = "none";
                materialAmountSection.style.display = "none";
            }
        });

        // Step 3: Show Material Amount Section when material type is selected
        document.getElementById("material_type").addEventListener("change", function () {
            if (this.value) {
                materialAmountSection.style.display = "block";
            } else {
                materialAmountSection.style.display = "none";
            }
        });
    });
</script>





<!--skill-->
<script>
   document.addEventListener("DOMContentLoaded", function () {
    let helpName = document.getElementById("help_name");
    let needDropdown = document.getElementById("need_dropdown");
    let needName = document.getElementById("need_name");
    let skilledFields = document.getElementById("skilled_fields");

    helpName.addEventListener("change", function () {
        if (this.value === "Need") {
            needDropdown.style.display = "block";
        } else {
            needDropdown.style.display = "none";
            skilledFields.style.display = "none";
        }
    });

    needName.addEventListener("change", function () {
        if (this.value === "Skill Based") {
            skilledFields.style.display = "block";
        } else {
            skilledFields.style.display = "none";
        }
    });
});
</script>





<!--space-->
<script>
    document.addEventListener("DOMContentLoaded", function () {
     let helpName = document.getElementById("help_name");
     let needDropdown = document.getElementById("need_dropdown");
     let needName = document.getElementById("need_name");
     let spaceFields = document.getElementById("space_field");

     helpName.addEventListener("change", function () {
         if (this.value === "Need") {
             needDropdown.style.display = "block";
         } else {
             needDropdown.style.display = "none";
             spaceFields.style.display = "none";
         }
     });

     needName.addEventListener("change", function () {
         if (this.value === "Space") {
            spaceFields.style.display = "block";
         } else {
            spaceFields.style.display = "none";
         }
     });
 });
 </script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
     let helpName = document.getElementById("help_name");
     let needDropdown = document.getElementById("need_dropdown");
     let needName = document.getElementById("need_name");
     let otherFields = document.getElementById("other_filed");

     helpName.addEventListener("change", function () {
         if (this.value === "Need") {
             needDropdown.style.display = "block";
         } else {
             needDropdown.style.display = "none";
             otherFields.style.display = "none";
         }
     });

     needName.addEventListener("change", function () {
         if (this.value === "Other") {
            otherFields.style.display = "block";
         } else {
            otherFields.style.display = "none";
         }
     });
 });
 </script>

<script>
    document.getElementById("help_name").addEventListener("change", function () {
        let jobopportunityFields = document.getElementById("job_fields");
        if (this.value === "Job opportunity") {
            jobopportunityFields.style.display = "block";
        } else {
            jobopportunityFields.style.display = "none";
        }
    });


</script>
<script>
     $(document).ready(function () {
    $('#help_name_edit').change(function () {
        let value = $(this).val();
        $('#event_fields_edit, #need_dropdown_edit, #financial_fields_edit, #material_fields_edit,#material_section_edit, #material_amount_section_edit, #skilled_fields_edit, #space_field_edit, #other_filed_edit, #job_fields_edit').hide();

        if (value === 'Event') {
            $('#event_fields_edit').show();
        } else if (value === 'Need') {
            $('#need_dropdown_edit').show();
        } else if (value === 'Job opportunity') {
            $('#job_fields_edit').show();
        }
    });

    $('#need_name_edit').change(function () {
        let value = $(this).val();
        $('#financial_fields_edit, #material_fields_edit, #material_section_edit,  #material_amount_section_edit, #skilled_fields_edit, #space_field_edit, #other_filed_edit').hide();

        if (value === 'Financial') {
            $('#financial_fields_edit').show();
        } else if (value === 'Material') {
            $('#material_fields_edit, #material_section_edit').show();
        } else if (value === 'Skill Based') {
            $('#skilled_fields_edit').show();
        } else if (value === 'Space') {
            $('#space_field_edit').show();
        } else if (value === 'Other') {
            $('#other_filed_edit').show();
        }
    });

    $('#material_type_edit').change(function () {
        if ($(this).val()) {
            $('#material_amount_section_edit').show();
        } else {
            $('#material_amount_section_edit').hide();
        }
    });
});
</script>

<!-- Update -->
<script>
   $(document).ready(function () {
    $("#editForm").submit(function (e) {
        e.preventDefault();
        $("#editSubmit").prop("disabled", true);

        var formdata = new FormData(this);
        formdata.append("_method", "PUT");

        var model_id = $("#edit_model_id").val();
        var url = "{{ route('events.update', ':model_id') }}".replace(":model_id", model_id);

        $("#editForm :input").each(function() {
            if ($(this).is(":visible")) {
                if ($(this).attr("type") === "file" && $(this).attr("id")!= 'multiple_image_edit') {
                    if (this.files.length > 0) {
                        formdata.append(this.name, this.files[0]);
                    }
                } else {
                    formdata.append(this.name, $(this).val());
                }
            }
        });

        // Append multiple images correctly
        var multipleImages = $("#multiple_image_edit")[0].files;
        if (multipleImages.length > 0) {
            for (let i = 0; i < multipleImages.length; i++) {
                formdata.append("multiple_image[]", multipleImages[i]);
            }
        }

        var csrfToken = $("input[name='_token']").val();
        formdata.append("_token", csrfToken);

        $.ajax({
            url: url,
            type: "POST",
            data: formdata,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#editSubmit").prop("disabled", false);
                if (!data.error2) {
                    swal("Successful!", data.success, "success").then(() => {
                        window.location.href = "{{ route('event_master') }}";
                    });
                } else {
                    swal("Error!", data.error2, "error");
                }
            },
            statusCode: {
                422: function (responseObject) {
                    $("#editSubmit").prop("disabled", false);
                    resetErrors();
                    printErrMsg(responseObject.responseJSON.errors);
                },
                500: function () {
                    $("#editSubmit").prop("disabled", false);
                    swal("Error occurred!", "Something went wrong, please try again", "error");
                },
            },
        });

        function resetErrors() {
            $("#editForm .is-invalid").removeClass("is-invalid");
            $("#editForm .error-text").text("");
        }

        function printErrMsg(msg) {
            $.each(msg, function (key, value) {
                var field = key.replace("[]", "");
                $("." + field + "_err").text(value);
                $("#" + field).addClass("is-invalid");
            });
        }
    });
});
</script>
























































