<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food Delivery - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero {
            background: url('images/food3.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }
        .restaurant-card img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">FoodieExpress</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            @if( Auth::user())
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Menu</a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="{{url('users/user-contact')}}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('users/user-order')}}">History</a></li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/users/cart-page')}}">
                        Cart 
                        <span class="badge bg-danger">
                        @livewire('cart-counter')

                        </span>
                    </a>
                </li>
                 <!-- Logout Button -->
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm ms-3">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </li>
                </ul>
            </div>
            @else
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('users/user-contact')}}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
                </ul>
            </div>


            @endif
        </div>
    </nav>
    @yield('content')

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; 2025 FoodieExpress. All rights reserved.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>