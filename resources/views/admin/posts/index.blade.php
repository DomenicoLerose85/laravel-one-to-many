@extends('layouts.admin');

@section('content')
  <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Create a new post</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Creation Date</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
      <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->id}}</a></td>
      <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a></td>
      <td>{{$post->created_at}}</td>
      <td><a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-primary">Edit</a></td>
    </tr>    
    @endforeach
  </tbody>
</table>
@endsection