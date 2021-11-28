<style>
    .form-signup input {
        border-radius: 40px;
        padding: 20px;
        margin-top: 10px;
    }

    .form-signunp .form-floating:focus-within {
        z-index: 2;
    }

    .form-signup input[type="email"] {
        margin-bottom: -1px;
    }

    .form-signup input[type="password"] {
        margin-bottom: 10px;
    }
</style>

@extends('layouts.main')

@section('container')

<body style="background-color: black;">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signup">
                <h1 class="h3 mb-3 fw-normal text-center">Sign Up</h1>
                <form>
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="username" placeholder="username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Signup</button>
                </form>
                <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login!</a></small>
            </main>
        </div>
    </div>

</body>
@endsection