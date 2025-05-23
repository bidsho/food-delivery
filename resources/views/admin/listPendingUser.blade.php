@extends('layouts.admin')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="container my-4">
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">User Management</h5>
            <form action="{{ url('/admin/users') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control" placeholder="Search by email..." value="{{ request()->query('search') }}">
                <button type="submit" class="btn btn-light ml-2">Search</button>
            </form>
        </div>

        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Email</th>
                        <th scope="col">View</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ url('/admin/viewUser/'.$user->id) }}" class="btn btn-success btn-sm">View</a>
                            </td>
                            <td>
                                <a href="{{ url('/admin/DeleteUser/'.$user->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No users found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
