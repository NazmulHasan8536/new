@extends('master')
@section('content')
<div class="container">

  <a href="{{route('addPost')}}" class="btn btn-outline-info">Create Post</a>
  <a href="{{route('allPostOne')}}" class="btn btn-outline-success">All Post</a>
  <a href="{{route('addCategory')}}" class="btn btn-outline-dark">Create Category</a>

  <br>


    <table class="table text-center table-sm">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Category Details</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $users as $user ) 
          <tr>
           <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->slug}}</td>
            <td>
                <a href="{{url('category/edit/'.$user->id)}}" class="btn btn-outline-info">Edit</a>
                <a href="{{url('category/delete/'.$user->id)}}" class="btn btn-outline-danger" id="delete">DELETE</a>
                <a href="{{URL::to('category/view/'.$user->id)}}" class="btn btn-outline-primary">view</a>
            </td>
          </tr>
          @endforeach 
        </tbody>
       </table>

</div>
    
    
@endsection