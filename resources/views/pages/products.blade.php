{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <img src="{{Vite::asset('resources/img/happy-dogjpg.jpg')}}" alt="">
    <div class="dog">
        ciao
    </div>
</body>
</html> --}}
@extends('layout.app')

@section('main-content')
    <section class="book-container">
        {{-- per ogni elemento presente in $books itera con l'elemento che si chiamerà $book --}}
        @foreach ($books as $book)
            <article class="book-item">
                <img src="{{ $book['thumb'] }}" class="main-logo" alt="">
                <p class="uppercase">
                    {{$book['title']}}
                </p>
                <p>
                    {{ Str::limit($book['description'], 200) }}
                </p>
                <p class="italic">
                    {{$book['price']}}
                </p>
                <p>
                    {{$book['series']}}
                </p>
                <p class="italic">
                    {{$book['sale_date']}}
                </p>
                <p class="italic">
                    {{$book['type']}}
                </p>
            </article>
        @endforeach
    </section>
@endsection
