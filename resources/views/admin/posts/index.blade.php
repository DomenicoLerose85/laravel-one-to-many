@extends('layouts.admin');

@section('content')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Creation Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
      <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->id}}</a></td>
      <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a></td>
      <td>{{$post->created_at}}</td>
    </tr>    
    @endforeach
  </tbody>
</table>
@endsection