@extends('layouts.main')

@section('container')

    <body style="background-color: black">


        <div class="container">
            <div class="row justify-content-center mb-5 text-white">
                <div class="col-md-8">
                    <h1 class="mb-3">{{ $article->title }}</h1>

                    <img src="https://source.unsplash.com/1600x700?{{ $article->category->name }}"
                        alt="{{ $article->category->name }}" class="img-fluid">
                    <p class="mt-3">By: Lintang Bima in <a
                            href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a>
                    </p>

                    <article class="my-3 fs-5">
                        {!! $article->body !!}
                    </article>

                    <a href="/" class="text-decoration-none d-block mt-3">Back to Articles</a>
                </div>
            </div>
        </div>
    </body>

    {{-- <body style="background-color: black;">
        <article class="text-white">
            <h1 class="mb-5">{{ $article->title }}</h1>

            <p>By: Lintang Bima in <a
                    href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a>
            </p>

            {!! $article->body !!}
        </article> --}}

    <h2>KOMENTAR</h2>
    @foreach ($comments as $comment)
        <article class="mb-5">
            <h3>
                {{ $comment->name }}
            </h3>
            <p>{{ $comment->body }}</p>
        </article>
    @endforeach

    <a href="/">Back to Home</a>
    </body>
@endsection
