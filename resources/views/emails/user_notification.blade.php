<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$subject}}</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f6f9;
            color: #333;
        }
        .container {
            max-width: 700px;
            margin: 40px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #007bff;
            color: #fff;
            padding: 30px 20px;
            text-align: center;
        }
        .header h2 {
            margin: 0;
            font-size: 26px;
            font-weight: bold;
        }
        .svg-icon {
            width: 40px;
            height: 40px;
            margin-top: 10px;
            fill: #fff;
        }
        .content {
            padding: 30px;
            font-size: 16px;
            line-height: 1.7;
            background-color: #f9f9f9;
        }
        .content p {
            margin: 15px 0;
        }
        .content strong {
            font-weight: 600;
            color: #007bff;
        }
        .footer {
            text-align: center;
            background: #f1f1f1;
            padding: 15px;
            font-size: 14px;
            color: #666;
            border-top: 1px solid #ddd;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <h2>{{$subject}}</h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="svg-icon">
                <path d="M12 0C5.371 0 0 5.371 0 12c0 6.628 5.371 12 12 12s12-5.372 12-12c0-6.629-5.371-12-12-12zm0 21.9c-5.462 0-9.9-4.438-9.9-9.9s4.438-9.9 9.9-9.9 9.9 4.438 9.9 9.9-4.438 9.9-9.9 9.9zm4.95-14.553-5.538 6.917-3.178-3.29-1.256 1.218 4.5 4.668 6.79-8.469z"/>
            </svg>
        </div>

        <!-- Content Section -->
        <div class="content">

            
            <p>{{$bodyOne}}</p>
            <p>{{$bodyTwo}}</p>
        </div>

        <!-- Footer Section -->
        <div class="footer">
        <p>Best regards,</p>
        <p></p>
        </div>
    </div>
</body>
</html>
