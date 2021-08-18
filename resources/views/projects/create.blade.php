@extends('layouts.app-hyper')
@section('content')
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
                <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label for="projectname" class="form-label">Title</label>
                                <input type="text" id="projectname" class="form-control" name="title"
                                       placeholder="Enter project title">
                            </div>

                            <div class="mb-3">
                                <label for="project-overview" class="form-label">Overview</label>
                                <textarea class="form-control" id="project-overview" name="descr" rows="5"
                                          placeholder="Enter some brief about project.."></textarea>
                            </div>

                            <!-- Date View -->
                            <div class="mb-3 position-relative" id="datepicker1">
                                <label class="form-label">Start Date</label>
                                <input type="text" class="form-control" name="start_date"
                                       data-provide="datepicker"
                                       data-date-container="#datepicker1" data-date-format="d-M-yyyy"
                                       data-date-autoclose="true">
                            </div>

                            <div class="mb-3">
                                <label for="project-budget" class="form-label">Budget</label>
                                <input type="text" id="project-budget" name="budget" class="form-control"
                                       placeholder="Enter project budget">
                            </div>

                            <div class="mb-3">
                                <label for="project-overview" class="form-label">Team Members</label>

                                <select class="form-control select2 select2-hidden-accessible" data-toggle="select2"
                                        data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="3">Select</option>
                                    <option value="AZ">Mary Scott</option>
                                    <option value="CO">Holly Campbell</option>
                                    <option value="ID">Beatrice Mills</option>
                                    <option value="MT">Melinda Gills</option>
                                    <option value="NE">Linda Garza</option>
                                    <option value="NM">Randy Ortez</option>
                                    <option value="ND">Lorene Block</option>
                                    <option value="UT">Mike Baker</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                               data-select2-id="2" style="width: 528.617px;"><span
                                        class="selection"><span class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0" aria-disabled="false"
                                                                aria-labelledby="select2-ys0l-container"><span
                                                class="select2-selection__rendered" id="select2-ys0l-container"
                                                role="textbox" aria-readonly="true" title="Select">Select</span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>

                                <div class="mt-2" id="tooltip-container">
                                    <a href="javascript:void(0);" data-bs-container="#tooltip-container"
                                       data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme"
                                       class="d-inline-block">
                                        <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs"
                                             alt="friend">
                                    </a>

                                    <a href="javascript:void(0);" data-bs-container="#tooltip-container"
                                       data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty"
                                       class="d-inline-block">
                                        <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs"
                                             alt="friend">
                                    </a>

                                    <a href="javascript:void(0);" data-bs-container="#tooltip-container"
                                       data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson"
                                       class="d-inline-block">
                                        <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs"
                                             alt="friend">
                                    </a>

                                    <a href="javascript:void(0);" data-bs-container="#tooltip-container"
                                       data-bs-toggle="tooltip" data-bs-placement="top" title="Lorene Block"
                                       class="d-inline-block">
                                        <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs"
                                             alt="friend">
                                    </a>

                                    <a href="javascript:void(0);" data-bs-container="#tooltip-container"
                                       data-bs-toggle="tooltip" data-bs-placement="top" title="Mike Baker"
                                       class="d-inline-block">
                                        <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs"
                                             alt="friend">
                                    </a>
                                </div>

                            </div>

                        </div> <!-- end col-->

                        <div class="col-xl-6">
                            <div class="mb-3 mt-3 mt-xl-0">
                                <label for="avatar" class="form-label">Preview </label>
                                <p class="text-muted font-14">Recommended thumbnail size 800x400 (px).</p>


                                <input type="file" id="avatar" class="form-control" name="avatar">
                            </div>


                            <!-- Date View -->
                            <div class="mb-3 position-relative" id="datepicker2">
                                <label class="form-label">Due Date</label>
                                <input type="text" name="due_date" class="form-control"
                                       data-provide="datepicker"
                                       data-date-container="#datepicker2" data-date-format="d-M-yyyy"
                                       data-date-autoclose="true">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-danger btn-rounded mb-3"><i
                                        class="mdi mdi-plus"></i>
                                    Create Project
                                </button>
                            </div>
                        </div> <!-- end col-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
