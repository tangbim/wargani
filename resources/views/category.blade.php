<style>
    .judul {
        color: white;
        font-family: 'Poppins';
    }

</style>
@extends('layouts.main')

@section('container')

    <body style="background-color: black;">
        <h1 class="judul mb-5">Post Category: {{ $category }}</h1>

        <div class=row>
            @foreach ($articles as $article)
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    <div class="card text-white bg-dark text-center" style="width: 20rem;">
                        {{-- <img src="https://images.unsplash.com/photo-1508098682722-e99c43a406b2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="..."> --}}
                        <img src="https://source.unsplash.com/1600x800/?{{ $article->category->name }}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article['title'] }}</h5>
                            <p class="card-text">{{ $article->excerpt }}</p>
                            <a href="article/{{ $article->slug }}" class="btn btn-primary"
                                style="background-color:#00C99C !important; border:none">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
