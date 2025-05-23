@extends('layouts.admin')
@section('content')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class='fas fa-comments-dollar' style='font-size:28px;color:orange'></i>&nbsp;
                    </div>
                    <h3 class="text-primary">User Information</h3>
                </div>
            </div>
        </div>            

        <!-- Tabs for Navigation -->
        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                <span><i class='fas fa-key' style='font-size:24px;color:orange'></i></span>
            </a>
        </ul>

        <!-- Tab Content Section -->
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">User Profile Details</h5>
                        <!-- Success Message -->
                        @if(Session::has('suc'))
                            <div class="bg-primary text-light mb-4 p-2 rounded" role="alert">
                                {{ Session::get('suc') }}
                            </div>
                        @endif

                        <!-- User Info Form -->
                        <form class="login100-form validate-form" action="{{ url('/admin/savePackages/')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="user-info">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <h5 class="text-dark">Name:</h5>
                                        <p class="text-primary font-weight-bold">{{ $user->name }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="text-dark">Email:</h5>
                                        <p class="text-primary font-weight-bold">{{ $user->email }}</p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <h5 class="text-dark">Location:</h5>
                                        <p class="text-primary font-weight-bold">{{ $user->location }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="text-dark">Phone Number:</h5>
                                        <p class="text-primary font-weight-bold">{{ $user->phone }}</p>
                                    </div>
                                </div>

                               

                               
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>                    
    </div>
</div>

@endsection
