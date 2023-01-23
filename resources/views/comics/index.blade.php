@extends('admin.layouts.base')

@section('content')
    <div class="bg_container container">
        <h1 class="p-5 text-center" style="color: white">Comics list</h1>
        <div class="row mb-5">
            @foreach ($comics as $comic)
                <div class="col">
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" style="color: white">
                        <div class="contents">
                            <img src="{{ $comic->thumb }}" alt="image">
                            <h2>{{ $comic->title }}</h2>
                        </div>
                    </a>
                    <div class="actions">
                        <a href="{{ route('comics.edit', ['comic' => $comic]) }}" class="btn btn-warning m-1">Edit</a>
                        <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger m-1">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $comics->links() }}
    </div>
@endsection
