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
            <h4 class="mb-0">Contact</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col">Number</th>
                            <th scope="col">Delete</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($phone as $phones)
                        <tr class="border-bottom">
                            <td class="align-middle">{{ $phones->phone }}</td>
                           
                           
                            <td class="text-center">
                                <form action="{{ url('/admin/delete_phone/'.$phones->id) }}" method="POST" onsubmit="return confirmDelete();">
                                    @csrf
                                    
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">No contact found.</td>
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
