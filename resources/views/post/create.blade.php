@extends('layouts.main')
@section('content')
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input value="{{old('title')}}" class="form-control" id="title" name="title" placeholder="Title">
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" placeholder="Content">{{old('content')}}</textarea>
            @error('content')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input value="{{old('image')}}" class="form-control" id="image" name="image" placeholder="Image">
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category">Category</label>
            <select value="{{old('category')}}" class="form-select mb-3" id="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{old('category_id')==$category->id ? ' selected' : ''}}
                        value="{{$category->id}}">{{$category->title}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tags">Tags</label>
            <select class="form-select mb-3" multiple id="tags" name="tags[]">
                @foreach($tags as $tag)

                    <option
                        {{old('tags') != null && in_array($tag->id, old('tags')) ? 'selected' : ''}}
                        value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
@endsection
