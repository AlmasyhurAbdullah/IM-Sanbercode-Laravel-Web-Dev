@extends('layout.master')
@section('title')
    Register
@endsection

@section('content')

    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

    <form>
        <label>First Name:</label><br><br>
        <input type="text"><br><br>

        <label>Last Name:</label><br><br>
        <input type="text"><br><br>

        <label>Gender</label><br><br>
        <input type="radio" name="status">Male<br>
        <input type="radio" name="status">Female<br>
        <input type="radio" name="status">Other<br><br>

        <label>Nationality</label><br><br>
        <select name="Nationality">
            <option value="">Indonesian</option>
            <option value="">Malaysian</option>
            <option value="">Singaporean</option>
        </select><br><br>

        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="status">Indonesia<br>
        <input type="checkbox" name="status">English<br>
        <input type="checkbox" name="status">Other<br><br>

        <label>Bio:</label><br><br>
        <textarea rows="5"></textarea><br><br>

        <a href="welcome">Sign Up</a>
    </form>
@endsection