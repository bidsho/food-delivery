@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <h3 class="text-primary">Send Notification to Users</h3>
     <!-- Success Message -->
     @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
    <form action="{{ url('/admin/sendNotification') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Notification Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" required>
        </div>
        <div class="form-group">
            <label for="message">Notification Message One</label>
            <textarea name="body_one" id="message" class="form-control" rows="4" placeholder="Enter Message" required></textarea>
        </div>
        <div class="form-group">
            <label for="message">Notification Message Two</label>
            <textarea name="body_two" id="message" class="form-control" rows="4" placeholder="Enter Message" required></textarea>
        </div>
        <div class="form-group">
            <label for="users">Select Users</label>
            <select name="email" id="users" class="form-control" multiple required>
                @foreach($users as $user)
                    <option value="{{ $user->email }}">{{ $user->email }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Send Notification</button>
    </form>
</div>
@endsection
