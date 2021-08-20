@extends('layouts.app-hyper')
@section('content')
    <div class="content">
        @section('page-title')
           Projects
        @endsection
        @section('breadcrumb')
            <li class="breadcrumb-item"><a href="#">Projects</a></li>
            <li class="breadcrumb-item active">Projects List</li>
        @endsection
        <div class="row mb-2">
            <div class="col-sm-4">
                <a href="{{route('projects.create')}}" class="btn btn-danger btn-rounded mb-3"><i class="mdi mdi-plus"></i>
                    Create Project</a>
            </div>

            <div class="col-sm-8">
                <div class="text-sm-end">
                    <div class="btn-group mb-3">
                        <button type="button" class="btn btn-primary">All</button>
                    </div>
                    <div class="btn-group mb-3 ms-1">
                        <button type="button" class="btn btn-light">Ongoing</button>
                        <button type="button" class="btn btn-light">Finished</button>
                    </div>
                    <div class="btn-group mb-3 ms-2 d-none d-sm-inline-block">
                        <button type="button" class="btn btn-secondary"><i class="dripicons-view-apps"></i></button>
                    </div>
                    <div class="btn-group mb-3 d-none d-sm-inline-block">
                        <button type="button" class="btn btn-link text-muted"><i class="dripicons-checklist"></i>
                        </button>
                    </div>
                </div>
            </div><!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            @foreach($projects as $project)
                <div class="col-md-6 col-xxl-3">
                    <!-- project card -->
                    <div class="card d-block">
                        <!-- project-thumbnail -->
                        <img class="card-img-top" src="{{asset('uploads/images/'.$project->avatar??'assets/images/no-image.jpg')}}" alt="project image cap">
                        <div class="card-img-overlay">
                            <div class="badge bg-secondary text-light p-1">Ongoing</div>
                        </div>

                        <div class="card-body position-relative">
                            <div class="dropdown card-widgets">
                                <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="dripicons-dots-3"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" style="">
                                    <!-- item-->
                                    <a href="{{route('projects.edit',$project->id)}}" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline me-1"></i>Invite</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                </div>
                            </div>
                            <!-- project title-->
                            <h4 class="mt-0">
                                <a href="apps-projects-details.html" class="text-title">{{$project->title}}</a>
                            </h4>

                            <p class="text-muted font-13 mb-3">{{$project->descr}}<a href="javascript:void(0);" class="fw-bold text-muted">view
                                    more</a>
                            </p>
                            <!-- project detail-->
                            <p class="mb-3">
                                            <span class="pe-2 text-nowrap">
                                                <i class="mdi mdi-format-list-bulleted-type"></i>
                                                <b>{{$project->tasks_count}}</b> {{Str::plural('Task',$project->tasks_count)}}
                                            </span>
                                <span class="text-nowrap">
                                                <i class="mdi mdi-comment-multiple-outline"></i>
                                                <b>104</b> Comments
                                            </span>
                            </p>
                            <div class="mb-3" id="tooltip-container4">
                                <a href="javascript:void(0);" data-bs-container="#tooltip-container4" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="d-inline-block" data-bs-original-title="Mat Helme">
                                    <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container4" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="d-inline-block" data-bs-original-title="Michael Zenaty">
                                    <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>

                                <a href="javascript:void(0);" data-bs-container="#tooltip-container4" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="d-inline-block" data-bs-original-title="James Anderson">
                                    <img src="assets/images/users/avatar-9.jpg" class="rounded-circle avatar-xs" alt="friend">
                                </a>
                            </div>

                            <!-- project progress-->
                            <p class="mb-2 fw-bold">Progress <span class="float-end">45%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                </div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div>
            @endforeach

        </div>
            {{$projects->links()}}
        <!-- end row-->


    </div>
@endsection
