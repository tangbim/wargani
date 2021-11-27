<!-- on progress -->
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
    .col {
        font-family: 'Poppins';
        font-size: 20px;
        color: white !important;
        text-decoration: none;
    }

    .col:hover {
        color: #00C99C !important;
    }

    .col {
        padding: 20px;
    }

    .active {
        color: #00C99C !important;
        font-weight: bold;
    }
</style>
<section class="text-center">
    <img src="{{URL::asset('/image/logo.png')}}" style="width: 250px; padding-top: 122px;" alt="" />
    <div class="container text-center" style="width: 600px">
        <div class="row">
            <a href="/" class="col {{($title === 'Articles')? 'active' : ''}}">Beranda</a>
            <a href="/categories" class="col {{($title === 'Article Categores')? 'active' : ''}}">Kategori</a>
            <a href="#" class="col mb-4 {{($title === 'Account')? 'active' : ''}}"> Akun</a>
        </div>
    </div>
    <div class="position-absolute top-120 start-50 translate-middle mt-4">
        <hr style="color: white; height: 3px; size: 10px; width: 1000px" />
    </div>
    <p style="text-align: center; color: white; margin-top: 80px; font-family:'Poppins'">Wargani</p>
</section>