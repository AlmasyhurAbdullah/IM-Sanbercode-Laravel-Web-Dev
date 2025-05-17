@extends('layout.master')
@section('title')
   Dashboard
@endsection

@section('content')
    <h1>Selamat Datang</h1> <br>
    <p>{{$title}}</p> <br>
    <p>{{$message}}</p>
@endsection