@extends('layouts.main')

@section('container')

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
                    <div class="carousel-item active" data-bs-interval="5000">
                        <a href="article/{{ $articles[0]->slug }}">
                            <img src="https://source.unsplash.com/1600x800/?soccer" class="d-block w-100" alt="...">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <div class="px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                                <h3>{{ $articles[0]->title }}</h3>
                                <p>{{ $articles[0]->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <a href="article/{{ $articles[1]->slug }}">
                            <img src="https://source.unsplash.com/1600x800/?soccer" class="d-block w-100" alt="...">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <div class="px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                                <h3>{{ $articles[1]->title }}</h3>
                                <p>{{ $articles[1]->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <a href="article/{{ $articles[2]->slug }}">
                            <img src="https://source.unsplash.com/1600x800/?soccer" class="d-block w-100" alt="...">
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
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="card text-white bg-dark text-center" style="width: 20rem;">
                            {{-- <img src="https://images.unsplash.com/photo-1508098682722-e99c43a406b2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="..."> --}}
                            <img src="https://source.unsplash.com/1600x800/?soccer" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article['title'] }}</h5>
                                <p class="card-text">{{ $article->excerpt }}</p>
                                <a href="article/{{ $article->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
@endsection
