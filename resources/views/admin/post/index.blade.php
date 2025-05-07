@extends('layouts.admin')

@section('content')
    <div>
        <div>
            <a href="{{route('post.create')}}" class="btn btn-primary">Create</a>
        </div>
        @foreach($posts as $post)
            <div>{{$post->id}}. <a class="link-primary" href="{{route('post.show', $post->id)}}"> {{$post->title}}</a>
            </div>
        @endforeach

        <div>
            {{$posts->withQueryString()->links()}}
        </div>
    </div>
@endsection



