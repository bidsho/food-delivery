@extends('layouts.admin')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">

        <!-- Page Title -->
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading d-flex align-items-center">
                    <div class="page-title-icon bg-light rounded-circle">
                        <i class="fas fa-utensils text-warning" style="font-size:28px;"></i>
                    </div>
                    <div class="ml-3">
                        <h4 class="mb-0">Menu Details</h4>
                        <small class="text-muted">Restricted Area - Admins Only</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Navigation -->
        <ul class="nav body-tabs body-tabs-layout tabs-animated">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <i class="fas fa-info-circle text-warning" style="font-size:24px;"></i>
                    <span class="ml-2">Menu Details</span>
                </a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content mt-3">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card shadow-lg">
                    <div class="card-body">

                        <!-- Success Message -->
                        @if(Session::has('suc'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ Session::get('suc') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <!-- Menu Image -->
                        <div class="text-center mb-4">
                            <h5 class="mb-3"><strong>Menu Image</strong></h5>
                            @if($menu->file && file_exists(public_path('uploads/'.$menu->file)))
                                <img src="{{ asset('uploads/' . $menu->file) }}" class="img-fluid rounded shadow" alt="Menu Image" style="max-width: 300px;">
                            @else
                                <p class="text-muted">No image available</p>
                            @endif
                        </div>

                        <!-- Menu Details -->
                        <div class="user-details">
                            <h5 class="mb-3"><strong>Menu Information</strong></h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Menu Name:</strong> <span class="text-primary">{{ $menu->name }}</span></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Menu Description:</strong> <span class="text-primary">{{ $menu->description }}</span></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Menu Ingredients:</strong> <span class="text-primary">{{ $menu->ingredients }}</span></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Price:</strong> <span class="text-primary">₦{{ number_format($menu->price) }}</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- JavaScript for Delete Confirmation -->
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this menu?');
    }
</script>
@endsection
