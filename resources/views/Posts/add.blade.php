@extends('master')



@section('content')





<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">

        <a href="{{route('addCategory')}}" class="btn btn-outline-danger">Add Category</a>
        <a href="{{route('allCategory')}}" class="btn btn-outline-success">All Category</a>
      <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
      <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
      <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
    <form action="" method="POST">
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="title" id="title" placeholder="Title of the post">
            <p class="help-block text-danger"></p>
          </div>
        </div>

        <br>

        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <select name="category_id" id="category">
              <option value="category">category</option>
              <option value="1">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
            </select>
            <p class="help-block text-danger"></p>
          </div>
        </div>

        <br>


        <div class="control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
           <input type="file" name="image" id="image">
          </div>
        </div>

        <br>


        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <textarea name="details" id="" cols="30" rows="5" placeholder="Details of the post"></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        
        <br>
        
        <div id="success"></div>
        <div class="form-group">
          <button type="submit" class="btn btn-outline-primary" id="sendMessageButton">Send</button>
        </div>
      </form>
    </div>
  </div>


    
@endsection