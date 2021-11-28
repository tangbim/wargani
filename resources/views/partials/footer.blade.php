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

    .footer-item {
        padding: 20px;
    }

    .active {
        color: #00C99C !important;
        font-weight: bold;
    }
</style>
<section class="text-center">
    <img src="{{URL::asset('/image/logo.png')}}" style="width: 250px; padding-top: 122px;" alt="" />
    <div class="container text-center" style="width: 100vw">
        <div class="row">
            <a href="/" class="col footer-item {{($title === 'Articles')? 'active' : ''}}">Home</a>
            <a href="/categories" class="col footer-item {{($title === 'Article Categores')? 'active' : ''}}">Categories</a>
            <a href="#" class="col mb-4 footer-item {{($title === 'Account')? 'active' : ''}}">Profile</a>
        </div>
    </div>
    <div class="position-absolute top-120 start-50 translate-middle mt-4">
        <hr style="color: white; height: 3px; size: 10px; width: 98vw" />
    </div>
    <p style="text-align: center; color: white; margin-top: 80px; font-family:'Poppins'">Wargani</p>
</section>
