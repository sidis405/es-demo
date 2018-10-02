@extends('layouts.app')

@section('content')

@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->preview }}</p>
    <small>{{ $post->created_at->diffForHumans() }}</small>
@endforeach

@stop
