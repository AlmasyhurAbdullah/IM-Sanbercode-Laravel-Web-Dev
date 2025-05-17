@extends('layout.master')
@section('title')
   Home
@endsection

@section('content')
    <form action="/welcome" method="POST"> 
        @csrf
        <label>Title</label> <br>
        <input type="text" name="title"> <br> <br>
        <label>Message</label> <br>
        <textarea name="message" id="" cols="30" rows="10"></textarea> <br>
        <input type="submit" value="Send">
    </form>
@endsection