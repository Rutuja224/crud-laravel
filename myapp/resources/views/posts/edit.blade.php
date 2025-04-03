@extends('layout')
@section('content')
<div class="container">
    <form action="{{route('posts.update',$post)}}" method="POST">
        @csrf @method('PUT')

        <input type="text" name="name" value="{{$post->name}}" id="name" placeholder="Enter name" class="form-control">
        <input type="email" name="email" value="{{$post->email}}" id="email" placeholder="Enter email" class="form-control"
        >
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
