@extends('master')



@section('content')





<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <h2 class="text-center text-uppercase text-info">Edit Post</h2>
    <form action="{{url('category/update/'.$category->id)}}"  method="Post">


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
          <input type="text" class="form-control" name="name" id="title" value="{{$category->name}}">
            <p class="help-block text-danger"></p>

            
          </div>
        </div>

        <br>

        <div class="control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="text" name="slug" value="{{$category->slug}}" >
          </div>
        </div>

        <br>


        
        <br>
        
        <div id="success"></div>
        <div class="form-group">
          <button type="submit" class="btn btn-outline-success" >Update</button>
        </div>
      </form>
    </div>
    
  </div>


    
@endsection