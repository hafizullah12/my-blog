@extends('layouts.app')
@section('content')
<div class="container">
   {{--  {{$post->feature_image}} --}}
 <div class="panel panel-primary">
    <div class="panel-heading">Edit Post</div>
    @include('admin.message')
    <div class="panel-body">
    {!! Form::open(['action'=>['PostController@update',$post->id],'method'=>'PUT','files'=>true]) !!}
    <div class="form-group"> 
    {!! Form::label('Title') !!}
    {!! Form::text('title',$post->title,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('Category') !!}
    {!! Form::select('category_id',$category,$post->category_id, ['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('Description') !!}
    {!! Form::textarea('description',$post->description,['class' => 'form-control']) !!}	
    </div>
    <div class="form-group">
    {!! Form::label('Feature Image') !!}
    {!! Form::file('feature_image',null,['class' => 'form-control']) !!}	
    </div>
    <div class="form-group">
    	{!! Form::label('Status') !!}
    	{!! Form::select('status',getPostStatus(),$post->status,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    	<input type="submit" class="btn btn-success btn-block" value="Update">
    </div>
   
    {!! Form::close() !!}
	</div>
  </div>
</div>
@endsection

@section('script')
  
@endsection