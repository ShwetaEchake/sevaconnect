<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect Now</title>
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/images/logo/LogoColouri.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>

    .swal-wide { width: 450px !important; }

   body {
        background-image: url("{{ asset('frontend/assets/images/banner/recoms.jpg') }}");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
        label {
            font-size: 0.9rem;
        }
.select2{
    width:100% !important;
}
</style>
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

    .subsectors , .subsectorseight{
        margin-left: 20px;
        margin-top: 5px;
    }

    .subsectors label,.subsectorseight label {
        display: block;
        padding: 2px 0;
    }

    .toggle-subsectors, .toggle-subsectorseight {
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

</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <h4 class="card-header" >Connect Now</h4>
                    <div class="card-body">
                        <form action="" name="addFormRec" id="addFormRec" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="name">Who are you?<span class="text-danger">*</span> </label>
                                    <select name="user_type" id="name" class="form-control">
                                        <option value="" selected>--select--</option>
                                        <option value="Individual">Individual </option>
                                        <option value="Social Organization">Social Organization</option>
                                        <option value="Independent organization">Independent organization</option>
                                    </select>
                                    <span class="text-danger error-text user_type_err"></span>
                                </div>

                                <div id="social-organization-fields" style="display: none;" class="col-12">
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="organization_type">Type of organization<span class="text-danger"></span> </label>
                                            <select name="organization_type_id" id="organization_type_id" class="form-control">
                                                <option value="" disabled selected>--select--</option>
                                                @foreach($orgTypes as $orgType)
                                                    <option value="{{ $orgType->id }}">{{ $orgType->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group" >
                                            <label for="ngo_details">NGO details</label>
                                            <select name="ngo_details" id="ngo_details" class="form-control">
                                                @foreach($ngoTypes as $ngoType)
                                                   <option value="{{$ngoType->id}}">{{$ngoType->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="org_name">Name of organization<span class="text-danger">*</span> </label>
                                            <input type="text" name="org_name" id="org_name" class="form-control" placeholder="Enter Organization Name" pattern="^[A-Za-z\s]+$" >
                                            <span class="text-danger error-text org_name_err"></span>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="managing">Managing trustee/director</label>
                                            <input type="text" class="form-control" name="managing" id="managing" placeholder="Enter Managing trustee/director">
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="org_contact_name">Name Contact person of SO</label>
                                            <input type="text" name="org_contact_name" class="form-control" id="org_contact_name" placeholder="Enter Contact Person Of SO" pattern="^[A-Za-z\s]+$" >
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="org_contact_no">Mobile number of contact person </label>
                                            <input type="text" name="org_contact_no" id="org_contact_no" class="form-control" placeholder="Enter Mobile number of contact person" pattern="[789][0-9]{9}" maxlength="10" >
                                        </div>

                                        {{-- <div class="col-md-4 form-group">
                                            <label for="address">Registered address</label>
                                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter Registered Address">
                                        </div> --}}



                                        <div class="col-md-4 form-group">
                                            <label for="contact_address">Contact address</label>
                                            <input type="text" class="form-control" name="contact_address" id="contact_address" placeholder="Enter Contact Address">
                                        </div>

                                        {{-- <div class="col-md-4 form-group">
                                            <label for="contact_pincode">Contact pincode</label>
                                            <input type="text" class="form-control" name="contact_pincode" id="contact_pincode" placeholder="Enter Contact Pincode">
                                        </div> --}}

                                        <div class="col-md-4 form-group">
                                            <label for="work_place">Geographical Area of Impact</label>
                                            {{-- <input type="text" name="work_place" class="form-control" id="work_place" placeholder="Enter Place of Work"> --}}
                                            <textarea name="work_place" class="form-control" id="work_place" placeholder="eg.(thane corporation,bhivandi corporation)..." rows="2"></textarea>
                                        </div>

                                        {{-- <div class="col-md-4 form-group">
                                            <label for="area">Area of work</label>
                                            <input type="text" name="area" class="form-control" id="area" placeholder="Enter Area of Work">
                                        </div> --}}

                                        <div class="col-md-4 form-group">
                                            <label for="email">Email ID</label>
                                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email ID">
                                        </div>

                                        {{-- <div class="col-md-4 form-group">
                                            <label for="year">Year of Establishment</label>
                                            <input type="text" name="year" class="form-control" id="year" placeholder="Enter Year Of Establishment">
                                        </div> --}}

                                        {{-- <div class="col-md-4 form-group">
                                            <label for="sector_id">Sectors</label><br>
                                            <select name="sector_id[]" id="sector_id" class="form-control" multiple="multiple">
                                                @foreach($sectors as $sector)
                                                    <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="sub_sectors_induction">Sub-Sectors</label><br>
                                            <select name="sub_sector_id[]" id="sub_sectors_induction" class="form-control" multiple="multiple">
                                            </select>
                                        </div> --}}

                                        <div class="col-md-4 form-group">
                                            <label for="sector_id">Sectors</label><br>
                                            <select name="sector_id[]" id="sector_id" class="form-control" multiple="multiple">
                                                @foreach($sectors as $sector)
                                                    <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="col-md-4 form-group">
                                            <label for="sub_sectors_induction">Sub-Sectors</label><br>
                                            <select name="sub_sector_id[]" id="sub_sectors_induction" class="form-control" multiple="multiple">
                                            </select>
                                        </div>


                                        <div class="col-md-4 form-group">
                                            <label for="vision_induction">Vision and mission statement</label>
                                            <input type="text" name="vision_induction" class="form-control" id="vision" placeholder="Vision and mission statement">
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="current">Current nature of work</label>
                                            <input type="text" name="current" class="form-control" id="current" placeholder="Enter Current Nature Of Work">
                                        </div>
                                    </div>
                                </div>



                                <div id="individual-organization-fields" style="display:none;" class="col-12">
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="mobile_no">Mobile Number<span class="text-danger">*</span> </label>
                                            <input type="text" name="mobile_no" id="mobile_no" class="form-control" placeholder="Enter Mobile No" pattern="[789][0-9]{9}" maxlength="10" >
                                            <span class="text-danger error-text mobile_no_err"></span>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="name">Name<span class="text-danger">*</span> </label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                                            <span class="text-danger error-text name_err"></span>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="contact_address">Contact address</label>
                                            <input type="text" class="form-control" name="contact_address" id="contact_address" placeholder="Enter Contact Address">
                                        </div>

                                        {{-- <div class="col-md-4 form-group">
                                            <label for="contact_pincode">Contact pincode</label>
                                            <input type="text" class="form-control" name="contact_pincode" id="contact_pincode" placeholder="Enter Contact Pincode">
                                        </div> --}}

                                        <div class="col-md-4 form-group">
                                            <label for="area_interest">Areas of Interest</label>
                                            <div class="custom-dropdown" id="areaInterestDropdown">
                                                <div class="dropdown-toggle-box" onclick="toggleDropdown()">Select Areas</div>
                                        
                                                <div class="dropdown-options" id="dropdownOptions">
                                                    <div class="select-all-container">
                                                        <label><input type="checkbox" id="selectAll"> Select All</label>
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
                                                                <button type="button" class="toggle-subsectors" data-sector-id="{{ $sector->id }}">+</button>
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


                                        <div class="col-md-4 form-group">
                                            <label for="email">Email ID</label>
                                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email ID">
                                        </div>
                                        {{-- <div id="induction_cause_div" style="display: none;" class="col-md-4 form-group">
                                            <label for="induction_cause">Can u become a point of contact for a certain cause?</label>
                                            <select name="cause" id="induction_cause" class="form-control">
                                                <option value="" disabled selected>--select--</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div> --}}


                                        {{-- <div id="specify-fields" style="display: none;" class="col-4">
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="area_cause">Specify cause and area</label>
                                                    <select name="area_cause" id="area_cause" class="form-control">
                                                        <option value="" disabled selected>--select--</option>
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div id="social_org_div" style="display: none;" class="col-md-4 form-group">
                                            <label for="social_org">Do you want to recommend a social Organization(SO)?</label>
                                            <select name="social_org" id="social_org" class="form-control">
                                                <option value="" disabled selected>--select--</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>

                                        <div id="social_org_fields" style="display: none;"class="col-md-12 form-group">
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label for="org_name">Name of organization</label>
                                                    <input type="text" name="org_name" id="org_name" class="form-control" placeholder="Enter Name Of Organization " pattern="^[A-Za-z\s]+$" >
                                                </div>

                                                {{-- <div class="col-md-4 form-group">
                                                    <label for="organization_type">Type of organization</label>
                                                    <select name="organization_type_id" id="organization_type_id" class="form-control">
                                                        <option value="" disabled selected>--select--</option>
                                                        @foreach($orgTypes as $orgType)
                                                            <option value="{{ $orgType->id }}">{{ $orgType->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div> --}}


                                                {{-- <div class="col-md-4 form-group" >
                                                    <label for="ngo_details">NGO details</label>
                                                    <select name="ngo_details" id="ngo_details" class="form-control">

                                                        @foreach($ngoTypes as $ngoType)
                                                           <option value="{{$ngoType->id}}">{{$ngoType->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div> --}}




                                                <div class="col-md-4 form-group">
                                                    <label for="off_address">Address</label>
                                                    <input type="text" class="form-control" name="off_address" id="off_address" placeholder="Enter Address">
                                                </div>
                                                {{-- <div class="col-md-4 form-group">
                                                    <label for="off_pincode">Official Pincode</label>
                                                    <input type="text" class="form-control" name="off_pincode" id="off_pincode" placeholder="Enter Official Address">
                                                </div> --}}

                                                {{-- <div class="col-md-4 form-group">
                                                    <label for="work_place">Place of work</label>
                                                    <input type="text" name="work_place" class="form-control" id="work_place" placeholder="Enter Place of Work">
                                                </div> --}}
                                                <div class="col-md-4 form-group">
                                                    <label for="work_place">Geographical Area of Impact</label>
                                                    {{-- <input type="text" name="work_place" class="form-control" id="work_place" placeholder="Enter Place of Work"> --}}
                                                    <textarea name="work_place" class="form-control" id="work_place" placeholder="eg.(thane corporation,bhivandi corporation)..." rows="2"></textarea>
                                                </div>

                                                {{-- <div class="col-md-4 form-group">
                                                    <label for="phone_no">Phone Number</label>
                                                    <input type="text" name="phone_no" id="phone_no" class="form-control" placeholder="Enter Phone No" pattern="[789][0-9]{9}" maxlength="10" >
                                                </div> --}}
                                                <div class="col-md-4 form-group">
                                                    <label for="org_contact_name">Name of Contact person</label>
                                                    <input type="text" name="org_contact_name" class="form-control" id="org_contact_name" placeholder="Enter Name of Contact Person" pattern="^[A-Za-z\s]+$" >
                                                </div>

                                                <div class="col-md-4 form-group">
                                                    <label for="org_contact_no">Mobile number of contact person</label>
                                                    <input type="text" name="org_contact_no" id="org_contact_no" class="form-control" placeholder="Enter Mobile Number Of Contact Person" pattern="[789][0-9]{9}" maxlength="10" >
                                                </div>

                                                <div class="col-md-4 form-group">
                                                    <label for="connected_or">Are you connected with the organization in administration capacity?</label>
                                                    <select name="is_connected" id="is_connected" class="form-control">
                                                        <option value="" disabled selected>--select--</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4 form-group">
                                                    <label for="visit_induction">Did you visit the organisation yourself?</label>
                                                    {{-- <input type="text" name="is_visited" id="is_visited" class="form-control" placeholder="Enter visit the organisation"  > --}}
                                                    <select name="is_visited" id="is_visited" class="form-control">
                                                        <option value="" disabled selected>--select--</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                </div>
{{-- 
                                                <div class="col-md-4 form-group">
                                                    <label for="sector_id">Sectors(Organization Work In)</label><br>
                                                    <select name="sector_id" id="sector_ids" class="form-control" multiple="multiple">
                                                        <h1>select all</h1>
                                                        <option value="">-- Select Sector--</option>
                                                        @foreach($sectors as $sector)
                                                            <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div> --}}

                                                <div class="col-md-4 form-group">
                                                    <label for="sector_id">Sectors (Organization Work In)</label><br>
                                                    <select name="sector_id" id="sector_ids" class="form-control" multiple="multiple">
                                                        @foreach($sectors as $sector)
                                                            <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>


                                                

                                                {{-- <div class="col-md-4 form-group">
                                                    <label for="sub_sectors_induction">Sub Sectors</label>
                                                    <input type="text" name="sub_sectors_induction" class="form-control" id="sub_sectors_induction">
                                                </div> --}}

                                                {{-- <div class="col-md-4 form-group">
                                                    <label for="sub_sectors_induction">Sub-Sectors</label><br>
                                                    <select name="sub_sector_id" id="sub_sectors_inductionone"  class="form-control">

                                                    </select>
                                                </div> --}}

                                                <div class="col-md-4 form-group">
                                                    <label for="short_description">Your opinion about the SO in short</label>
                                                    <textarea name="opinion" class="form-control" id="opinion" placeholder="Your opinion in short..." rows="2"></textarea>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="comfortable_call">Are you comfortable for a call?</label>
                                                    <select name="comfortable_call" id="comfortable_call" class="form-control">
                                                        <option value="" disabled selected>--select--</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="time_date">Select Date & Time</label>
                                                    <input type="datetime-local" id="time_date" name="time_date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="independent-organization-fields" style="display: none;" class="col-12">
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="name">Name<span class="text-danger">*</span> </label>
                                            <input type="text" name="name" class="form-control" id="name" Placeholder="Enter Name">
                                            <span class="text-danger error-text org_name_err"></span>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="off_address">Address<span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="off_address" id="off_address" placeholder="Enter Address">
                                            <span class="text-danger error-text off_address_err"></span>
                                        </div>
                                        {{-- <div class="col-md-4 form-group">
                                            <label for="off_pincode">Official Pincode</label>
                                            <input type="text" class="form-control" name="off_pincode" id="off_pincode" placeholder="Enter Official Pincode">
                                        </div> --}}

                                        {{-- <div class="col-md-4 form-group">
                                            <label for="work_place">Place of work</label>
                                            <input type="text" name="work_place" class="form-control" id="work_place" placeholder="Enter Place of Work">
                                        </div> --}}
                                        <div class="col-md-4 form-group">
                                            <label for="work_place">Geographical Area of Impact</label>
                                            {{-- <input type="text" name="work_place" class="form-control" id="work_place" placeholder="Enter Place of Work"> --}}
                                            <textarea name="work_place" class="form-control" id="work_place" placeholder="eg.(thane corporation,bhivandi corporation)..." rows="2"></textarea>
                                        </div>

                                        {{-- <div class="col-md-4 form-group">
                                            <label for="sector_id">Sectors</label><br>
                                            <select name="sector_id" id="sector_idss" class="form-control">
                                                <option value="">-- Select Sector --</option>
                                                @foreach($sectors as $sector)
                                                    <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                                                @endforeach
                                            </select>
                                        </div> --}}

                                        {{-- <div class="col-md-4 form-group">
                                            <label for="sub_sectors_induction">Sub Sectors</label>
                                            <input type="text" name="sub_sectors_induction" class="form-control" id="sub_sectors_induction">
                                        </div> --}}

                                        {{-- <div class="col-md-4 form-group">
                                            <label for="sub_sectors_induction">Sub-Sectors</label><br>
                                            <select name="sub_sector_id" id="sub_sectors_inductiontwo"  class="form-control">

                                            </select>
                                        </div> --}}

                                        <div class="col-md-4 form-group">
                                            <label for="area_interest">Areas of Interest</label>
                                            <div class="custom-dropdown" id="areaInterestDropdownthree">
                                                <div class="dropdown-toggle-box" onclick="toggleDropdownone()">Select Areas</div>
                                        
                                                <div class="dropdown-options" id="dropdownOptionsthree">
                                                    <div class="select-all-container">
                                                        <label><input type="checkbox" id="selectAllthree"> Select All</label>
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
                                                                <button type="button" class="toggle-subsectorseight" data-sector-id="{{ $sector->id }}">+</button>
                                                            </label>
                                        
                                                            <div class="subsectorseight d-none" data-sector-id="{{ $sector->id }}">
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

                                        <div class="col-md-4 form-group">
                                            <label for="org_contact_name">Name Contact person</label>
                                            <input type="text" name="org_contact_name" class="form-control" id="org_contact_name" placeholder="Enter Name Contact Person" pattern="^[A-Za-z\s]+$" >
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="org_contact_no">Mobile number of contact person </label>
                                            <input type="text" name="org_contact_no" id="org_contact_no" class="form-control" placeholder="Enter Mobile Number Of Contact Person">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="email">Email ID</label>
                                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email ID">
                                        </div>
                                        {{-- <div class="col-md-4 form-group">
                                            <label for="short_description">Your opinion about the SO in short</label>
                                            <textarea name="opinion" class="form-control" id="opinion" placeholder="Your opinion in short..." rows="2"></textarea>
                                        </div> --}}
                                        <div class="col-md-4 form-group">
                                            <label for="comfortable_call">Are you comfortable for a call?</label>
                                            <select name="comfortable_call" id="comfortable_call" class="form-control">
                                                <option value="" disabled selected>--select--</option>
                                                <option value="1">YES</option>
                                                <option value="0">NO</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="time_date">Select Date & Time</label>
                                            <input type="datetime-local" id="time_date" name="time_date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn" id="addSubmitRecommandation"
                                    style="background-color: #ffc107; border-color: #ffc107; color: black;"
                                    onmouseover="this.style.backgroundColor='#397468'; this.style.borderColor='#397468'; this.style.color='white';"
                                    onmouseout="this.style.backgroundColor='#ffc107'; this.style.borderColor='#ffc107'; this.style.color='black';">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         </div>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 JS -->
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <!-- SweetAlert -->
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#sector_id').select2({
                placeholder: "Select sectors",
                allowClear: true
            });
        });

        $(document).ready(function() {
            $('#sub_sectors_induction').select2({
                placeholder: "Select Sub-sectors",
                allowClear: true
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#sector_ids').select2({
                placeholder: "Select sectors",
                allowClear: true
            });
        });
    </script>
    {{-- <script>
        $(document).ready(function() {
            $('#sector_idss').select2({
                placeholder: "Select sectors",
                allowClear: true
            });
        });
    </script> --}}
    {{-- Add --}}
    <script>
        $("#addFormRec").submit(function(e) {
            e.preventDefault();
            $("#addSubmitRecommandation").prop('disabled', true);
    
            var formdata = new FormData();
    
            // Add CSRF token
            var csrfToken = $("input[name='_token']").val();
            formdata.append('_token', csrfToken);
    
            // Add normal visible inputs
            $("#addFormRec :input").each(function() {
                var type = $(this).attr("type");
                var name = $(this).attr("name");
    
                // Skip checkbox/radio (we handle them separately)
                if (type !== "checkbox" && type !== "radio" && name && $(this).is(":visible")) {
                    formdata.append(name, $(this).val());
                }
            });
    
            // ✅ Add all checked checkboxes (including arrays like areas_of_interest_sectors[])
            $("#addFormRec input[type='checkbox']:checked").each(function() {
                var name = $(this).attr("name");
                var value = $(this).val();
                if (name) {
                    formdata.append(name, value);
                }
            });
    
            $.ajax({
                url: '{{ route('recommend.store') }}',
                type: 'POST',
                data: formdata,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#addSubmitRecommandation").prop('disabled', false);
                    swal({
                        title: "Recommendation Added Successfully!",
                        content: $("<div>").append(
                            $("<p>").text("Your SEVA ID is:").css({
                                "font-weight": "bold",
                                "margin-bottom": "5px",
                                "font-size": "16px"
                            }),
                            $("<h3>").text(data.seva_id).css({
                                "color": "#ffc107",
                                "font-size": "22px",
                                "font-weight": "bold"
                            })
                        )[0],
                        icon: "success",
                        buttons: true
                    }).then(() => {
                        window.location.href = '{{ route('welcomeone') }}';
                    });
                },
                statusCode: {
                    422: function(responseObject) {
                        $("#addSubmitRecommandation").prop('disabled', false);
                        resetErrors();
                        printErrMsg(responseObject.responseJSON.errors);
                    },
                    500: function() {
                        $("#addSubmitRecommandation").prop('disabled', false);
                        Swal.fire({
                            title: "Error!",
                            text: "Something went wrong, please try again",
                            icon: "error",
                            customClass: { popup: 'swal-wide' }
                        });
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
                    $('[name="' + key + '"]').addClass('is-invalid'); 
                });
            }
        });
    
        // Optional: Remove error class and text on change or input
        $('#addFormRec').on('input change', '[name]', function () {
            $(this).removeClass('is-invalid');
            let name = $(this).attr('name');
            // $('.' + name + '_err').text('');
            
        });
    </script>
    

    <!--social organization script-->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let nameSelect = document.getElementById("name");
            let extraFields = document.getElementById("social-organization-fields");
            extraFields.style.display = "none";
            nameSelect.addEventListener("change", function() {
                if (this.value === "Social Organization") {
                    extraFields.style.display = "block";
                } else {
                    extraFields.style.display = "none";
                }
            });
        });
    </script>
        <!--end social organization-->

        <!--Individual volunteer (Sevameet)-->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                let nameSelectInd = document.getElementById("name");
                let extraFieldsInd = document.getElementById("individual-organization-fields");
                extraFieldsInd.style.display = "none";
                nameSelectInd.addEventListener("change", function() {
                    if (this.value === "Individual") {
                        extraFieldsInd.style.display = "block";
                    } else {
                        extraFieldsInd.style.display = "none";
                    }
                });
            });
        </script>
        <!--End Individual volunteer (Sevameet)-->

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                let nameSelect = document.getElementById("name");
               // let inductionCauseDiv = document.getElementById("induction_cause_div");
                // let inductionCauseSelect = document.getElementById("induction_cause");
                // let specifyFieldsDiv = document.getElementById("specify-fields");
                // let areaCauseSelect = document.getElementById("area_cause");
                let socialOrgDiv = document.getElementById("social_org_div");
                let socialOrgSelect = document.getElementById("social_org");
                let socialOrgFieldsDiv = document.getElementById("social_org_fields");

                // Initially hide all dependent divs
                // inductionCauseDiv.style.display = "none";
                // specifyFieldsDiv.style.display = "none";
                socialOrgDiv.style.display = "none";
                socialOrgFieldsDiv.style.display = "none";

                // Show/hide induction cause div based on name selection
                nameSelect.addEventListener("change", function () {
                    if (this.value === "Individual") {
                        socialOrgDiv.style.display = "block";
                    } else {
                        socialOrgDiv.style.display = "none";
                        // specifyFieldsDiv.style.display = "none";

                        socialOrgFieldsDiv.style.display = "none";
                    }
                });

                // Show/hide specify fields div based on induction cause selection
                // inductionCauseSelect.addEventListener("change", function () {
                //     if (this.value === "1") {
                //         // specifyFieldsDiv.style.display = "block";
                //     } else {
                //         // specifyFieldsDiv.style.display = "none";
                //         socialOrgDiv.style.display = "none";
                //         socialOrgFieldsDiv.style.display = "none";
                //     }
                // });

                // Show/hide social organization div based on area cause selection
                // areaCauseSelect.addEventListener("change", function () {
                //     if (this.value === "1") {
                //         socialOrgDiv.style.display = "block";
                //     } else {
                //         socialOrgDiv.style.display = "none";
                //         socialOrgFieldsDiv.style.display = "none";
                //     }
                // });

                // Show/hide social organization fields based on selection
                socialOrgSelect.addEventListener("change", function () {
                    if (this.value === "1") {
                        socialOrgFieldsDiv.style.display = "block";
                    } else {
                        socialOrgFieldsDiv.style.display = "none";
                    }
                });
            });
        </script>


<!--Independent organization/Company (Sevadaan)-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let nameSelectorg = document.getElementById("name");
        let extraFieldsorg = document.getElementById("independent-organization-fields");
        extraFieldsorg.style.display = "none";
        nameSelectorg.addEventListener("change", function() {
            if (this.value === "Independent organization") {
                extraFieldsorg.style.display = "block";
            } else {
                extraFieldsorg.style.display = "none";
            }
        });
    });
</script>
<!--end Independent organization/Company (Sevadaan)-->

<!--ngo hide and show -->
<script>
    $(document).ready(function () {

        $("#ngo_details").closest('.form-group').hide();


        $("#organization_type_id").change(function () {
            var selectedType = $("#organization_type_id option:selected").text().toLowerCase();

            if (selectedType === "ngo") {
                $("#ngo_details").closest('.form-group').show();
            } else {
                $("#ngo_details").closest('.form-group').hide();
            }
        });
    });
</script>
{{-- <script>
         $(document).ready(function(){
         $('#sector_id').on('change', function(){
            var sectorIds = $(this).val();
            console.log("Selected Sectors:", sectorIds);

            $('#sub_sectors_induction').empty();
            if(sectorIds.length > 0){
                $.ajax({
                    url: '/get-subsectors',
                    type: 'GET',
                    data: { sector_ids: sectorIds },
                    dataType: 'json',
                    success: function(response){
                        console.log("Response from Server:", response);

                        if(response.success) {
                            $('#sub_sectors_induction').html(response.subSectorsHtml);
                        } else {
                            console.warn("No sub-sectors found!");
                        }
                    },
                    error: function(xhr, status, error){
                        console.error("AJAX Error:", xhr.responseText);
                    }
                });
            }
        });
    });
</script> --}}
{{-- <script>
    $(document).ready(function() {
        $('#sector_id').change(function() {
           // alert('hello');
            var sectorIds = $(this).val(); 
            $('#sub_sectors_induction').html('<option value="">Loading...</option>');

            if (sectorIds.length > 0) {
                $.ajax({
                    url: "{{ route('getSubSectors') }}",
                    type: "GET",
                    data: { sector_id: sectorIds }, 
                    success: function(response) {
                        $.each(response, function(key, value) {
                            $('#sub_sectors_induction').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                        });
                    }
                });
            } else {
                $('#sub_sectors_induction').html('<option value="">-- Select Sub-Sector --</option>');
            }
        });
    });
</script> --}}
<script>
    $(document).ready(function () {
        $('#sector_id').change(function () {
            var sectorIds = $(this).val();
            $('#sub_sectors_induction').html(''); // Clear all options first

            if (sectorIds && sectorIds.length > 0) {
                $.ajax({
                    url: "{{ route('getSubSectors') }}",
                    type: "GET",
                    data: { sector_id: sectorIds },
                    success: function (response) {
                        // Populate only sub-sectors related to selected sectors
                        $.each(response, function (key, value) {
                            $('#sub_sectors_induction').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            }
        });
    });
</script>


<script>
    $(document).ready(function() {
    $('#sector_ids').change(function() {
        var sectorId = $(this).val();
        $('#sub_sectors_inductionone').html('<option value="">Loading...</option>');

        if (sectorId) {
            $.ajax({
                url: "{{ route('getSubSectorsone') }}",
                type: "GET",
                data: { sector_id: sectorId },
                success: function(response) {
                    $('#sub_sectors_inductionone').html('<option value="">-- Select Sub-Sector --</option>');
                    $.each(response, function(key, value) {
                        $('#sub_sectors_inductionone').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                    });
                }
            });
        } else {
            $('#sub_sectors_inductionone').html('<option value="">-- Select Sub-Sector --</option>');
        }
    });
});
</script>
<script>
    $(document).ready(function() {
    $('#sector_idss').change(function() {
        var sectorId = $(this).val();
        $('#sub_sectors_inductiontwo').html('<option value="">Loading...</option>');

        if (sectorId) {
            $.ajax({
                url: "{{ route('getSubSectorstwo') }}",
                type: "GET",
                data: { sector_id: sectorId },
                success: function(response) {
                    $('#sub_sectors_inductiontwo').html('<option value="">-- Select Sub-Sector --</option>');
                    $.each(response, function(key, value) {
                        $('#sub_sectors_inductiontwo').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                    });
                }
            });
        } else {
            $('#sub_sectors_inductiontwo').html('<option value="">-- Select Sub-Sector --</option>');
        }
    });
});
</script>

<!--script for area of interest-->
<script>
    $(document).ready(function() {
        $('#area_interest').select2({
            width: '100%',
            closeOnSelect: false,
            templateResult: function(option) {
                if (!option.id) return option.text; // optgroup ke liye default

                let isSector = $(option.element).data('type') === 'sector';

                let $checkbox = $('<div class="form-check">' +
                    '<input type="checkbox" class="form-check-input select2-checkbox" value="' + option.id + '" data-type="' + $(option.element).data('type') + '" data-sector-id="' + $(option.element).data('sector-id') + '">' +
                    '<label class="form-check-label">' + option.text + '</label></div>');

                return $checkbox;
            },
            templateSelection: function(option) {
                return option.text;
            }
        });

        // Checkbox click handle
        $(document).on('click', '.select2-checkbox', function(e) {
            e.stopPropagation(); // select2 dropdown close hone se roke

            let value = $(this).val();
            let type = $(this).data('type');
            let sectorId = $(this).data('sector-id');
            let selectedValues = $('#area_interest').val() || [];

            if ($(this).prop('checked')) {
                if (!selectedValues.includes(value)) selectedValues.push(value);

                if (type === 'sector') {
                    // Sector selected -> Select all its sub-sectors
                    $('.select2-checkbox[data-sector-id="' + sectorId + '"][data-type="subSector"]').prop('checked', true).each(function() {
                        let subValue = $(this).val();
                        if (!selectedValues.includes(subValue)) selectedValues.push(subValue);
                    });
                }
            } else {
                selectedValues = selectedValues.filter(v => v !== value);

                if (type === 'sector') {
                    // Sector unselected -> Unselect all its sub-sectors
                    $('.select2-checkbox[data-sector-id="' + sectorId + '"][data-type="subSector"]').prop('checked', false).each(function() {
                        selectedValues = selectedValues.filter(v => v !== $(this).val());
                    });
                }
            }

            $('#area_interest').val(selectedValues).trigger('change');
            updateHiddenFields();
        });

        function updateHiddenFields() {
            let selectedSectors = [];
            let selectedSubSectors = [];

            $('.select2-checkbox:checked').each(function() {
                if ($(this).data('type') === 'sector') {
                    selectedSectors.push($(this).data('sector-id'));
                } else {
                    selectedSubSectors.push($(this).val());
                }
            });

            $('#selected_sectors').val(selectedSectors.join(','));
            $('#selected_sub_sectors').val(selectedSubSectors.join(','));
        }
    });
</script>

<!--sector subsector script area of interst-->
<script>
    function toggleDropdown() {
        $('#dropdownOptions').toggleClass('show');
    }

    $(document).on('click', function (e) {
        if (!$(e.target).closest('#areaInterestDropdown').length) {
            $('#dropdownOptions').removeClass('show');
        }
    });

    $(document).ready(function () {
        // Sector checkbox controls subsectors
        $('.sector-checkbox').on('change', function () {
            let sectorId = $(this).data('sector-id');
            $('.subsector-checkbox[data-sector-id="' + sectorId + '"]').prop('checked', $(this).prop('checked'));
            updateSelectAllStatus();
        });

        // Subsector sync to sector
        $('.subsector-checkbox').on('change', function () {
            let sectorId = $(this).data('sector-id');
            let allSubs = $('.subsector-checkbox[data-sector-id="' + sectorId + '"]');
            let allChecked = allSubs.length === allSubs.filter(':checked').length;
            $('.sector-checkbox[data-sector-id="' + sectorId + '"]').prop('checked', allChecked);
            updateSelectAllStatus();
        });

        // Toggle subsectors
        $('.toggle-subsectors').on('click', function () {
           
            let sectorId = $(this).data('sector-id');
            let subSectorDiv = $('.subsectors[data-sector-id="' + sectorId + '"]');
            let isHidden = subSectorDiv.hasClass('d-none');

            // Hide all other subsectors
            $('.subsectors').addClass('d-none');
            $('.toggle-subsectors').text('+');

            if (isHidden) {
                subSectorDiv.removeClass('d-none');
                $(this).text('−');
            }
        });

        // Search filter
        $('#sectorSearch').on('input', function () {
            let query = $(this).val().toLowerCase();
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
        $('#selectAll').on('change', function () {
            let checked = $(this).prop('checked');
            $('.sector-checkbox, .subsector-checkbox').prop('checked', checked);
        });

        // Update "Select All" checkbox if everything is manually selected
        function updateSelectAllStatus() {
            let all = $('.sector-checkbox, .subsector-checkbox');
            let allChecked = all.length === all.filter(':checked').length;
            $('#selectAll').prop('checked', allChecked);
        }
    });
</script>

<script>
    function toggleDropdownone() {
        $('#dropdownOptionsthree').toggleClass('show');
    }

    $(document).on('click', function (e) {
        if (!$(e.target).closest('#areaInterestDropdownthree').length) {
            $('#dropdownOptionsthree').removeClass('show');
        }
    });

    $(document).ready(function () {

        // Sector checkbox controls subsectors
        $('.sector-checkbox').on('change', function () {
            const sectorId = $(this).data('sector-id');
            $('.subsector-checkbox[data-sector-id="' + sectorId + '"]').prop('checked', this.checked);
            updateSelectAllStatus();
        });

        // Subsector sync to sector
        $('.subsector-checkbox').on('change', function () {
            const sectorId = $(this).data('sector-id');
            const allSubs = $('.subsector-checkbox[data-sector-id="' + sectorId + '"]');
            const allChecked = allSubs.length === allSubs.filter(':checked').length;
            $('.sector-checkbox[data-sector-id="' + sectorId + '"]').prop('checked', allChecked);
            updateSelectAllStatus();
        });

        // Toggle subsectors
        $('.toggle-subsectorseight').on('click', function () {
            const sectorId = $(this).data('sector-id');
            const subSectorDiv = $('.subsectorseight[data-sector-id="' + sectorId + '"]');
            const isHidden = subSectorDiv.hasClass('d-none');

            $('.subsectorseight').addClass('d-none');
            $('.toggle-subsectorseight').text('+');

            if (isHidden) {
                subSectorDiv.removeClass('d-none');
                $(this).text('−');
            }
        });

        // Search filter
        $('#sectorSearch').on('input', function () {
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
        $('#selectAllthree').on('change', function () {
            const checked = this.checked;
            $('.sector-checkbox, .subsector-checkbox').prop('checked', checked);
        });

        function updateSelectAllStatus() {
            const all = $('.sector-checkbox, .subsector-checkbox');
            const allChecked = all.length === all.filter(':checked').length;
            $('#selectAllthree').prop('checked', allChecked);
        }
    });
</script>




 <!--start select all section -->
<script>
    $.fn.select2.amd.define('select2/selectAllAdapter', [
        'select2/utils',
        'select2/dropdown',
        'select2/dropdown/attachBody'
    ], function (Utils, Dropdown, AttachBody) {
        function SelectAll() {}
    
        SelectAll.prototype.render = function (decorated) {
            var self = this,
                $rendered = decorated.call(this),
                $selectAll = $(
                    '<button class="btn btn-sm btn-success" type="button" style="margin: 4px;"><i class="fa fa-check-square-o"></i> Select All</button>'
                ),
                $unselectAll = $(
                    '<button class="btn btn-sm btn-danger" type="button" style="margin: 4px;"><i class="fa fa-square-o"></i> Unselect All</button>'
                ),
                $btnContainer = $('<div class="select2-buttons" style="padding: 4px; border-bottom: 1px solid #ddd;"></div>')
                    .append($selectAll)
                    .append($unselectAll);
    
            if (!this.$element.prop("multiple")) {
                return $rendered;
            }
    
            $rendered.find('.select2-dropdown').prepend($btnContainer);
    
            $selectAll.on('click', function () {
                self.$element.find('option').prop('selected', true).trigger('change');
            });
    
            $unselectAll.on('click', function () {
                self.$element.find('option').prop('selected', false).trigger('change');
            });
    
            return $rendered;
        };
    
        return Utils.Decorate(
            Utils.Decorate(Dropdown, AttachBody),
            SelectAll
        );
    });
    </script>

  <script>
    $(document).ready(function() {
        $('#sector_ids').select2({
            placeholder: 'Select Sector(s)',
            dropdownAdapter: $.fn.select2.amd.require('select2/selectAllAdapter')
        });
    });
    </script>
    <!--end select all section -->


   
    



     <!--start select all section for social organization -->
<script>
    $.fn.select2.amd.define('select2/selectAllAdapter', [
        'select2/utils',
        'select2/dropdown',
        'select2/dropdown/attachBody'
    ], function (Utils, Dropdown, AttachBody) {
        function SelectAll() {}
    
        SelectAll.prototype.render = function (decorated) {
            var self = this,
                $rendered = decorated.call(this),
                $selectAll = $(
                    '<button class="btn btn-sm btn-success" type="button" style="margin: 4px;"><i class="fa fa-check-square-o"></i> Select All</button>'
                ),
                $unselectAll = $(
                    '<button class="btn btn-sm btn-danger" type="button" style="margin: 4px;"><i class="fa fa-square-o"></i> Unselect All</button>'
                ),
                $btnContainer = $('<div class="select2-buttons" style="padding: 4px; border-bottom: 1px solid #ddd;"></div>')
                    .append($selectAll)
                    .append($unselectAll);
    
            if (!this.$element.prop("multiple")) {
                return $rendered;
            }
    
            $rendered.find('.select2-dropdown').prepend($btnContainer);
    
            $selectAll.on('click', function () {
                self.$element.find('option').prop('selected', true).trigger('change');
            });
    
            $unselectAll.on('click', function () {
                self.$element.find('option').prop('selected', false).trigger('change');
            });
    
            return $rendered;
        };
    
        return Utils.Decorate(
            Utils.Decorate(Dropdown, AttachBody),
            SelectAll
        );
    });
    </script>

  <script>
    $(document).ready(function() {
        $('#sector_id').select2({
            placeholder: 'Select Sector(s)',
            dropdownAdapter: $.fn.select2.amd.require('select2/selectAllAdapter')
        });
    });
    </script>

<script>
    $(document).ready(function() {
        $('#sub_sectors_induction').select2({
            placeholder: 'Select Sector(s)',
            dropdownAdapter: $.fn.select2.amd.require('select2/selectAllAdapter')
        });
    });
    </script>
    
    





    
