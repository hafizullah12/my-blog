@extends('layouts.app')
@section('content')
<div class="container">
@include('admin.message')
<button class="btn btn-warning pull-right"><a href="{{route('post.index')}}">Show All Posts</a></button>
<div class="panel panel-primary">
    <div class="panel-heading">Add New Post</div>
    <div class="panel-body">
    {!! Form::open(['action'=>'PostController@store','files'=>true]) !!}
    <div class="form-group"> 
    {!! Form::label('Title') !!}
    {!! Form::text('title',null,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('Category') !!}
    <select name="category_id" id="" class="form-control">
    <option value="">Select Category</option>
    @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
      </select>
    </div>
    <div class="form-group">
    {!! Form::label('Description') !!}
    <div id="summernote">
    {!! Form::textarea('description',null,['class' => 'form-control']) !!}	
    </div>
    </div>
    <div class="form-group">
    {!! Form::label('Feature Image') !!}
    {!! Form::file('feature_image',null,['class' => 'form-control']) !!}	
    </div>
    <div class="form-group">
    	{!! Form::label('Status') !!}
      <select name="status" id="" class="form-control">
      <option value="">Select Option</option>
      <option value="published">Published</option>
      <option value="unpublished">Unpublished</option>
      <option value="best1">Best_1</option>
      <option value="best2">Best_2</option>
      <option value="best3">Best_3</option>
      <option value="popular">Popular</option>
      </select>
    </div>
    <div class="form-group">
    	<input type="submit" class="btn btn-success btn-block" value="Save">
    </div>
   
    {!! Form::close() !!}
	</div>
  </div>
</div>
@endsection

@section('script')
<script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100
      });
    </script>
@endsection