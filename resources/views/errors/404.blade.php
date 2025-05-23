<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 - Not Found</title>
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
            font-size: 10rem;
            font-weight: 900;
            color: #0d6efd;
        }
        .error-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: #343a40;
        }
        .error-message {
            font-size: 1.1rem;
            color: #6c757d;
            margin-bottom: 25px;
        }
        .btn-group a {
            margin: 0 8px;
        }
    </style>
</head>
<body>

<div class="container error-container">
    <div class="error-code">404</div>
    <div class="error-title">Page Not Found</div>
    <p class="error-message">
        The page you are looking for might have been removed,<br>
        had its name changed, or is temporarily unavailable.
    </p>
    <div class="btn-group">
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Go Back</a>
        <a href="{{ url('/') }}" class="btn btn-primary">Return to Homepage</a>
    </div>
</div>

</body>
</html>
