@extends('master')

@section('content')

    <div class="container">
        <div class="row">

           <ol >
           <li> CATEGORY ID: {{$category->id}}</li>
           <li>CATEGORY NAME: {{$category->name}}</li>
           <li>CATEGORY SLUG: {{$category->slug}}</li>
           <li>CREATED TIME: {{$category->created_at}}</li>
           <li>UPDATED TIME: {{$category->updated_at}}</li>
           </ol>
        </div>
        <a href="{{url('category/edit/'.$category->id)}}" class="btn btn-outline-success">Edit</a>
        <a href="{{url('category/delete/'.$category->id)}}" class="btn btn-outline-danger" id="delete">DELETE</a>
    </div>
    
@endsection