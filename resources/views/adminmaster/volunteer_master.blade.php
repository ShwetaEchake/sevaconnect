<x-admin.admin-layout>
    <x-slot name="title">Volunteers Master</x-slot>

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">


                <!-- Add Form Start -->
                <div class="row" id="addContainer" style="display:none;">
                    <div class="col-sm-12">
                        <div class="card">
                            <form class="theme-form" name="addFormVolunteer" id="addFormVolunteer" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header pb-0">
                                    <h4>Create Volunteers</h4>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="mb-3 row">
                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="name">Volunteer Name <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter Volunteer Name">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>



                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="details">Volunteer Details <span class="text-danger">*</span></label>
                                            <input class="form-control" id="details" name="details" type="text" placeholder="Enter Volunteer Details">
                                            <span class="text-danger error-text volunteer_details_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="image">Volunteer Image <span class="text-danger">*</span></label>
                                            <input class="form-control" id="image" name="image" type="file" accept="image/png, image/jpeg, image/jpg">
                                            <span class="text-danger error-text volunteer_image_err"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id="addSubmitVolunteers">Submit</button>
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
                                    <h4 class="card-title">Edit Volunteers</h4>
                                </header>

                                <div class="card-body py-2">

                                    <input type="hidden" id="edit_model_id" name="edit_model_id" value="">

                                    <div class="mb-3 row">

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="name">Volunteer Name <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter Volunteer Name">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="details">Volunteer Details <span class="text-danger">*</span></label>
                                            <input class="form-control" id="details" name="details" type="text" placeholder="Enter Volunteer Details">
                                            <span class="text-danger error-text volunteer_details_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="image">Volunteer Image <span class="text-danger">*</span></label>
                                            <input class="form-control" id="image" name="image" type="file" accept="image/png, image/jpeg, image/jpg">
                                            <span class="text-danger error-text volunteer_image_err"></span>

                                            <!-- Image Preview -->
                                            <img id="preview_image" src="" alt="Volunteer Image" width="100" height="100" style="margin-top: 10px; display: none;">
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
                        <h3>Volunteers Details</h3>
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
                                            <th>Volunteer Name</th>
                                            <th>Volunteer Image</th>
                                            <th>Volunteer Details</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($volunteerlist as $volunteer)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $volunteer->name }}</td>
                                                <td>
                                                    <img src="{{ asset('assets/volunteer/' . $volunteer->image) }}"
                                                         alt="Volunteer Image"
                                                         width="50" height="50"
                                                         style="object-fit: cover; border-radius: 5px;">
                                                </td>
                                                <td>{{ $volunteer->details }}</td>
                                                <td>
                                                    <button class="edit-element btn btn-primary px-2 py-1" title="Edit User" data-id="{{ $volunteer->id }}">
                                                        <i data-feather="edit"></i>
                                                    </button>

                                                    <button class="btn btn-dark rem-element px-2 py-1" title="Delete ward" data-id="{{ $volunteer->id }}">
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




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- Add --}}
    <script>
        $("#addFormVolunteer").submit(function(e) {
            e.preventDefault();
            $("#addSubmitVolunteers").prop('disabled', true);

            var formdata = new FormData(this);

            $.ajax({
                url: '{{ route('volunteer.store') }}',
                type: 'POST',
                data: formdata,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#addSubmitVolunteers").prop('disabled', false);
                    swal("Successful!", data.success, "success")
                    .then(() => {
                        window.location.href = '{{ route('volunteer_master') }}';
                    });
                },
                statusCode: {
                    422: function(responseObject) {
                        $("#addSubmitVolunteers").prop('disabled', false);
                        resetErrors();
                        printErrMsg(responseObject.responseJSON.errors);
                    },
                    500: function() {
                        $("#addSubmitVolunteers").prop('disabled', false);
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


<!--edit-->
<script>
$(document).ready(function() {
    $("#datatable-tabletools").on("click", ".edit-element", function(e) {
        e.preventDefault();
        var volunteer_id = $(this).attr("data-id");
        var url = "{{ route('volunteer.edit', ':id') }}".replace(':id', volunteer_id);

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                '_token': "{{ csrf_token() }}"
            },
            success: function(data) {
                if (data && data.volunteer) {
                    $("#addContainer").slideUp();
                    $("#btnCancel").show();
                    $("#addToTable").hide();
                    $("#editContainer").slideDown();

                    // Populate text fields
                    $("#editForm input[name='edit_model_id']").val(data.volunteer.id);
                    $("#editForm input[name='name']").val(data.volunteer.name);
                    $("#editForm input[name='details']").val(data.volunteer.details);

                    // Show image preview
                    if (data.volunteer.volunteer_image) {
                        var imagePath = "{{ asset('assets/volunteer/') }}/" + data.volunteer.image;
                        $("#preview_image").attr("src", imagePath).show();
                    } else {
                        $("#preview_image").hide();
                    }

                    setTimeout(function() {
                        $("html, body").animate({
                            scrollTop: $("#editContainer").offset().top
                        }, 'slow');
                    }, 300);
                } else {
                    swal("Error!", "Volunteer data is missing or malformed", "error");
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
            var url = "{{ route('volunteer.update', ':model_id') }}";
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
                            window.location.href = '{{ route('volunteer_master') }}';
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


<!--delete fucntionlity-->
<script>
    $("#datatable-tabletools").on("click", ".rem-element", function(e) {
        e.preventDefault();
        swal({
            title: "Are you sure to delete this volunteer ?",
            // text: "Make sure if you have filled Vendor details before proceeding further",
            icon: "info",
            buttons: ["Cancel", "Confirm"]
        })
        .then((justTransfer) =>
        {
            if (justTransfer)
            {
                var model_id = $(this).attr("data-id");
                var url = "{{ route('volunteer.destroy', ":model_id") }}";

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
</x-admin.admin-layout>



