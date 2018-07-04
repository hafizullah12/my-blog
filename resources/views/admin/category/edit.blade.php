@extends('layouts.app')
@section('content')
<div class="container">
@include('admin.message')
<button class="btn btn-warning pull-right"><a href="{{route('category.index')}}">Show All Posts</a></button>
<div class="panel panel-primary">
    <div class="panel-heading">Edit Category</div>
    <div class="panel-body">
    {!! Form::open(['action'=>['CategoryController@update',$category->id],'method'=>'PUT','files'=>true]) !!}
    <div class="form-group"> 
    {!! Form::label('Name') !!}
    {!! Form::text('name',$category->name,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group"> 
    {!! Form::label('Status') !!}
   {!! Form::select('status',
    ['published' => 'Published','unpublished' => 'Unpublished'],$category->status,['class'=>'form-control'])!!}
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
@endsection