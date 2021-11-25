<?php
//sample view until frontend ready
?>
<h1>Selamat datang di HOME</h1>
@foreach ($articles as $article)
<article class="mb-5">
    <h2>
        <a href="article/{{$article->slug}}">{{ $article["title"] }}</a>
    </h2>
    <p>{{$article->excerpt}}</p>
</article>
@endforeach