@extends('layouts.main')

@section('container')
    <style>
        .image-override {
            height: 600px !important;
            length: 1600px !important;
        }

    </style>

    <body style="background-color:black">
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active image-override" data-bs-interval="5000">
                        <a href="article/{{ $articles[0]->slug }}">
                            {{-- image yang di caurosel defaultnya kita dulu pake 1600x800 unsplash version --}}
                            <img src="{{ $articles[0]->image }}" class="d-block w-100" alt="...">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <div class="px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                                <h3>{{ $articles[0]->title }}</h3>
                                <p>{{ $articles[0]->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item image-override" data-bs-interval="5000">
                        <a href="article/{{ $articles[1]->slug }}">
                            <img src="{{ $articles[1]->image }}" class="d-block w-100" alt="...">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <div class="px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                                <h3>{{ $articles[1]->title }}</h3>
                                <p>{{ $articles[1]->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item image-override" data-bs-interval="5000">
                        <a href="article/{{ $articles[2]->slug }}">
                            <img src="{{ $articles[2]->image }}" class="d-block w-100" alt="...">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <div class="px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                                <h3>{{ $articles[2]->title }}</h3>
                                <p>{{ $articles[2]->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="row">
                @foreach ($articles->skip(3) as $article)
                    <div class="col-12 col-sm-6 col-lg-4 mb-4 d-flex align-items-stretch">
                        <div class="card text-white bg-dark text-center" style="width: 20rem;">
                            <img src="{{ $article->image }}" class="card-img-top" alt="...">
                            {{-- default image https://source.unsplash.com/1600x800/?{{ $article->category->name }} --}}
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{{ $article->excerpt }}</p>
                                <a href="article/{{ $article->slug }}" class="btn btn-primary mt-auto"
                                    style="background-color:#00C99C !important; border:none">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
@endsection
