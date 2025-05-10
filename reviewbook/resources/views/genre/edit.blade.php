@extends('layout.master')
@section('title')
    Edit Genre
@endsection

@section('content')

<form method="POST" action="/genre/{{ $genres->id }}">
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
      <label class="form-label">Genre Name</label>
      <input type="" name="name" class="form-control" value={{ $genres->name }}>
    </div>
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" class="form-control" cols=30 rows=10 >{{ $genres->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
