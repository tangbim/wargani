<style>
    .nama {
        color: white;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: bold;
        font-size: 80px;
    }
</style>

@extends('layouts.main')

@section('container')

<body style="background-color:black">
    <div class="card bg-dark text-white">
        <img class="card-img" src="https://source.unsplash.com/1600x480/?soccer" alt="Card image">
        <div class="card-img-overlay d-flex align-items-start flex-column">
            <h1 class="nama mt-auto card-title">Welcome {{ Auth::user()->name }}!</h1>
        </div>
    </div>
    <form class="text-white mt-3">
        <div class="mb-3">
            <label for="nameInput" class="form-label">Name</label>
            <input type="text" class="form-control" id="nameInput" aria-describedby="emailHelp" value="{{ Auth::user()->name }}">
          </div>
        <div class="mb-3">
          <label for="emailInput" class="form-label">Your Email Address</label>
          <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" value="{{ Auth::user()->email }}" readonly>
          <div id="emailHelp" class="form-text">You cannot change your email.</div>
        </div>
        <div class="mb-3">
          <label for="currentPassword" class="form-label">Current Password</label>
          <input type="password" class="form-control" id="currentPassword">
        </div>
        <div class="mb-3">
            <label for="newPassword" class="form-label">New Password</label>
            <input type="password" class="form-control" id="newPassword">
          </div>
        <button type="submit" class="btn btn-success">Edit Profile</button>
      </form>
      <button type="button" class="btn btn-danger">Delete Account</button>
</body>
@endsection
