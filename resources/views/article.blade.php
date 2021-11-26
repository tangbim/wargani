<?php
//sample view until frontend ready, in progress, hehe
?>
<article>
    <h1 class="mb-5">{{ $article->title }}</h1>

    <p>By: Lintang Bima in <a href="/categories/{{$article->category->slug}}">{{$article->category->name}}</a></p>

    {!! $article->body !!}
</article>

<a href="/">Back to Home</a>