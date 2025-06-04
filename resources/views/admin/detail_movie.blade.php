@extends('layouts.template')

@section('title', 'Detail Movie')

@section('content')
<style>
    body {
        background-color: #ffffff; /* putih bersih */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
    }

    h2 {
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 15px;
        color: #333;
    }

    .container-detail {
        max-width: 1000px;
        margin: 40px auto;
        background-color: #fff;
        border-radius: 10px;
        padding: 25px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        display: flex;
        gap: 25px;
        align-items: flex-start;
    }

    .container-detail img {
        width: 300px;
        height: auto;
        border-radius: 8px;
        object-fit: cover;
    }

    .movie-info {
        flex: 1;
    }

    .movie-info p {
        color: #444;
        line-height: 1.6;
        margin-bottom: 8px;
    }

    .movie-info .category {
        font-style: italic;
        font-size: 14px;
        color: #666;
    }

    .btn-back {
        background-color: #abb6ab;
        color: white;
        padding: 6px 14px;
        border: none;
        border-radius: 6px;
        margin-top: 10px;
        display: inline-block;
        text-decoration: none;
        font-size: 14px;
    }

    .btn-back:hover {
        background-color: #388e3c;
    }
</style>

<h2 style="text-align:center;">Detail Movie</h2>

@if ($movie)
    <div class="container-detail">
        <img src="{{ asset($movie->cover_image) }}" alt="{{ $movie->title }}">

        <div class="movie-info">
            <h3>{{ $movie->title }}</h3>
            <p>{{ $movie->synopsis }}</p>
            <p><strong>Year:</strong> {{ $movie->year }}</p>
            <p><strong>Actors:</strong> {{ $movie->actors }}</p>
            <p class="category"><strong>Category:</strong> {{ $movie->category->category_name ?? '-' }}</p>

            <a href="{{ route('dataMovie') }}" class="btn-back">Back</a>
        </div>
    </div>
@else
    <div class="alert alert-warning text-center" style="margin: 50px auto; max-width: 600px;">
        Data movie tidak ditemukan.
    </div>
    <div style="text-align:center;">
        <a href="{{ route('dataMovie') }}" class="btn-back">Kembali</a>
    </div>
@endif
@endsection
