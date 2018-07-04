@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        
            <div class="panel panel-info">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   <div class="col-md-12">
                   	
                   	<h2>All Category</h2>
                       <a href="{{route('category.create')}}">Add New</a>
                   <table class="table table-inverse">
                   	<thead>
                   		<tr>
                   			<th>ID</th>
                   			<th>Name</th>
                            <th>Status</th>
                             <th>Edit</th>
                   			<th>Delete</th>
                   		</tr>
                   	</thead>
                   	<tbody>
                      @foreach($categories as $category)
                   		<tr>
                   			<td>{{$category->id}}</td>
                               <td>{{$category->name}}</td>
                               <td>{{$category->status}}</td>
                          <td><button class="btn btn-info btn-inline btnEdit"><a href="{{route('category.edit',$category->id)}}">Edit</a></button></td>
                         <td>

                    {!! Form::open(['action'=> ['CategoryController@destroy',$category->id], 'method'=>'delete','class'=>'form-inline']) !!}
                    <button class="btn btn-danger btn-inline pull-left" 
                    onclick="return confirm('Are you sure to delete this');">Delete</button>
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
@endsection
@section('script')

@endsection