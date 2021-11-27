@extends('layouts.main')

@section('container')

<body style="background-color: black;">
    <article>
        <h1 class="mb-5">{{ $article->title }}</h1>

        <p>By: Lintang Bima in <a href="/categories/{{$article->category->slug}}">{{$article->category->name}}</a></p>

        {!! $article->body !!}
    </article>

    <h2>KOMENTAR</h2>
    @foreach ($comments as $comment)
    <article class="mb-5">
        <h3>
            {{ $comment["name"] }}
        </h3>
        <p>{{$comment->body}}</p>
    </article>
    @endforeach

    <a href="/">Back to Home</a>
</body>
@endsection