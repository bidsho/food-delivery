@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <!-- Success Message -->
    @if(Session::has('suc'))
    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
        <strong>Success!</strong> {{ Session::get('suc') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <!-- Orders Table -->
    <div class="card shadow-lg rounded">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Orders</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Amount</th>
                            <th scope="col" class="text-center">View</th>
                            <th scope="col" class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($menu as $menus)
                        <tr class="border-bottom">
                            <td class="align-middle">{{ $menus->name }}</td>
                            <td class="align-middle">#{{ number_format($menus->price, 2) }}</td>
                            <td class="text-center">
                                <a href="{{ url('/admin/view_menu/'.$menus->id) }}" class="btn btn-outline-info btn-sm">
                                    <i class="fas fa-eye"></i> View
                                </a>
                            </td>
                            <td class="text-center">
                                <form action="{{ url('/admin/delete_menu/'.$menus->id) }}" method="POST" onsubmit="return confirmDelete();">
                                    @csrf
                                    
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">No orders found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Delete Confirmation -->
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this order?');
    }
</script>
@endsection
