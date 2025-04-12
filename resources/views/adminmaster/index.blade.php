<x-admin.admin-layout>
    <x-slot name="title">  Users</x-slot>

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">


                <!-- Add Form Start -->
                <div class="row" id="addContainer" style="display:none;">
                    <div class="col-sm-12">
                        <div class="card">
                            <form class="theme-form" name="addForm" id="addForm">
                                @csrf
                                <div class="card-header pb-0">
                                    <h4>Create User</h4>
                                </div>
                                <div class="card-body pt-0">


                                    <div class="mb-3 row">
                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="emp_code">User Name <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="user_name" name="user_name" type="text" placeholder="Enter User Name">
                                            <span class="text-danger error-text emp_code_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="emp_code">First Name <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="first_name" name="first_name" type="text" placeholder="Enter First Name">
                                            <span class="text-danger error-text emp_code_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="emp_code">Middle Name <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="middle_name" name="middle_name" type="text" placeholder="Enter Middle Name">
                                            <span class="text-danger error-text emp_code_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="emp_code">Last Name <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="last_name" name="last_name" type="text" placeholder="Enter Middle Name">
                                            <span class="text-danger error-text emp_code_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="email">User Email <span class="text-danger">*</span></label>
                                            <input class="form-control" id="email" name="email" type="email" placeholder="Enter User Email">
                                            <span class="text-danger error-text email_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="mobile">User Mobile <span class="text-danger">*</span></label>
                                            <input class="form-control" id="mobile" name="mobile" type="number" min="0" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Enter User Mobile">
                                            <span class="text-danger error-text mobile_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="dob">Date of Birth <span class="text-danger">*</span></label>
                                            <input class="form-control" id="dob" name="dob" type="date" onclick="this.showPicker()" placeholder="Enter User Mobile">
                                            <span class="text-danger error-text dob_err"></span>
                                        </div>
                                       

                                        
                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="role">Select User Type / Role <span class="text-danger">*</span></label>
                                            <select class="js-example-basic-single col-sm-12" id="role" name="role">
                                                <option value="">--Select Role--</option>
                                                <option value="Project Manager">Project Manager</option>
                                                <option value="Area Coordinator">Area Coordinator</option>
                                                <option value="Field Volunteer">Field Volunteer</option>
                                                <option value="Staff">Staff</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Other Users">Other Users</option>
                                            </select>
                                            <span class="text-danger error-text role_err"></span>
                                        </div>
                                        


                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="password">Password <span class="text-danger">*</span></label>
                                            <input class="form-control" id="password" name="password" type="password" placeholder="********">
                                            <span class="text-danger error-text password_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
                                            <input class="form-control" id="confirm_password" name="confirm_password" type="password" placeholder="********">
                                            <span class="text-danger error-text confirm_password_err"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id="addSubmit">Submit</button>
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
                                            <label class="col-form-label" for="emp_code">User Name <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="user_name" name="user_name" type="text" placeholder="Enter User Name">
                                            <span class="text-danger error-text emp_code_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="emp_code">First Name <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="first_name" name="first_name" type="text" placeholder="Enter First Name">
                                            <span class="text-danger error-text emp_code_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="emp_code">Middle Name <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="middle_name" name="middle_name" type="text" placeholder="Enter Middle Name">
                                            <span class="text-danger error-text emp_code_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="emp_code">Last Name <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="last_name" name="last_name" type="text" placeholder="Enter Middle Name">
                                            <span class="text-danger error-text emp_code_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="email">User Email <span class="text-danger">*</span></label>
                                            <input class="form-control" id="email" name="email" type="email" placeholder="Enter User Email">
                                            <span class="text-danger error-text email_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="mobile">User Mobile <span class="text-danger">*</span></label>
                                            <input class="form-control" id="mobile" name="mobile" type="number" min="0" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Enter User Mobile">
                                            <span class="text-danger error-text mobile_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="dob">Date of Birth <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="dob" name="dob"  onclick="this.showPicker()" placeholder="Enter User Mobile">
                                            
                                            <span class="text-danger error-text dob_err"></span>
                                        </div>
                                       

                                        
                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="role">Select User Type / Role <span class="text-danger">*</span></label>
                                            <select class="js-example-basic-single col-sm-12" id="role" name="role">
                                                <option value="">--Select Role--</option>
                                                <option value="Project Manager">Project Manager</option>
                                                <option value="Area Coordinator">Area Coordinator</option>
                                                <option value="Field Volunteer">Field Volunteer</option>
                                                <option value="Staff">Staff</option>
                                                <option value="Other Users">Other Users</option>
                                            </select>
                                            <span class="text-danger error-text role_err"></span>
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
                        <h3>Users</h3>
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
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($userlist as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->mobile }}</td>
                                            <td>{{ $user->role }}</td>
                                           
                                           
                                            <td>
                                                <button class="edit-element btn btn-primary px-2 py-1" title="Edit User" data-id="{{ $user->id }}">
                                                    <i data-feather="edit"></i>
                                                </button>
                                                <button class="btn btn-primary change-password px-2 py-1" title="Change Password" data-id="{{ $user->id }}"><i data-feather="lock"></i></button>
                                                {{-- <button class="btn btn-warning assign-role px-2 py-1" title="Assign Role" data-id="{{ $user->id }}"><i data-feather="user-check"></i></button> --}}
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

     {{-- Change Password Form --}}
     <div class="modal fade" id="change-password-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="" id="changePasswordForm">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Change Password</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="user_id" name="user_id" value="">

                        <div class="col-8 mx-auto my-2">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control" type="password" id="new_password" name="new_password">
                                    {{-- <div class="show-hide"><span class="show"></span></div> --}}
                                </div>
                                <span class="text-danger error-text password_err"></span>
                            </div>
                        </div>

                        <div class="col-8 mx-auto my-2">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control" type="password" id="confirmed_password" name="confirmed_password">
                                    {{-- <div class="show-hide"><span class="show"></span></div> --}}
                                </div>
                                <span class="text-danger error-text confirmed_password_err"></span>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" id="changePasswordSubmit" type="submit">Change</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Open Change Password Modal-->
<script>
    $("#datatable-tabletools").on("click", ".change-password", function(e) {
        e.preventDefault();
        var user_id = $(this).attr("data-id");
        $('#user_id').val(user_id);
        $('#change-password-modal').modal('show');
    });
</script>


    {{-- Add --}}
    <script>
    $("#addForm").submit(function(e) {
        e.preventDefault();
        $("#addSubmit").prop('disabled', true);

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route('users.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmit").prop('disabled', false);
                if (!data.error2)
                    swal("Successful!", data.success, "success")
                    .then((action) => {
                        window.location.href = '{{ route('users.index') }}';
                    });
                else
                    swal("Error!", data.error2, "error");
            },
            statusCode: {
                422: function(responseObject, textStatus, jqXHR) {
                    $("#addSubmit").prop('disabled', false);
                    resetErrors();
                    printErrMsg(responseObject.responseJSON.errors);
                },
                500: function(responseObject, textStatus, errorThrown) {
                    $("#addSubmit").prop('disabled', false);
                    swal("Error occured!", "Something went wrong please try again", "error");
                }
            }
        });

        function resetErrors() {
            var form = document.getElementById('addForm');
            var data = new FormData(form);
            for (var [key, value] of data) {
                $('.' + key + '_err').text('');
                $('#' + key).removeClass('is-invalid');
                $('#' + key).addClass('is-valid');
            }
        }

        function printErrMsg(msg) {
            $.each(msg, function(key, value) {
                $('.' + key + '_err').text(value);
                $('#' + key).addClass('is-invalid');
                $('#' + key).removeClass('is-valid');
            });
        }

    });
</script>


<!-- edit -->
<script>
$(document).ready(function() {
    $("#datatable-tabletools").on("click", ".edit-element", function(e) {
        e.preventDefault();
        var user_id = $(this).attr("data-id");
        var url = "{{ route('user.edit', ':user_id') }}".replace(':user_id', user_id);

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                '_token': "{{ csrf_token() }}"
            },
            success: function(data) {
                if (data && data.user) {
                    $("#addContainer").slideUp();
                    $("#btnCancel").show();
                    $("#addToTable").hide();
                    $("#editContainer").slideDown();

                    $("#editForm input[name='edit_model_id']").val(data.user.id);
                    $("#editForm input[name='user_name']").val(data.user.user_name);
                    $("#editForm input[name='first_name']").val(data.user.first_name);
                    $("#editForm input[name='middle_name']").val(data.user.middle_name);
                    $("#editForm input[name='last_name']").val(data.user.last_name);
                    $("#editForm input[name='email']").val(data.user.email);
                    $("#editForm input[name='mobile']").val(data.user.mobile);

                  
                    var dob = data.user.dob ? data.user.dob.split('T')[0] : ''; 
                    $("#editForm input[name='dob']").val(dob);

                    $("#editForm select[name='role']").val(data.user.role).trigger('change');

                    $("#editForm input[name='password']").val('');
                    $("#editForm input[name='confirm_password']").val('');

                  
                    $("html, body").animate({ 
                        scrollTop: $("#editContainer").offset().top 
                    }, 'slow');

                } else {
                    swal("Error!", "User data is missing or malformed", "error");
                }
            },
            error: function() {
                swal("Error!", "Something went wrong", "error");
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
            var url = "{{ route('users.update', ':model_id') }}";
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
                            window.location.href = '{{ route('users.index') }}';
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



<!-- Update User Password -->
<script>
    $(document).ready(function() {
    $(".change-password").click(function() {
        var userId = $(this).data("id");
        $("#user_id").val(userId);
        $("#change-password-modal").modal("show");
    });

    $("#changePasswordForm").submit(function(e) {
        e.preventDefault();
        $("#changePasswordSubmit").prop("disabled", true);

        var formData = new FormData(this);
        formData.append("_method", "PUT");
        var userId = $("#user_id").val();
        var url = "{{ route('users.change-password', ':id') }}".replace(":id", userId);

        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $("#changePasswordSubmit").prop("disabled", false);
                swal("Success!", response.success, "success").then(() => {
                    $("#change-password-modal").modal("hide");
                    $("#changePasswordForm")[0].reset(); // Reset form fields
                });
            },
            error: function(xhr) {
                $("#changePasswordSubmit").prop("disabled", false);
                if (xhr.status === 422) {
                    resetErrors();
                    printErrMsg(xhr.responseJSON.errors);
                } else {
                    swal("Error!", "Something went wrong, please try again.", "error");
                }
            }
        });
    });

    function resetErrors() {
        $("#changePasswordForm").find(".is-invalid").removeClass("is-invalid");
        $(".error-text").text("");
    }

    function printErrMsg(errors) {
        $.each(errors, function(key, value) {
            $("#" + key).addClass("is-invalid");
            $("." + key + "_err").text(value);
        });
    }
});

</script>





</x-admin.admin-layout>



