@extends('layouts.app-hyper')
@section('content')
    <div class="content">
        @section('page-title')
            Tasks
        @endsection
        @section('breadcrumb')
            <li class="breadcrumb-item"><a href="#">Tasks</a></li>
            <li class="breadcrumb-item active">Tasks List</li>
        @endsection
        <div class="row mb-2">
            <div class="row">
                <div class="col-xxl-8">
                    <!-- tasks panel -->
                    <div class="mt-2">
                        <h5 class="m-0 pb-2">
                            <a class="text-dark" data-bs-toggle="collapse" href="#todayTasks" role="button"
                               aria-expanded="true" aria-controls="todayTasks">
                                <i class="uil uil-angle-down font-18"></i>Today <span class="text-muted">({{count($todayTasks)}})</span>
                            </a>
                        </h5>

                        <div class="collapse show" id="todayTasks">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <!-- task -->
                                    @foreach($todayTasks as $task)
                                        <div class="row justify-content-sm-between">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="task1">
                                                    <label class="form-check-label" for="task1">
                                                        {{$task->title}}
                                                    </label>
                                                </div> <!-- end checkbox -->
                                            </div> <!-- end col -->
                                            <div class="col-sm-6">
                                                <div class="d-flex justify-content-between">
                                                    <div id="tooltip-container">
                                                        <img
                                                            src="https://shapka-youtube.ru/wp-content/uploads/2021/01/man-ava5.jpg"
                                                            alt="image"
                                                            class="avatar-xs rounded-circle me-1"
                                                            data-bs-container="#tooltip-container"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-placement="bottom" title=""
                                                            data-bs-original-title="Assigned to Arya S"
                                                            aria-label="Assigned to Arya S">
                                                    </div>
                                                    <div>
                                                        <ul class="list-inline font-13 text-end">
                                                            <li class="list-inline-item">
                                                                <i class="uil uil-schedule font-16 me-1"></i> {{$task->created_at->diffForHumans()}}
                                                            </li>
                                                            <li class="list-inline-item ms-2">
                                                                <span class="badge badge-danger-lighten p-1">High</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div> <!-- end .d-flex-->
                                            </div> <!-- end col -->
                                        </div>
                                @endforeach
                                <!-- end task -->
                                </div> <!-- end card-body-->
                            </div> <!-- end card -->
                        </div> <!-- end .collapse-->
                    </div> <!-- end .mt-2-->

                    <!-- upcoming tasks -->
                    <div class="mt-4">

                        <h5 class="m-0 pb-2">
                            <a class="text-dark" data-bs-toggle="collapse" href="#upcomingTasks" role="button"
                               aria-expanded="false" aria-controls="upcomingTasks">
                                <i class="uil uil-angle-down font-18"></i>Upcoming <span class="text-muted">({{count($upcomingTasks)}})</span>
                            </a>
                        </h5>

                        <div class="collapse show" id="upcomingTasks">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <!-- task -->
                                    @foreach($upcomingTasks as $task)
                                        <div class="row justify-content-sm-between">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="task1">
                                                    <label class="form-check-label" for="task1">
                                                        {{$task->title}}
                                                    </label>
                                                </div> <!-- end checkbox -->
                                            </div> <!-- end col -->
                                            <div class="col-sm-6">
                                                <div class="d-flex justify-content-between">
                                                    <div id="tooltip-container">
                                                        <img
                                                            src="https://shapka-youtube.ru/wp-content/uploads/2021/01/man-ava5.jpg"
                                                            alt="image"
                                                            class="avatar-xs rounded-circle me-1"
                                                            data-bs-container="#tooltip-container"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-placement="bottom" title=""
                                                            data-bs-original-title="Assigned to Arya S"
                                                            aria-label="Assigned to Arya S">
                                                    </div>
                                                    <div>
                                                        <ul class="list-inline font-13 text-end">
                                                            <li class="list-inline-item">
                                                                <i class="uil uil-schedule font-16 me-1"></i> {{$task->created_at->diffForHumans()}}
                                                            </li>
                                                            <li class="list-inline-item ms-2">
                                                                <span class="badge badge-danger-lighten p-1">High</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div> <!-- end .d-flex-->
                                            </div> <!-- end col -->
                                        </div>
                                    @endforeach
                                </div> <!-- end card-body-->
                            </div> <!-- end card -->
                        </div> <!-- end collapse-->
                    </div>
                    <!-- end upcoming tasks -->
                </div> <!-- end col -->

                <!-- task details -->
                <div class="col-xxl-4">
                    <div class="card">
                        <div class="card-body">
                            @include('tasks.create')
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row-->


        </div>
@endsection
