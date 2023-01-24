@extends('admin.layouts.base')

@section('content')
    <div class="bg_container container">
        <h1 class="p-5 text-center" style="color: white">Comics list</h1>
        <div class="row mb-5">
            @if (session('success_delete'))
                <div class="alert alert-success">
                    ID: {{ session('success_delete') }} eliminated successfully
                </div>
            @endif
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
                        <button class="btn btn-danger btn_delete m-1" data-id="{{ $comic->id }}">Delete</button>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $comics->links() }}
        <a href="{{ route('comics.create', ['comic' => $comic]) }}" class="btn btn-info m-1">Create</a>
        @include('admin.partials.delete_confirm')
    </div>
@endsection
