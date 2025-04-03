@extends('layout')
@section('content')
<div class="container">
    <form method="POST" action="{{route('posts.store')}}">
        @csrf @method('POST')

        <input type="text" name="name" id="name" placeholder="Enter name" class="form-control">
        <input type="email" name="email" id="email" placeholder="Enter email" class="form-control"
        >
        <button class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
