@extends('layouts.main')
@section('content')
    <form action="{{route('post.update', $post->id)}}" method="post">
        @csrf
        @method("patch")
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input value="{{old('post->title')}}" class="form-control" id="title" name="title" placeholder="Title">
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content"
                      placeholder="Content">{{$post->content}}</textarea>
            @error('content')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input value="{{$post->image}}" class="form-control" id="image" name="image" placeholder="Image">
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category">Category</label>
            <select class="form-select mb-3" id="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{$post->category->id == $category->id ? ' selected' : ''}}
                        value="{{$category->id}}">{{$category->title}}
                    </option>
                @endforeach
            </select>
            @error('category_id')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tags">Tags</label>
            <select class="form-select mb-3" multiple id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option
                        @foreach($post->tags as $postTag)
                            {{$postTag->id==$tag->id ? ' selected' : ''}}
                            value="{{$tag->id}}">{{$tag->title}}
                        @endforeach
                    </option>
                @endforeach
            </select>
            @error('tags[]')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
