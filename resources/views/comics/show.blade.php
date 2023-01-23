@extends('admin.layouts.base')

@section('content')
    <div class="bg_container">
        <div class="cards_box container">
            <div class="card">
                <div class="contents" style="color: white">
                    <img src="{{ $comic->thumb }}" alt="image">
                    <h2>Title: {{ $comic->title }}</h2>
                    <p>Description: {{ $comic->description }}</p>
                    <div>Price: {{ $comic->price }}</div>
                    <div>Series: {{ $comic->series }}</div>
                    <div>Sale date: {{ $comic->sale_date }}</div>
                    <div>Type: {{ $comic->type }}</div>
                </div>
            </div>
        </div>
        <div class="actions">
            <a href="{{ route('comics.edit', ['comic' => $comic]) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
