@extends('layouts.home')

@section('content')
    
    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <h1>Delicious Food, Delivered Fast!</h1>
            <p>Order your favorite meals from top-rated restaurants near you.</p>
            <a href="#menu" class="btn btn-primary btn-lg">Browse Menu</a>
        </div>
    </header>
    
    <!-- Featured Restaurants -->
    <section id="restaurants" class="container my-5">
        <h2 class="text-center mb-4">Top Restaurants</h2>
        <div class="row">
            @foreach($menu as $menus)
            <div class="col-md-4">
                <a href="{{url('/users/food-item-page/'.$menus->id)}}" style=" text-decoration: none;">
                <div class="card restaurant-card">
                    <img src="{{ asset('uploads/'.$menus->file) }}" class="card-img-top" alt="Restaurant">
                    <div class="card-body">
                        <h5 class="card-title">{{$menus->name}}</h5>
                        <p class="card-text">{{$menus->description}}</p>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
            
        </div>
    </section>
    
    <!-- Testimonials -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">What Our Customers Say</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <p><i class="fas fa-quote-left fa-2x"></i></p>
                    <p>"Amazing service and fast delivery. Love the food!"</p>
                    <p>- Jane Doe</p>
                </div>
                <div class="col-md-4 text-center">
                    <p><i class="fas fa-quote-left fa-2x"></i></p>
                    <p>"Best food ordering experience ever. Highly recommend!"</p>
                    <p>- John Smith</p>
                </div>
                <div class="col-md-4 text-center">
                    <p><i class="fas fa-quote-left fa-2x"></i></p>
                    <p>"Delicious meals at great prices. My go-to food app."</p>
                    <p>- Emily Brown</p>
                </div>
            </div>
        </div>
    </section>
    
    @endsection
