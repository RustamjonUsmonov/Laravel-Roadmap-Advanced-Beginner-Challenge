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
                <form action="{{route('projects.update',$project->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label for="projectname" class="form-label">Title</label>
                                <input type="text" id="projectname"
                                       class="form-control @error('title') is-invalid @enderror" name="title"
                                       placeholder="Enter project title" value="{{$project->title}}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="descr" class="form-label">Overview</label>
                                <textarea class="form-control @error('descr') is-invalid @enderror" id="descr"
                                          name="descr" rows="5"
                                          placeholder="Enter brief about project..">
                                    {{$project->descr}}
                                </textarea>
                                @error('descr')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Date View -->
                            <div class="mb-3 position-relative" id="datepicker1">
                                <label class="form-label">Start Date</label>
                                <input type="text" class="form-control @error('start_date') is-invalid @enderror"
                                       name="start_date"
                                       data-provide="datepicker"
                                       data-date-container="#datepicker1" data-date-format="d-M-yyyy"
                                       data-date-autoclose="true" >
                                @error('start_date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="budget" class="form-label">Budget</label>
                                <input type="text" id="budget" name="budget"
                                       class="form-control @error('budget') is-invalid @enderror"
                                       placeholder="Enter project budget" value="{{$project->budget}}">
                                @error('budget')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                <input type="text" name="due_date"
                                       class="form-control @error('due_date') is-invalid @enderror"
                                       data-provide="datepicker"
                                       data-date-container="#datepicker2" data-date-format="d-M-yyyy"
                                       data-date-autoclose="true">
                                @error('due_date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-danger btn-rounded mb-3"><i
                                        class="mdi mdi-plus"></i>
                                    Update Project
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
