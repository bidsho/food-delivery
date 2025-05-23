<!DOCTYPE html>
<html>
<head>
    <title>New Order Payment Received</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #343a40;
        }
        p {
            font-size: 16px;
            color: #555;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        .table th, .table td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: left;
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #6c757d;
        }
        .btn {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>New Order Payment Notification</h2>
    <p>Hello Admin,</p>
    <p>A new order has been successfully paid.</p>

    <h3>Order Details:</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>₦{{ number_format($order->total_price, 2) }}</td>
                    <td><strong style="color: green;">{{ ucfirst($order->status) }}</strong></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('/admin/orders') }}" class="btn">View Orders</a>

    <p class="footer">Best Regards,<br>Your Website Team</p>
</div>

</body>
</html>
