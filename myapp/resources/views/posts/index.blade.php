@extends('layout')
@section('content')

<div class="container">
    <a href="{{route('posts.create')}}" class="btn btn-primary">Create Post</a>
</div>
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email </th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr class="">
                <td scope="row">{{$post->name}}</td>
                <td>{{$post->email}}</td>
                <td>
                    <a href="{{route('posts.edit',$post)}}" class="btn btn-primary">Edit</a>
                    <form action="{{route('posts.destroy', $post)}}" method="POST" style="display: :inline-block">
                        @csrf @method('DELETE')
                        <button class="btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>



@endsection
