<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
    .block {
        background: #3d3d3d;
        width: 1260px;
        height: 480px;
        display: flex;
        margin-left: auto !important;
        margin-right: auto !important;
        margin-top: 50px;
    }

    .nama {
        color: white;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: bold;
        font-size: 100px;
        padding: 200px;
        padding-top: 330px;
    }
</style>

@extends('layouts.main')

@section('container')

<body style="background-color: black;">
    <div class="block">
        <div class="alignitems">
            <h1 class="nama">{{ Auth::user()->name }}
                <!-- example -->
            </h1>
        </div>
    </div>
</body>
@endsection
