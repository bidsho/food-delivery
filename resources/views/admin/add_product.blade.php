@extends('layouts.admin')
@section('content')

<div class="app-main__outer">
    <div class="app-main__inner">
        <!-- Page Title -->
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading d-flex align-items-center">
                    <div class="page-title-icon">
                        <i class="fas fa-comments-dollar" style="font-size:28px;color:orange;"></i>
                    </div>
                    <div class="ml-3">
                        <h3 class="mb-0">Product Management</h3>
                        <p class="text-muted">Add and manage your Tesla Product here.</p>
                    </div>
                </div>
            </div>
        </div>



        <!-- Tab Navigation -->
        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
                <a class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <i class="fas fa-key" style="font-size:24px;color:orange;"></i> product Details
                </a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-content-0" role="tabpanel">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Add Product Information</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Please ensure all fields are completed before submitting the form.</p>

                        <!-- Success Message -->
                        @if(Session::has('suc'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('suc') }}
                            </div>
                        @endif

                        <!-- Form -->
                        <form action="{{ url('/admin/saveTesla/') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name"><strong>Name</strong></label>
                                <input type="text" name="name" id="name" placeholder="Enter Name " class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="address"><strong>Model</strong></label>
                                <input type="text" name="model" id="address" placeholder="Enter Wallet Model" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="network"><strong>Description</strong></label>
                                <input type="text" name="description" id="network" placeholder="Enter Description" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="network"><strong>Amount(without $£)</strong></label>
                                <input type="text" name="amount" id="network" placeholder="Enter Description" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="file"><strong>Single Image</strong></label>
                                <input type="file" name="file" id="file" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3">
                                <i class="fas fa-save"></i> Save 
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
