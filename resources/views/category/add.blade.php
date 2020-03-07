@extends('master')



@section('content')





<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">

        <a href="{{route('addPost')}}" class="btn btn-outline-info">Create Post</a>
         <a href="{{route('allPostOne')}}" class="btn btn-outline-success">All Post</a>
        {{-- <a href="{{route('allCategoryOne')}}" class="btn btn-outline-success">All Post</a> --}}
      <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
      <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
      <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
    <form action="{{route('allCategory')}}"  method="Post">


      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      
      @csrf
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Title</label>
            <input type="text" class="form-control" name="name" placeholder="title" id="title" placeholder="Title of the post">
            <p class="help-block text-danger"></p>
          </div>
        </div>

        <br>

        <div class="control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="text" name="slug" placeholder="write something about the category">
          </div>
        </div>

        <br>


        
        <br>
        
        <div id="success"></div>
        <div class="form-group">
          <button type="submit" class="btn btn-outline-success" >Add Category</button>

        <a href="{{route('allCategoryOne')}}" class="btn btn-outline-secondary">All Category</a>
        </div>
      </form>
    </div>
    
  </div>


    
@endsection