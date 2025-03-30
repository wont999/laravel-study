@extends('layouts.main')
@section('content')
    <div>{{$post->id}}. {{$post->title}}</div>
    <div>{{$post->content}}</div>
    <div class="mb-2">
        <a class="btn btn-primary btn-sm" href="{{route('post.index')}}">Back</a>
    </div>
    <div class="mb-2">
        <a class="btn btn-secondary btn-sm" href="{{route('post.edit', $post)}}">Edit</a>
    </div>
    <div class="mb-2">
        <form action="{{route('post.delete', $post)}}" method="post">
            @csrf
            @method('delete')
            <input value="Delete" type="submit" class="btn btn-danger btn-sm">
        </form>
    </div>
@endsection
