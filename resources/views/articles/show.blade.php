@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>{{ $article->title }}</h2>
    <p>{{ $article->content }}</p>

    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
