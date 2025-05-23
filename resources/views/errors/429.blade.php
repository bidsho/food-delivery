<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>429 - Too Many Requests</title>
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
            padding: 40px;
        }
        .error-code {
            font-size: 8rem;
            font-weight: bold;
            color: #6f42c1;
        }
        .error-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: #343a40;
        }
        .error-message {
            font-size: 1.2rem;
            color: #6c757d;
            margin-bottom: 20px;
        }
        .btn-group a {
            margin: 0 8px;
        }
    </style>
</head>
<body>

<div class="container error-container">
    <div class="error-code">429</div>
    <div class="error-title">Too Many Requests</div>
    <p class="error-message">
        You’ve made too many requests in a short period. Please wait a moment and try again.<br>
        This is a temporary limit to protect our servers.
    </p>
    <div class="btn-group">
        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Go Back</a>
        <a href="{{ url('/') }}" class="btn btn-primary">Return Home</a>
    </div>
</div>

</body>
</html>
