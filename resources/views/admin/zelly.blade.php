@extends('layouts.admin')
@section('content')
<style>
/* General Styling */
body {
    background-color: #1d2231;
    font-family: 'Roboto', sans-serif;
    color: #B3B3B3;
}

#content-page {
    margin-top: 10px;
}

/* Card Styling */
.iq-card {
    background-color: #1a1f2d;
    color: #B3B3B3;
    border: none;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

/* Title Styling */
.card-title {
    font-size: 24px;
    font-weight: bold;
}

/* CashApp Details Styling */
.cashapp-details {
    background-color: #2a2f3e;
    padding: 15px;
    border: 1px solid #555;
    border-radius: 8px;
    margin-bottom: 20px;
    color: #fff;
}

.cashapp-details h5 {
    color: #007bff;
    font-size: 18px;
    margin-bottom: 10px;
}

.cashapp-details p,
.cashapp-details span {
    margin: 0;
    font-size: 16px;
    line-height: 1.5;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

/* Buttons */
.btn {
    border-radius: 25px;
    padding: 10px 20px;
    transition: all 0.3s ease;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    color: #fff;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.copy-btn {
    font-size: 14px;
    background-color: #555;
    color: #fff;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 10px;
    transition: all 0.3s ease;
}

.copy-btn:hover {
    background-color: #333;
}

/* Form Fields */
.form-group label {
    font-weight: bold;
    color: #B3B3B3;
}

.form-control {
    background-color: #2a2f3e;
    border: 1px solid #555;
    color: #B3B3B3;
    border-radius: 5px;
    padding: 10px;
}

.form-control:focus {
    background-color: #333;
    border-color: #007bff;
    box-shadow: none;
    color: #fff;
}

textarea.form-control {
    resize: none;
}

/* Success Section */
.text-success {
    color: #28a745 !important;
}

.fit-image {
    max-width: 100%;
    height: auto;
}

/* Responsive Design */
@media (max-width: 768px) {
    .iq-card {
        padding: 15px;
    }

    .cashapp-details {
        font-size: 14px;
    }

    .copy-btn {
        font-size: 12px;
        padding: 5px 8px;
    }

    .btn {
        padding: 8px 15px;
    }
    
    .form-group label {
        font-size: 14px;
    }
}

@media (max-width: 576px) {
    .iq-card {
        padding: 10px;
    }

    .cashapp-details h5 {
        font-size: 16px;
    }

    .cashapp-details p,
    .cashapp-details span {
        font-size: 12px;
    }

    .copy-btn {
        font-size: 10px;
        padding: 5px;
    }

    .btn {
        font-size: 12px;
        padding: 8px 10px;
    }

    .form-group label {
        font-size: 12px;
    }

    .form-control {
        font-size: 14px;
        padding: 8px;
    }
}
</style>

<!-- Page Content -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-body">
                        <!-- Crypto Details -->
                       
                        
                        <!-- Form -->
                        <form id="form-wizard1" class="text-center mt-4" method="POST" action="{{ url('/admin/savePayPal') }}" enctype="multipart/form-data">
                        @csrf
                            <!-- Step 3 -->
                            <fieldset>
                                <div class="form-card text-left">
                                    <h3 class="mb-4">PayPal</h3>
                                    <p>User EMail: {{$user->email}}</p>
                                    
                                    <div class="form-group">
                                        <label>Amount Without($):</label>
                                        <input type="amount" class="form-control" name="amount" >
                                        <input name="id"value="{{$user->id}}" type="hidden">
                                    </div>
                                    <div class="form-group">
                                        <label>Payment Slip:</label>
                                        <input type="file" class="form-control" name="file" accept="image/*">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Pay</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function copyToClipboard(elementId) {
        const address = document.getElementById(elementId).innerText;
        navigator.clipboard.writeText(address).then(() => {
            alert('Address copied to clipboard!');
        }).catch(err => {
            console.error('Could not copy address: ', err);
        });
    }
</script>
@endsection
