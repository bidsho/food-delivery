<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>500 - Server Error</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f5f5;
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
            color: #dc3545;
        }
        .error-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: #343a40;
        }
        .error-message {
            font-size: 1.2rem;
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
    <div class="error-code">500</div>
    <div class="error-title">Internal Server Error</div>
    <p class="error-message">
        Sorry, something went wrong on our end.<br>
        Please try again later or contact support if the issue persists.
    </p>
    <div class="btn-group">
        <a href="{{ url()->previous() }}" class="btn btn-outline-dark">Go Back</a>
        <a href="{{ url('/') }}" class="btn btn-danger">Return Home</a>
    </div>
</div>

</body>
</html>
