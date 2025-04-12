<x-admin.admin-layout>
    <x-slot name="title"> Roles</x-slot>

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">


                <!-- Add Form Start -->
                <div class="row" id="addContainer" style="display:none;">
                    <div class="col-sm-12">
                        <div class="card">
                            <form class="theme-form" name="addForm" id="addForm">
                                @csrf
                                <header class="card-header pb-0">
                                    <h4 class="card-title">Add Role</h4>
                                </header>
                                <div class="card-body pt-0">

                                    <div class="mb-3 row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="name">Role Name <span class="text-danger">*</span></label>
                                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter Role Name">
                                            <span class="text-danger error-text name_err"></span>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        </div>
                                                <div class="form-group m-t-15 row roles-checkbox-group">
                                                    <strong class="mt-2">dashoard </strong>
                                                    <div class="col-3 py-2">
                                                        <label class="d-block" for="chk-ani">
                                                            <input class="checkbox_animated" id="chk-ani" type="checkbox"  name="permission[]" value="" checked>
                                                        </label>
                                                    </div>
                                           
                                                <div class="col-3 py-2">
                                                    <label class="d-block" for="chk-ani">
                                                        <input class="checkbox_animated" id="chk-ani" type="checkbox"  name="permission[]" value="" checked>
                                                    </label>
                                                </div>
                                        
                                                
                                           
                                        <span class="text-danger error-text permission_err"></span>
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
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="edit_name">Role Name <span class="text-danger">*</span></label>
                                            <input class="form-control" id="edit_name" name="edit_name" type="text" placeholder="Enter Role Name">
                                            <span class="text-danger error-text edit_name_err"></span>
                                        </div>
                                    </div>

                                    <div class="mb-3 row" id="edit_permission">
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
                        <h3>Roles</h3>
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
                                            <th>Role Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
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




