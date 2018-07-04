@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                 <div class="col-md-4">
               
             <h2>Category</h2> 
               
                 <ul class="list-group">
                <li class="list-group-item"><a href="{{route('category.')}}">Add New</a></li>
                <li class="list-group-item"><a href="{{route('category.index')}}">Show All</a></li>
                 </ul>
                 <h2>Post</h2> 
               
                 <ul class="list-group">
                <li class="list-group-item"><a href="{{route('post.create')}}">Add New</a></li>
                <li class="list-group-item"><a href="{{route('post.index')}}">Show All</a></li>
                 </ul>
            
                </div>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
