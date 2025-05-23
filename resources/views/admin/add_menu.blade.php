@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header bg-primary text-white py-3">
            <h4 class="mb-0">Create Food Menu</h4>
        </div>

        <div class="card-body p-4">
            <!-- Error Messages -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Success Message -->
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            <!-- Form Start -->
            <form action="{{ url('/admin/sendMenu') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Menu Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Menu Name" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter Description" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="ingredients" class="form-label">Ingredients</label>
                    <textarea name="ingredients" id="ingredients" class="form-control" rows="4" placeholder="Enter Ingredients" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price (₦)</label>
                    <input type="text" name="price" id="price" class="form-control" placeholder="Enter Price" required>
                </div>

                <div class="mb-4">
                    <label for="file" class="form-label">Menu Picture</label>
                    <input type="file" name="file" id="file" class="form-control" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-lg">
                        <i class="fas fa-plus-circle me-2"></i> Create Menu
                    </button>
                </div>
            </form>
            <!-- Form End -->
        </div>
    </div>
</div>
@endsection
