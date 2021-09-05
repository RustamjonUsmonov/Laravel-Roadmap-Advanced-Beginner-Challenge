@extends('layouts.app-hyper')
@section('content')
    <div class="content">
        @section('page-title')
            Add Client
        @endsection
        @section('breadcrumb')
            <li class="breadcrumb-item"><a href="#">Clients</a></li>
            <li class="breadcrumb-item active">Add Client</li>
        @endsection
        <div class="row mb-2">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">
                        <div class="card-body p-3">

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center mt-0 fw-bold">Add Client</h4>
                            </div>

                            <form method="POST" action="{{ route('clients.store') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="ed-name" class="col-form-label text-md-left">{{ __('Name') }}</label>

                                    <div class="">
                                        <input id="ed-name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                                    <div class="">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row-->
        </div>
@endsection
