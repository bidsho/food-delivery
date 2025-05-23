@extends('layouts.admin')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">

        <!-- Page Title -->
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading d-flex align-items-center">
                    <div class="page-title-icon bg-light rounded-circle">
                        <i class="fas fa-comments-dollar text-warning" style="font-size:28px;"></i>
                    </div>
                    <div class="ml-3">
                        <h4 class="mb-0">Order</h4>
                        <small class="text-muted">Restricted Area - Admins Only</small>
                    </div>
                </div>
            </div>
        </div>


        <!-- Tab Navigation -->
        <ul class="nav body-tabs body-tabs-layout tabs-animated">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <i class="fas fa-key text-warning" style="font-size:24px;"></i>
                    <span class="ml-2">Order Details</span>
                </a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content mt-3">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">

                        <!-- Success Message -->
                        @if(Session::has('suc'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('suc') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        

                        <!-- User Details -->
                        <div class="user-details mb-4">
                            <h5 class="mb-3"><strong> Information</strong></h5>
                            <div class="row">
                                <div class="col-md-6">
                                   
                                    <p><strong>Menu Name:</strong> <span class="text-primary">
                                        {{ $order->menu->name }}</span></p>
                                </div>
                                <div class="col-md-6">
                                   
                                   <p><strong>User Name:</strong> <span class="text-primary">
                                       {{ $order->user->name }}</span></p>
                               </div>
                                <div class="col-md-6">
                                   
                                    <p><strong>Amount:</strong> <span class="text-primary">
                                        #{{ number_format($order->menu->price * $order->quantity)}}</span></p>
                                </div>
                                <div class="col-md-6">
                                   
                                   <p><strong>quantity:</strong> <span class="text-primary">
                                       {{ $order->quantity }}</span></p>
                               </div>
                               
                               <div class="col-md-6">
                                   
                                   <p><strong>status:</strong> <span class="text-primary">
                                       {{ $order->status }}</span></p>
                               </div>

                               
                            </div>
                        </div>

                        <!-- Approval Actions -->


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
