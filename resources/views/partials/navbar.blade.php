<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
    .navbar-dark {
        background: black;
        height: 120px;
    }

    .nav-link {
        font-family: 'Poppins';
        font-size: 18px;
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
                    <a class="nav-link active" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Akun</a>
                </li>
            </ul>
        </div>
    </div>
</nav>