<style>
    .nama {
        color: white;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: bold;
        font-size: 80px;
    }
</style>

@extends('layouts.main')

@section('container')

<body style="background-color:black">
    <div class="card bg-dark text-white">
        <img class="card-img" src="https://source.unsplash.com/1600x480/?soccer" alt="Card image">
        <div class="card-img-overlay d-flex align-items-start flex-column">
            <h1 class="nama mt-auto card-title">{{ Auth::user()->name }}</h`>
        </div>
    </div>
</body>
@endsection