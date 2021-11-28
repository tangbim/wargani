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

    .form-register input {
        border-radius: 40px;
        padding: 20px;
        margin-top: 10px;
        background-color: black;
    }

    .form-register .form-floating:focus-within {
        z-index: 2;
    }

    .form-register input[type="email"] {
        margin-bottom: -1px;
    }

    .form-register input[type="password"] {
        margin-bottom: 10px;
    }

    .masuk {

        font-family: 'Poppins' !important;
        width: 140px;
        height: 50px;
        background-color: #00C99C !important;
        border: none !important;
        font-size: 16px;
    }

    .link {
        color: #00C99C;
        text-decoration: none;
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
                <main class="form-register">
                    <h1 class="judul mt-5 fw-bold text-center">Info Olahraga Terkini dan JOSSS</h1>
                    <small class="text d-block mb-5 wi text-center w-75 mx-auto">Memberikan info terkini seputar olahraga
                        terkini dan pastinya aktual dari seantero jagad raya</small>
                    <form class=" w-75 mx-auto" method="POST" action="/register">
                        @csrf
                        {{-- name --}}
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                                placeholder="Name" required value="{{ old('name') }}">
                            <label class="text" for="name">Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- username --}}
                        <div class="form-floating">
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                                id="username" placeholder="Username" required>
                            <label class="text" for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="name@example.com" required>
                            <label class="text" for="email">Email</label>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- password --}}
                        <div class="form-floating">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Password" required>
                            <label class="text" for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col text-center">
                            <button class="masuk btn-outline-light rounded-pill" type="submit">Sign Up</button>
                        </div>
                    </form>
                    <small class="text d-block text-center mt-3">Already Registered? <a class="link"
                            href="/login">Login!</a></small>
                </main>
            </div>
        </div>

    </body>
@endsection
