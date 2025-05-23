<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Required - 402</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f2f4f7;
        }
        .error-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
        }
        .error-code {
            font-size: 8rem;
            font-weight: bold;
            color: #ffc107;
        }
        .error-title {
            font-size: 2rem;
            font-weight: 600;
            color: #212529;
        }
        .error-message {
            color: #6c757d;
            font-size: 1.2rem;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .btn-action {
            padding: 10px 25px;
        }
    </style>
</head>
<body>

<div class="container error-container">
    <div class="error-code">402</div>
    <div class="error-title">Payment Required</div>
    <div class="error-message">
        Access to this resource is restricted until payment is completed.<br>
        Please make a payment or contact support for assistance.
    </div>
    <a href="{{ url('/payment') }}" class="btn btn-warning btn-action">Make a Payment</a>
    <a href="{{ url('/') }}" class="btn btn-outline-secondary btn-action ms-2">Return to Home</a>
</div>

</body>
</html>
