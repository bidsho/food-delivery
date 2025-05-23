<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        /* General Styles */
        body {
            background-color: #f4f7f9;
            font-family: Arial, sans-serif;
            padding: 30px;
            margin: 0;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background: #007bff;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .content {
            padding: 25px;
        }
        .message-box {
            background: #f9f9f9;
            border-left: 5px solid #007bff;
            padding: 15px;
            border-radius: 5px;
            margin-top: 15px;
            font-size: 16px;
            color: #333;
        }
        .info {
            font-size: 18px;
            margin: 10px 0;
            color: #555;
        }
        .info strong {
            color: #333;
        }
        .email-link {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .btn {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 12px 20px;
            margin-top: 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            transition: 0.3s ease-in-out;
        }
        .btn:hover {
            background: #0056b3;
        }
        .footer {
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #777;
            background: #f4f7f9;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">📩 New Contact Message</div>
        
        <div class="content">
            <p class="info"><strong>👤 Name:</strong> {{ $name }}</p>
            <p class="info"><strong>📧 Email:</strong> <a href="mailto:{{ $email }}" class="email-link">{{ $email }}</a></p>
            <p class="info"><strong>📝 Message:</strong></p>
            
            <div class="message-box">
                {{ $messageContent }}
            </div>

            <div style="text-align: center;">
                <a href="mailto:{{ $email }}" class="btn">✉️ Reply to User</a>
            </div>
        </div>

        <div class="footer">
            Best Regards,<br>
            <strong>Your Website Team</strong>
        </div>
    </div>

</body>

</html>
