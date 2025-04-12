<x-admin.admin-layout>
    <x-slot name="title">Sector Master</x-slot>

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">


                <!-- Add Form Start -->
                <div class="row" id="addContainer" style="display:none;">
                    <div class="col-sm-12">
                        <div class="card">
                            <form class="theme-form" name="addFormSector" id="addFormSector" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header pb-0">
                                    <h4>Create Sector</h4>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="mb-3 row">
                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="name">Sector Name <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter Sector Name">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="initial">Sector Initial <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="initial" name="initial" type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="sector_image">Sector Image <span class="text-danger">*</span></label>
                                            <input class="form-control" id="sector_image" name="sector_image" type="file" accept="image/png, image/jpeg, image/jpg">
                                            <span class="text-danger error-text volunteer_image_err"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id="addSubmitSector">Submit</button>
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
                                            <label class="col-form-label" for="name">Sector Name <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter Sector Name">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="initial">Sector Initial <span class="text-danger">*</span> </label>
                                            <input class="form-control" id="initial" name="initial" type="text" placeholder="Enter Sector Initial">
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="sector_image">Sector Image <span class="text-danger">*</span></label>
                                            <input class="form-control" id="sector_image" name="sector_image" type="file" accept="image/png, image/jpeg, image/jpg">
                                            <span class="text-danger error-text volunteer_image_err"></span>
                                            <!-- Image Preview -->
                                            <img class="preview_image" src="" alt="sector Image" width="100" height="100" style="margin-top: 10px;">
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
                        <h3>Sector Details</h3>
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
                                            <th>Sector Name</th>
                                            <th>Image</th>
                                            <th>Sector Initial</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sectorlist as $sector)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $sector->name }}</td>
                                            <td>
                                                <img src="{{$sector->image_path}}"
                                                     alt="Volunteer Image"
                                                     width="50" height="50"
                                                     style="object-fit: cover; border-radius: 5px;">
                                            </td>
                                            <td>{{$sector->initial }}</td>


                                            <td>

                                                <button class="edit-element btn btn-primary px-2 py-1" title="Edit User" data-id="{{ $sector->id }}">
                                                    <i data-feather="edit"></i>
                                                </button>
                                                <button class="btn btn-dark rem-element px-2 py-1" title="Delete ward" data-id="{{ $sector->id }}"><i data-feather="trash-2"></i> </button>
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
        $("#addFormSector").submit(function(e) {
            e.preventDefault();
            $("#addSubmitSector").prop('disabled', true);

            var formdata = new FormData(this);

            $.ajax({
                url: '{{ route('sector.store') }}',
                type: 'POST',
                data: formdata,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#addSubmitSector").prop('disabled', false);
                    swal("Successful!", data.success, "success")
                    .then(() => {
                        window.location.href = '{{ route('sector_master') }}';
                    });
                },
                statusCode: {
                    422: function(responseObject) {
                        $("#addSubmitSector").prop('disabled', false);
                        resetErrors();
                        printErrMsg(responseObject.responseJSON.errors);
                    },
                    500: function() {
                        $("#addSubmitSector").prop('disabled', false);
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
            title: "Are you sure to delete this sector?",
            // text: "Make sure if you have filled Vendor details before proceeding further",
            icon: "info",
            buttons: ["Cancel", "Confirm"]
        })
        .then((justTransfer) =>
        {
            if (justTransfer)
            {
                var model_id = $(this).attr("data-id");
                var url = "{{ route('sector.destroy', ":model_id") }}";

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
         var sector_id = $(this).attr("data-id");
         var url = "{{ route('sector.edit', ':id') }}".replace(':id', sector_id);

         $.ajax({
             url: url,
             type: 'GET',
             data: {
                 '_token': "{{ csrf_token() }}"
             },
             success: function(data) {
                if (data && data.sector) {
                    $("#addContainer").slideUp();
                    $("#btnCancel").show();
                    $("#addToTable").hide();
                    $("#editContainer").slideDown();

                    $("#editForm input[name='edit_model_id']").val(data.sector.id);
                    $("#editForm input[name='name']").val(data.sector.name);
                    $("#editForm input[name='initial']").val(data.sector.initial);

                    if (data.sector.image_path) {
                   console.log("Image Path: ", data.sector.image_path);
                        $(".preview_image").attr("src",data.sector.image_path ).show();
                    } else {
                        $(".preview_image").hide();
                    }




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

<!-- Update -->
<script>
    $(document).ready(function() {
        $("#editForm").submit(function(e) {
            e.preventDefault();
            $("#editSubmit").prop('disabled', true);
            var formdata = new FormData(this);
            formdata.append('_method', 'PUT');
            var model_id = $('#edit_model_id').val();
            var url = "{{ route('sector.update', ':model_id') }}";
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
                            window.location.href = '{{ route('sector_master') }}';
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
</x-admin.admin-layout>



