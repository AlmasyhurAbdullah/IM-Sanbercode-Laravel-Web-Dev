@extends('layout.master')
@section('title')
   Show Post
@endsection

@section('content')

<a href="/post/create" class="btn btn-primary my-3">Input</a>

<div class="row">
    @forelse ($post as $item)
        <div class="col-4">
                <div class="card" style="width: 18rem;">
                <img src="{{asset('image/'.$item->image)}}" class="card-img-top" height= "300px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-text">{{ Str::limit($item->content, 100) }}</p>
                    <div class="d-grid gap-2">
                        <a href="/post/{{$item->id}}" class="btn btn-info">Read more</a>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="d-grid gap-2">
                                <a href="/post/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <form action="/post/{{$item->id}}" method="post">
                                @csrf
                                @method("DELETE")
                                    <div class="d-grid gap-2">
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @empty
        <h1>Empty</h1>
    @endforelse

</div>

@endsection