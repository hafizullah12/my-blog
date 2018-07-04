@extends('layouts.app')
@section('content')
<div class="container">
@include('admin.message')
<button class="btn btn-warning pull-right">
<a href="{{route('category.index')}}">Show All Posts</a></button>
<div class="panel panel-primary">
    <div class="panel-heading">Add New Category</div>
    <div class="panel-body">
    {!! Form::open(['action'=>'CategoryController@store','files'=>true]) !!}
    <div class="form-group"> 
    {!! Form::label('Name') !!}
    {!! Form::text('name',null,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group"> 
    {!! Form::label('Status') !!}
     <select name="status" class="form-control">
      <option value="">Select Option</option>
      <option value="published">Published</option>
      <option value="unpublished">Unpublished</option>
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
