@extends('layout.master')
@section('title')
   Edit Post
@endsection

@section('content')

<form method="POST" action='/post/{{$post->id}}' enctype="multipart/form-data">
    @csrf
    @method('put')

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category</label>
    <select name="category_id" id="" class="form-control">
        <option value="">---Choose Category---</option>
        @forelse ($category as $item)
            @if ($item->id === $post->category_id)
            
            <option value="{{$item->id}}" selected>{{$item->name}}</option>
            @else
            <option value="{{$item->id}}">{{$item->name}}</option>  
            @endif
        @empty
            <option value="">Empty Category</option>
        @endforelse
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Post Title</label>
    <input type="text" class="form-control" value="{{$post->title}}" name="title">
  </div>
  <div class="mb-3">
    <label class="form-label">Post Content</label>
    <textarea name="content" class="form-control" cols="30" rows="10">{{$post->content}}</textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input type="file" class="form-control" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection