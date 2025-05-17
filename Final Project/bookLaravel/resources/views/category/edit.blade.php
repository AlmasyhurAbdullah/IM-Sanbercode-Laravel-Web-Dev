@extends('layout.master')
@section('title')
   Edit Category
@endsection

@section('content')

<form method="POST" action='/category/{{$category->id}}'>
    @csrf
    @method('PUT')

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
    <label for="exampleInputEmail1" class="form-label">Category Name</label>
    <input type="text" class="form-control" name="name" value="{{$category->name}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Category Description</label>
    <textarea name="description" class="form-control" cols="30" rows="10">{{$category->description}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection