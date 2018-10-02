@extends('layouts.app')

@section('content')

<h2>{{ $post->title }}</h2>
<p>{{ $post->preview }}</p>
<p>{{ $post->body }}</p>
<p>Category: {{ $post->category->name }}</p>
<p>Author: {{ $post->user->name }}</p>

@stop
