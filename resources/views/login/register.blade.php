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
                    <form class=" w-75 mx-auto" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                                placeholder="Name" required value="{{ old('name') }}">
                            <label class="text" for="name" :value="__('Name')">Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Email" required value="{{ old('email') }}">
                            <label class="text" for="email" :value="__('Email')">Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Password" required type="password">
                            <label class="text" for="password" :value="__('Password')">Password</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password_confirmation"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Confirm Password" required>
                            <label class="text" for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>
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
                            @if ($errors->any())
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </symbol>
                                  </svg>
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                              </div>
                        @endif
                </main>
            </div>
        </div>

    </body>
@endsection
