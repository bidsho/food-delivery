<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unauthorized - 401</title>
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
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }
        .error-code {
            font-size: 8rem;
            font-weight: 700;
            color: #dc3545;
        }
        .error-message {
            font-size: 1.5rem;
            color: #6c757d;
        }
        .btn-home {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container error-container">
    <div class="error-code">401</div>
    <h1 class="display-5 fw-bold text-danger">Unauthorized Access</h1>
    <p class="error-message">Sorry, you are not authorized to view this page.<br>Please log in with proper credentials or return to the homepage.</p>
    <a href="{{ url('/') }}" class="btn btn-danger btn-home">Go to Homepage</a>
</div>

</body>
</html>
