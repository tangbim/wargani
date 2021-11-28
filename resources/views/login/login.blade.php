<style>
    .text {
        color: white;
        font-family: 'Poppins';
    }

    .judul {
        font-family: 'Poppins';
        color: white;
        font-size: 55px !important;
        letter-spacing: 1px;
    }

    .form-signin input {
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
        background-color: #00C99C !important;
        border: none !important;
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
                <form class=" w-75 mx-auto">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="col text-center">
                        <button class="masuk btn-outline-light rounded-pill " type="submit">Login</button>
                    </div>
                </form>
                <small class="text d-block text-center mt-3 wi" style="color:white">Not registered? <a href="/signup">Register Now!</a></small>
            </main>
        </div>
    </div>

</body>
@endsection