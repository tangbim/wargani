<style>
    .text {
        color: white;
        font-family: 'Inter';
    }

    .form-control {
        color: white !important;
        height: 70.27px !important;
    }

    .form-control:focus {
        background-color: black !important;
    }

    .judul {
        font-family: 'Poppins';
        color: white;
        font-size: 55px !important;
        letter-spacing: 1px;
    }

    .form-signin input {
        background-color: black;
        border-radius: 40px;
        padding: 20px;
        margin-top: 10px;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
    }

    .masuk {
        font-family: 'Poppins';
        width: 140px;
        height: 50px;
        font-size: 16px;
        background-color: #00C99C !important;
        border: none !important;
    }

    .link {
        text-decoration: none;
        color: #00C99C;
    }

    .link:hover {
        color: lime;
    }
</style>

@extends('layouts.main')

@section('container')

<body style="background-color: black;">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin">
                <h1 class="judul mt-5 fw-bold text-center">Info Olahraga Terkini dan JOSSS</h1>
                <small class="text d-block mb-5 wi text-center w-75 mx-auto">Memberikan info terkini seputar olahraga terkini dan pastinya aktual dari seantero jagad raya</small>
                <form class=" w-75 mx-auto" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" :value="old('email')" required autofocus>
                        <label class="text" for="email" :value="__('Email')">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required autocomplete="current-password">
                        <label class="text" for="password" :value="__('Password')">Password</label>
                    </div>
                    <div class="col text-center">
                        <button class="masuk btn-outline-light rounded-pill " type="submit">Login</button>
                    </div>
                </form>
                <small class="text d-block text-center mt-3 wi" style="color:white">Not registered? <a class="link" href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>

</body>
@endsection
