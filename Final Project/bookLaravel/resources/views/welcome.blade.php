@extends('layout.master')
@section('title')
   Home
@endsection

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

   <ul>
      <li><a href="/about">About</a></li>
      <li><a href="/contact">Contact</a></li>
   </ul>
@endsection
 