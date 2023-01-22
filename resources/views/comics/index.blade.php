@extends('admin.layouts.base')

@section('content')
<div class="bg_container">
        <h1 style="color: white">Comics list</h1>
        <div class="cards_box container">
            @foreach ($comics as $comic)
                <div class="card">
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                        <div class="contents">
                            <img src="{{ $comic->thumb }}" alt="image">
                            <h2>{{ $comic->title }}</h2>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
