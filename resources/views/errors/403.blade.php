<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>403 - Forbidden</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .error-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .error-code {
            font-size: 8rem;
            font-weight: bold;
            color: #dc3545;
        }
        .error-title {
            font-size: 2.5rem;
            font-weight: 600;
        }
        .error-message {
            font-size: 1.2rem;
            color: #6c757d;
            margin-bottom: 20px;
        }
        .btn-group a {
            margin: 0 10px;
        }
    </style>
</head>
<body>

<div class="container error-container">
    <div class="error-code">403</div>
    <div class="error-title">Access Denied</div>
    <p class="error-message">
        {{ $exception->getMessage() ?: 'You do not have permission to access this page.' }}
    </p>
    <div class="btn-group">
        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Go Back</a>
        <a href="{{ url('/') }}" class="btn btn-danger">Go to Homepage</a>
    </div>
</div>

</body>
</html>
