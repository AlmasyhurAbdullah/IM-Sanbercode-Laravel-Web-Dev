@extends('layout.master')
@section('title')
   Detail Category
@endsection

@section('content')
    <h1>{{$category->name}}</h1>
    <p>{{$category->description}}</p>

    <a href="/category" class="btn btn-secondary btn-sm">Return</a>
@endsection
