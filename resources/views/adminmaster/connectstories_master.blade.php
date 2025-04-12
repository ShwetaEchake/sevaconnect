<x-admin.admin-layout>
    <x-slot name="title">Connectstories Master</x-slot>

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">


                <!-- Add Form Start -->
                <div class="row" id="addContainer" style="display:none;">
                    <div class="col-sm-12">
                        <div class="card">
                            <form class="theme-form" name="addFormEvent" id="addFormStory" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header pb-0">
                                    <h4>Create Stories</h4>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="mb-3 row">
                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="story_video">Story Video (YouTube URL) <span class="text-danger">*</span></label>
                                            <input class="form-control" id="story_video" name="story_video" type="url" placeholder="Enter YouTube Video URL">
                                            <span class="text-danger error-text story_video_err"></span>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="story_image">Story Image <span class="text-danger">*</span></label>
                                            <input class="form-control" id="story_image" name="story_image" type="file" accept="image/png, image/jpeg, image/jpg">
                                            <span class="text-danger error-text volunteer_image_err"></span>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="story_summary">Sotry Summary
                                                <span class="text-danger">*</span> </label>

                                            <textarea class="form-control" id="story_summary" name="story_summary" rows="4" placeholder="Enter Comments"></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="story_date">Story Date <span class="text-danger">*</span></label>
                                            <input class="form-control" id="story_date" name="story_date" type="date" placeholder="Enter Charity Details">
                                            <span class="text-danger error-text volunteer_details_err"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id="addSubmitStory">Submit</button>
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
                                    <h4 class="card-title">Edit stories</h4>
                                </header>

                                <div class="card-body py-2">

                                    <input type="hidden" id="edit_model_id" name="edit_model_id" value="">

                                    <div class="mb-3 row">
                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="story_video">Story Video (YouTube URL) <span class="text-danger">*</span></label>
                                            <input class="form-control" id="story_video" name="story_video" type="url" placeholder="Enter YouTube Video URL">
                                            <span class="text-danger error-text story_video_err"></span>

                                            <!-- 🎥 YouTube Video Preview -->
                                            <div id="video_preview_container" class="mt-2" style="display: none;">
                                                <iframe id="video_preview" width="70%" height="100" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="story_image">Story Image <span class="text-danger">*</span></label>

                                            <input class="form-control" id="story_image" name="story_image" type="file" accept="image/png, image/jpeg, image/jpg">

                                            <span class="text-danger error-text volunteer_image_err"></span>

                                            <!-- Image Preview -->
                                            <img id="preview_image" src="" alt="Story Image" width="80" height="80" style="margin-top: 9px; display: none;">

                                            <!-- File Name Display -->
                                            <p id="image_filename" style="margin-top: 5px; font-weight: bold;"></p>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="story_summary">Sotry Summary
                                                <span class="text-danger">*</span> </label>

                                            <textarea class="form-control" id="story_summary" name="story_summary" rows="4" placeholder="Enter Comments"></textarea>
                                            <span class="text-danger error-text volunteer_name_err"></span>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label class="col-form-label" for="story_date">Story Date <span class="text-danger">*</span></label>
                                            <input class="form-control" id="story_date" name="story_date" type="date" placeholder="Enter Charity Details">
                                            <span class="text-danger error-text volunteer_details_err"></span>
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
                        <h3>stories Details</h3>
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
                                            <th>Story Date</th>
                                            <th>Story Images</th>
                                            <th>Story URL</th>
                                            <th>Story Summary</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($storylist as $list)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $list->story_date }}</td>
                                                <td>
                                                    <img src="{{ asset('assets/connectstories/' . $list->story_image) }}"
                                                         alt="Volunteer Image"
                                                         width="50" height="50"
                                                         style="object-fit: cover; border-radius: 5px;">
                                                </td>
                                                <td>{{ $list->story_video }}</td>
                                                <td>{{ $list->story_summary }}</td>
                                                <td>
                                                    <button class="edit-element btn btn-primary px-2 py-1" title="Edit User" data-id="{{ $list->id }}">
                                                        <i data-feather="edit"></i>
                                                    </button>

                                                    <button class="btn btn-dark rem-element px-2 py-1" title="Delete ward" data-id="{{ $list->id }}">
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
    $("#addFormStory").submit(function(e) {
        e.preventDefault();
        $("#addSubmitStory").prop('disabled', true);

        var formdata = new FormData(this);

        $.ajax({
            url: '{{ route('connectstories.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmitStory").prop('disabled', false);
                swal("Successful!", data.success, "success")
                .then(() => {
                    window.location.href = '{{ route('connectstories_master') }}';
                });
            },
            statusCode: {
                422: function(responseObject) {
                    $("#addSubmitStory").prop('disabled', false);
                    resetErrors();
                    printErrMsg(responseObject.responseJSON.errors);
                },
                500: function() {
                    $("#addSubmitStory").prop('disabled', false);
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
  $(document).ready(function () {
    $("#datatable-tabletools").on("click", ".edit-element", function (e) {
        e.preventDefault();
        var story_id = $(this).attr("data-id");
        var url = "{{ route('connectstories.edit', ':id') }}".replace(":id", story_id);

        $.ajax({
            url: url,
            type: "GET",
            success: function (data) {
                console.log("Received Data:", data); // Debugging

                if (data && data.events) {
                    $("#addContainer").slideUp();
                    $("#btnCancel").show();
                    $("#addToTable").hide();
                    $("#editContainer").slideDown();

                    $("#editForm input[name='edit_model_id']").val(data.events.id);
                    $("#editForm input[name='story_date']").val(data.events.story_date);
                    $("#editForm input[name='story_video']").val(data.events.story_video);
                    $("#editForm textarea[name='story_summary']").val(data.events.story_summary);

                    // 🎥 YouTube Video Preview
                    var videoId = getYouTubeVideoId(data.events.story_video);
                    if (videoId) {
                        var embedUrl = "https://www.youtube.com/embed/" + videoId;
                        $("#video_preview").attr("src", embedUrl);
                        $("#video_preview_container").show();
                    } else {
                        $("#video_preview").attr("src", "");
                        $("#video_preview_container").hide();
                    }

                    // 🖼 Image Preview
                    if (data.events.story_image) {
                        var baseUrl = "{{ asset('assets/connectstories/') }}/";
                        var imagePath = baseUrl + data.events.story_image;

                        console.log("Image Path: ", imagePath);

                        $("#preview_image").attr("src", imagePath).show();
                        $("#image_filename").text("Selected File: " + data.events.story_image);
                    } else {
                        $("#preview_image").hide();
                        $("#image_filename").text("");
                    }

                    // Smooth scroll to edit section
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

    // 🎥 Video URL Change Par Preview Show Karein
    $("#story_video").on("input", function () {
        var url = $(this).val();
        var videoId = getYouTubeVideoId(url);

        if (videoId) {
            var embedUrl = "https://www.youtube.com/embed/" + videoId;
            $("#video_preview").attr("src", embedUrl);
            $("#video_preview_container").show();
        } else {
            $("#video_preview").attr("src", "");
            $("#video_preview_container").hide();
        }
    });

    // 🎥 Extract YouTube Video ID
    function getYouTubeVideoId(url) {
        var regExp = /(?:youtube\.com\/(?:[^\/]+\/[^\/]+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/;
        var match = url.match(regExp);
        return match ? match[1] : null;
    }

    // 🖼 Image Preview on File Selection
    $("#story_image").change(function () {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#preview_image").attr("src", e.target.result).show();
                $("#image_filename").text("Selected File: " + file.name);
            };
            reader.readAsDataURL(file);
        }
    });
});

</script>

<!--delete fucntionlity-->
<script>
    $("#datatable-tabletools").on("click", ".rem-element", function(e) {
        e.preventDefault();
        swal({
            title: "Are you sure to delete this stories?",
            // text: "Make sure if you have filled Vendor details before proceeding further",
            icon: "info",
            buttons: ["Cancel", "Confirm"]
        })
        .then((justTransfer) =>
        {
            if (justTransfer)
            {
                var model_id = $(this).attr("data-id");
                var url = "{{ route('connectstories.destroy', ":model_id") }}";

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

 <!-- Update -->
 <script>
    $(document).ready(function() {
        $("#editForm").submit(function(e) {
            e.preventDefault();
            $("#editSubmit").prop('disabled', true);
            var formdata = new FormData(this);
            formdata.append('_method', 'PUT');
            var model_id = $('#edit_model_id').val();
            var url = "{{ route('connectstories.update', ':model_id') }}";
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
                            window.location.href = '{{ route('connectstories_master') }}';
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





