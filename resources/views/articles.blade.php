@extends('layouts.main')

@section('container')
@foreach ($articles as $article)

<body style="background-color:black">
    <article class="mb-5">
        <h2>
            <a href="article/{{$article->slug}}">{{ $article["title"] }}</a>
        </h2>
        <p>{{$article->excerpt}}</p>
    </article>
</body>
@endforeach
@endsection