@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <h3 class="text-primary">Create Food Menu</h3>
     <!-- Success Message -->
     @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
    <form action="{{ url('/admin/sendContactPhone') }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Phone Number</label>
            <input type="text" name="phone" id="title" class="form-control" placeholder="Enter Phone Number " required>
        </div>

        <button type="submit" class="btn btn-success">Create Contact</button>
    </form>
</div>
@endsection
