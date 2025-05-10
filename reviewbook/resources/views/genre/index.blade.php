@extends('layout.master')
@section('title')
    Index
@endsection

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($genres as $item)
            <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->name}}</td>
            </tr>
        @empty
            <p>No users</p>
        @endforelse
      
    </tbody>
  </table>

@endsection
