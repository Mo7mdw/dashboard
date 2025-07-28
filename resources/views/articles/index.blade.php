@extends('layout')

@section('content')
<div class="container mt-4">
    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Add Article</a>

    @foreach ($articles as $article)
        <div class="card mb-2">
            <div class="card-body">
                <h5>{{ $article->title }}</h5>
                <p>{{ $article->content }}</p>
                <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display:inline-block">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
