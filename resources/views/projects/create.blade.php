@extends('layouts.app-hyper')
@section('content')
    <div class="content">
        @section('page-title')
            Projects
        @endsection
        @section('breadcrumb')
            <li class="breadcrumb-item"><a href="#">Projects</a></li>
            <li class="breadcrumb-item active">Create New Project</li>
        @endsection

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="projectname" class="form-label">Name</label>
                                        <input type="text" id="projectname" class="form-control" placeholder="Enter project name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="project-overview" class="form-label">Overview</label>
                                        <textarea class="form-control" id="project-overview" rows="5" placeholder="Enter some brief about project.."></textarea>
                                    </div>

                                    <!-- Date View -->
                                    <div class="mb-3 position-relative" id="datepicker1">
                                        <label class="form-label">Start Date</label>
                                        <input type="text" class="form-control" data-provide="datepicker" data-date-container="#datepicker1" data-date-format="d-M-yyyy" data-date-autoclose="true">
                                    </div>

                                    <div class="mb-3">
                                        <label for="project-budget" class="form-label">Budget</label>
                                        <input type="text" id="project-budget" class="form-control" placeholder="Enter project budget">
                                    </div>

                                    <div class="mb-0">
                                        <label for="project-overview" class="form-label">Team Members</label>

                                        <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="3">Select</option>
                                            <option value="AZ">Mary Scott</option>
                                            <option value="CO">Holly Campbell</option>
                                            <option value="ID">Beatrice Mills</option>
                                            <option value="MT">Melinda Gills</option>
                                            <option value="NE">Linda Garza</option>
                                            <option value="NM">Randy Ortez</option>
                                            <option value="ND">Lorene Block</option>
                                            <option value="UT">Mike Baker</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 528.617px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ys0l-container"><span class="select2-selection__rendered" id="select2-ys0l-container" role="textbox" aria-readonly="true" title="Select">Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                                        <div class="mt-2" id="tooltip-container">
                                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>

                                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                                <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>

                                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                                                <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>

                                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Lorene Block" class="d-inline-block">
                                                <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>

                                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mike Baker" class="d-inline-block">
                                                <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
                                        </div>

                                    </div>

                                </div> <!-- end col-->

                                <div class="col-xl-6">
                                    <div class="mb-3 mt-3 mt-xl-0">
                                        <label for="projectname" class="mb-0">Avatar</label>
                                        <p class="text-muted font-14">Recommended thumbnail size 800x400 (px).</p>

                                        <form action="/" method="post" class="dropzone dz-clickable" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">


                                            <div class="dz-message needsclick">
                                                <i class="h3 text-muted dripicons-cloud-upload"></i>
                                                <h4>Drop files here or click to upload.</h4>
                                            </div>
                                        </form>

                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>

                                        <!-- file preview template -->
                                        <div class="d-none" id="uploadPreviewTemplate">
                                            <div class="card mt-1 mb-0 shadow-none border">
                                                <div class="p-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <img data-dz-thumbnail="" src="#" class="avatar-sm rounded bg-light" alt="">
                                                        </div>
                                                        <div class="col ps-0">
                                                            <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name=""></a>
                                                            <p class="mb-0" data-dz-size=""></p>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Button -->
                                                            <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove="">
                                                                <i class="dripicons-cross"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                        </div>
                                        <!-- end file preview template -->
                                    </div>

                                    <!-- Date View -->
                                    <div class="mb-3 position-relative" id="datepicker2">
                                        <label class="form-label">Due Date</label>
                                        <input type="text" class="form-control" data-provide="datepicker" data-date-container="#datepicker2" data-date-format="d-M-yyyy" data-date-autoclose="true">
                                    </div>
                                </div> <!-- end col-->
                            </div>
                            <!-- end row -->

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
    </div>
@endsection
