@extends('layout.master')
@section('title')
    Detail Genre
@endsection

@section('content')

    <h1>{{ $genres->name}}</h1>
    <p>{{ $genres->description}}</p>

@endsection