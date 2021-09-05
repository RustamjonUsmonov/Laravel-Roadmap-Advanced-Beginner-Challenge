@extends('layouts.app-hyper')
@section('content')
    <div class="content">
        @section('page-title')
            Clients
        @endsection
        @section('breadcrumb')
            <li class="breadcrumb-item"><a href="#">Clients</a></li>
            <li class="breadcrumb-item active">Clients List</li>
        @endsection
        <div class="row mb-3">
            <div class="col-sm-4">
                <a href="{{route('clients.create')}}" class="btn btn-success btn-rounded mb-3"><i
                        class="mdi mdi-plus"></i>
                    Add Client</a>
            </div>
        </div>
        <div class="row mb-2">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Clients Table</h4>
                            <p class="text-muted font-14">
                            </p>
                            <div class="table-responsive-sm">
                                <table class="table table-hover table-centered mb-0">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>E-Mail</th>
                                        <th>Total Projects</th>
                                        <th>Created At</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($clients as $client)
                                        <tr>
                                            <td>{{$client->name}}</td>
                                            <td>{{$client->email}}</td>
                                            <td>{{$client->projects_count}}</td>
                                            <td><span
                                                    class="badge bg-primary">{{$client->created_at->diffForHumans()}}</span>
                                            </td>
                                            <td><span class="btn btn-primary"><a
                                                        style="text-decoration: none !important;color: #fffbdb"
                                                        href="{{route('clients.edit',$client->id)}}">Edit</a></span>
                                            </td>
                                            <td>
                                                <form method="post" action="{{route('clients.destroy',$client->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <td colspan="3">No clients Yet.</td>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div>
                        <div class="mx-3">{{$clients->links()}}</div>
                        <!-- end card body-->
                    </div> <!-- end card -->
                </div>
            </div>
            <!-- end row-->
        </div>
@endsection
