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
        @if(session()->has('success'))
        <div class="alert alert-success mt-2" role="alert">
            {{ session('success') }}
        </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger d-flex align-items-center mt-2" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </symbol>
                </svg>
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <form class="text-white mt-3" method="post" action="/account/{{ auth()->user()->id }}/edit">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nameInput" class="form-label">Name</label>
                <input type="text" class="form-control" id="nameInput" name="nameInput" aria-describedby="emailHelp"
                    value="{{ Auth::user()->name }}">
            </div>
            <div class="mb-3">
                <label for="emailInput" class="form-label">Your Email Address</label>
                <input type="email" class="form-control" id="emailInput" name="emailInput" aria-describedby="emailHelp"
                    value="{{ Auth::user()->email }}" readonly>
                <div id="emailHelp" class="form-text">You cannot change your email.</div>
            </div>
            <div class="mb-3">
                <label for="currentPassword" class="form-label">Current Password</label>
                <input type="password" class="form-control" id="currentPassword" name="currentPassword" placeholder="Required">
            </div>
            <div class="mb-3">
                <label for="newPassword" class="form-label">New Password</label>
                <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Optional">
            </div>
            <div class="mb-3">
                <label for="newPasswordConfirm" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="newPassword_confirmation" name="newPassword_confirmation" placeholder="Optional">
            </div>
            <button type="submit" class="btn btn-success">Edit Profile</button>
        </form>
        <form action="/account/{{ auth()->user()->id }}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete Account</button>
        </form>
    </body>
@endsection
