@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   <div class="col-md-12">
                   	
                   	<h2>All Post</h2>
                   	<div class="add_new">
                   	<button type="button" class="btn btn-primary pull-right">
                    <a href="{{route('post.create')}}" style="color:white">Add New</a></button>
                   	</div>
                   <table class="table table-inverse">
                   	<thead>
                   		<tr>
                   			<th>ID</th>
                   			<th>Title</th>
                        <th>Status</th>
                        <th>Edit</th>
                   			<th>Delete</th>
                   		</tr>
                   	</thead>
                   	<tbody>
                      @foreach($posts as $post)
                   		<tr>
                   			<td>{{$post->id}}</td>
                   			<td>{{$post->title}}</td>
                   			<td>{{$post->status}}</td>
                          <td><button class="btn btn-info btn-inline btnEdit"><a href="{{route('post.edit',$post->id)}}">Edit</a></button></td>
                         <td>
            {!! Form::open(['action'=> ['PostController@destroy',$post->id], 'method'=>'delete','class'=>'form-inline']) !!}
            
              <button class="btn btn-danger btn-inline pull-left btnDelete">Delete</button>
                      {!! Form::close() !!}
                        </td>
                        </tr>
                      @endforeach
                   	</tbody>
                   </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection