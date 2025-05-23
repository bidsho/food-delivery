@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <h3 class="text-primary">Notifications Management</h3>

    @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">All Notifications</h5>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover table-bordered mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Message one</th>
                        <th scope="col">Message two</th>
                        <th scope="col">Email</th>
                        <th scope="col" class="text-center">Sent At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($notifications as $notification)
                        <tr>
                            <td>{{ $notification->subject }}</td>
                            <td>{{ $notification->body_one }}</td>
                            <td>{{ $notification->body_two }}</td>
                            <td>{{ $notification->email }}</td>
                            <td class="text-center">{{ $notification->created_at->format('d M, Y h:i A') }}</td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">No notifications available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center my-4">
        {!! $notifications->links() !!}
    </div>
</div>
@endsection
