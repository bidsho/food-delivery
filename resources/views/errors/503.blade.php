<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>503 - Service Unavailable</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #e9ecef;
        }
        .error-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px;
        }
        .error-code {
            font-size: 8rem;
            font-weight: bold;
            color: #fd7e14;
        }
        .error-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: #212529;
        }
        .error-message {
            font-size: 1.1rem;
            color: #6c757d;
            margin-bottom: 25px;
        }
        .btn-group a {
            margin: 0 10px;
        }
    </style>
</head>
<body>

<div class="container error-container">
    <div class="error-code">503</div>
    <div class="error-title">Service Unavailable</div>
    <p class="error-message">
        We’re currently undergoing scheduled maintenance or the server is temporarily unavailable.<br>
        Please check back shortly.
    </p>
    <div class="btn-group">
        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Go Back</a>
        <a href="{{ url('/') }}" class="btn btn-warning">Return Home</a>
    </div>
</div>

</body>
</html>
