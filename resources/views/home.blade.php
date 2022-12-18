@extends('layouts.app')

@section('content')
    <h2 class="text-center mt-5 p-5">Sono la pagina Home</h2>
    <div class="container">
        <div class="row row-cols-2 g-5">

            @foreach ($movies as $movie)
                <div class="col">
                    <a href="">
                        <img src="{{ $movie->image }}" alt="">
                    </a>
                    <h2>{{ $movie->title }}</h2>
                </div>
            @endforeach
        </div>
    </div>
@endsection
