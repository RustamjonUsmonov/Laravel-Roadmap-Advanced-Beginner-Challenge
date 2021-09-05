@extends('layouts.app-hyper')
@section('content')
    <div class="content">
        @section('page-title')
            Users
        @endsection
        @section('breadcrumb')
            <li class="breadcrumb-item"><a href="#">Users</a></li>
            <li class="breadcrumb-item active">Users List</li>
        @endsection
        <div class="row mb-2">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Users Table</h4>
                            <p class="text-muted font-14">
                            </p>
                            <div class="table-responsive-sm">
                                <table class="table table-hover table-centered mb-0">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>E-Mail</th>
                                        <th>Created At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td><span class="badge bg-primary">{{$user->created_at->diffForHumans()}}</span></td>
                                    </tr>
                                    @empty
                                        <td colspan="3">No Users Yet.</td>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div>
            </div>
            <!-- end row-->
        </div>
@endsection
