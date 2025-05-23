<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Alert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 150px;
        }
        .content {
            text-align: center;
        }
        .btn-custom {
            background-color: #dc3545;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #6c757d;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="email-container">
        <div class="logo">
            <img src="https://via.placeholder.com/150" alt="Company Logo">
        </div>
        
        <div class="content">
            <h2>Security Alert!</h2>
            <p>Hi {{$name}},</p>
            <p>We detected an unusual login attempt to your account. If this was not you, please update your password immediately to keep your account secure.</p>
            
            <a href="{{ route('password.request') }}" class="btn-custom">Update Password</a>
        </div>

        <div class="footer">
            <p>If you have any questions or need further assistance, please <a href="mailto:support@yourwebsite.com">contact us</a>.</p>
            <p>&copy; 2025 Your Company. All rights reserved.</p>
        </div>
    </div>

</body>
</html>
