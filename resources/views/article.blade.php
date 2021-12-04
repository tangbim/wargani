<style>
    .text {
        color: white;
        font-family: 'Inter';
    }

    .form-control1 {
        color: white !important;
        height: 70.27px !important;
    }

    .form-control1 {
        border-radius: 40px;
        padding: 20px;
        margin-top: 10px;
        background-color: black !important;
    }

    .masuk {

        font-family: 'Poppins' !important;
        width: 140px;
        height: 50px;
        background-color: #00C99C !important;
        border: none !important;
        font-size: 16px;
    }

    .masukdisabled {

        font-family: 'Poppins' !important;
        width: 200px;
        height: 50px;
        background-color: #606362 !important;
        border: none !important;
        font-size: 16px;
    }

</style>

@extends('layouts.main')

@section('container')

    <body style="background-color: black">


        <div class="container">
            <div class="row justify-content-center mb-5 text-white">
                <div class="col-md-8">
                    <h1 class="mb-3">{{ $article->title }}</h1>

                    <img src="https://source.unsplash.com/1600x700?{{ $article->category->name }}"
                        alt="{{ $article->category->name }}" class="img-fluid">
                    <p class="mt-3">By: {{ $article->user->name }} in <a
                            href="/categories/{{ $article->category->slug }}"
                            class="text-decoration-none">{{ $article->category->name }}</a>
                        {{ $article->created_at->diffForHumans() }}
                    </p>

                    <article class="my-3 fs-5">
                        {!! $article->body !!}
                    </article>

                    <a href="/" class="text-decoration-none d-block mt-3">Back to Articles</a>
                </div>
                <div class="col-md-8">
                    <h1 class="mt-3 text-center">Komentar</h1>
                    @foreach ($comments as $comment)
                        <h3 class="mt-3">
                            {{ $comment->user->name }}
                        </h3>
                        <p class="text-muted" style="margin-top: -8px">{{ $comment->created_at->diffForHumans() }}</p>
                        <p style="margin-top: -16px">{{ $comment->body }}</p>
                    @endforeach

                    @auth
                        <form class=" w-75 mx-auto" method="POST" action="/comment">
                            @csrf
                            <div class="form-floating mt-5">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="article_id" value="{{ $article->id }}">
                                <input type="text" name="body"
                                    class="form-control form-control1 @error('name') is-invalid @enderror" id="comment"
                                    placeholder="Comment">
                                <label class="text" for="body" :value="__('Comment')">Tuliskan Komentar Anda</label>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col text-center mt-2">
                                <button class="masuk btn-outline-light rounded-pill" type="submit">Kirim</button>
                            </div>
                        </form>
                    @endauth
                    @guest
                        <form class="w-75 mx-auto" method="POST" action="/comment">
                            @csrf
                            <div class="form-floating mt-5">
                                <input type="text" name="comment" class="form-control @error('name') is-invalid @enderror"
                                    id="comment" placeholder="Comment" disabled>
                                <label class="text text-dark p-1 p-md-1" for="comment" :value="__('Comment')">You must log in
                                    first to comment!</label>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </body>

    {{-- <body style="background-color: black;">
        <article class="text-white">
            <h1 class="mb-5">{{ $article->title }}</h1>

<p>By: Lintang Bima in <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a>
</p>

{!! $article->body !!}
</article> --}}
    </body>
@endsection
