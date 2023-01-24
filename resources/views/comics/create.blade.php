@extends('admin.layouts.base')

@section('content')
    <div class="bg_container container p-5" style="color: white">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('comics.store') }}">
            @csrf
            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="invalid-feedback">
                        Please choose a image.
                    </div>
                @enderror
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                @error('title')
                    <div class="invalid-feedback">
                        Please choose a title.
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3"></textarea>
                @error('description')
                    <div class="invalid-feedback">
                        Please choose a description.
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
                @error('price')
                    <div class="invalid-feedback">
                        Please choose a price.
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series">
                @error('series')
                    <div class="invalid-feedback">
                        Please choose a series.
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date">
                @error('sale_date')
                    <div class="invalid-feedback">
                        Please choose a sale_date.
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type">
              @error('type')
                    <div class="invalid-feedback">
                        Please choose a type.
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
