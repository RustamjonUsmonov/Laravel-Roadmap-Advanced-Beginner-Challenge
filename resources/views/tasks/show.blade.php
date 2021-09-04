@extends('layouts.app-hyper')
@section('content')
@section('page-title')
    Projects
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Projects</a></li>
    <li class="breadcrumb-item active">View Project <i class="badge-primary-lighten ">{{$project->title}}</i></li>
@endsection
<div class="row">
    <div class="col-xxl-8 col-lg-6">
        <!-- project card -->
        <div class="card d-block">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="dripicons-dots-3"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="{{route('projects.edit',$project->id)}}" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                        <!-- item-->
                        <a href="{{route('projects.destroy',$project->id)}}" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline me-1"></i>Invite</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                    </div>
                </div>
                <!-- project title-->
                <h3 class="mt-0">
                    {{$project->title}}
                </h3>
                <div class="badge bg-secondary text-light mb-3">Ongoing</div>

                <h5>Project Overview:</h5>

                <p class="text-muted mb-4">
                    {{$project->descr}}
                </p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-4">
                            <h5>Start Date</h5>
                            <p>{{\Carbon\Carbon::parse($project->start_date)->format('m/d/Y')}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-4">
                            <h5>End Date</h5>
                            <p>{{\Carbon\Carbon::parse($project->due_date)->format('m/d/Y')}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-4">
                            <h5>Budget</h5>
                            <p>${{$project->budget}}</p>
                        </div>
                    </div>
                </div>

                <div id="tooltip-container">
                    <h5>Team Members:</h5>
                    <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                        <img src="assets/images/users/avatar-6.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                    </a>

                    <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                        <img src="assets/images/users/avatar-7.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                    </a>

                    <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                        <img src="assets/images/users/avatar-8.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                    </a>

                    <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                        <img src="assets/images/users/avatar-4.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                    </a>

                    <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="d-inline-block" data-bs-original-title="Michael Zenaty">
                        <img src="assets/images/users/avatar-5.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                    </a>

                    <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                        <img src="assets/images/users/avatar-3.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                    </a>
                </div>

            </div> <!-- end card-body-->

        </div> <!-- end card-->

        <!-- end card-->
    </div> <!-- end col -->

    <div class="col-lg-6 col-xxl-4">
        <!-- end card-->

        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-3">Files</h5>

                <div class="card mb-1 shadow-none border">
                    <div class="p-2">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <img src="{{$project->avatar?asset('uploads/images/'.$project->avatar):asset('uploads/images/983794168.jpg')}}" class="avatar-sm rounded" alt="file-image">
                            </div>
                            <div class="col ps-0">
                                <a href="javascript:void(0);" class="text-muted fw-bold">{{$project->avatar??'983794168.jpg'}}</a>
                                <p class="mb-0">{{number_format(log(File::size($project->avatar?public_path().'/uploads/images/'.$project->avatar:public_path().'/uploads/images/983794168.jpg')) / log(1024),2)}} MB</p>
                            </div>
                            <div class="col-auto">
                                <!-- Button -->
                                <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                    <i class="dripicons-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
