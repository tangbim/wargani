<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
    .navbar-dark {
        background: black;
        height: 120px;
    }

    .nav-link {
        font-family: 'Poppins';
        font-size: 20px;
        color: white !important;
    }

    .nav-link:hover {
        color: #00C99C !important;
    }

    .nav-item {
        padding: 20px;
    }

    .logo {
        margin-left: -40px;
    }

    .container {
        margin-top: 40px !important;
    }

    .signup {
        margin-left: 200px;
    }

    .signup:hover {
        background-color: #00C99C !important;
    }

    .login {
        background-color: #00C99C;
        border: none;
    }

    .login:hover {
        background-color: #00C98C;
    }

    .logintext:hover {
        color: white;
    }

    .logintext {
        text-decoration: none;
        font-family: 'Poppins';
        color: white;
    }

    .btn {
        width: 140px;
        height: 50px;
    }

    .link-light {
        text-decoration: none !important;
        font-family: 'Poppins';
    }

    .link-light::after {
        content: "";
        position: absolute;
        background-color: #00C95C;
        height: 3px;
        width: 0;
        left: 0;
        bottom: -10px;
        transition: 0.3s;
    }

    .link-light:hover:after {
        width: 100%;
    }

    .active {
        color: #00C99C !important;
        font-weight: bold;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand"> <img src="{{URL::asset('/image/logo.png')}}" alt="logo" width="300px" height="113px" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{($title === 'Articles')? 'active' : ''}}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($title === 'Article Categories')? 'active' : ''}}" href="/categories">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{($title === 'Account')? 'active' : ''}}" href="#">Akun</a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-light rounded-pill signup" type="submit" onclick="location.href='/signup'">
                        <a href="/signup" class="link-light" id="signup">Sign Up</a>
                    </button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-light rounded-pill login" type="submit" onclick="location.href='/login'">
                        <a href="/login" class="logintext" id="login">Login</a>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>