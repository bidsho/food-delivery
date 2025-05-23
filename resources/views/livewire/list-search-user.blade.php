<div class="container mt-5">
    <div class="card shadow-lg rounded-3 border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center py-3 px-4">
            <h4 class="mb-0 fw-semibold">User Management</h4>
        </div>

        <div class="card-body px-4 py-4">
            <!-- Search Bar -->
            <div class="row mb-4">
                <div class="col-md-8 offset-md-2">
                    <div class="input-group input-group-lg shadow-sm">
                        <input type="text" wire:model.blur="search" class="form-control" placeholder="Search users by email...">
                        <button class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- User Table -->
            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle">
                    <thead class="bg-light sticky-top">
                        <tr class="text-center">
                            <th scope="col">Email</th>
                            <th scope="col">View</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td class="align-middle">{{ $user->email }}</td>
                                <td class="text-center">
                                    <a href="{{ url('/admin/viewUser/'.$user->id) }}" class="btn btn-outline-success btn-sm px-3">
                                        <i class="fas fa-eye"></i> View
                                    </a>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-outline-danger btn-sm px-3" onclick="confirmDelete({{ $user->id }})">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center text-muted py-4">No users found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
