@extends('layouts.admin-sidebar')

@section('content')
    
    <div class="row">
        <div class="col-lg-12">

	        @if(Session::has('message'))
	            <div class="alert alert-success alert-dismissible" role="alert">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <p>{{ Session::get('message') }}</p>
	            </div>
		    @endif


            <h1>User List</h1>
            
            @if (count($users))       		
        		<table class="table table-striped">
	            	<thead>
	            		<tr>
	            			<th>#</th>
	            			<th>Name</th>
	            			<th>Email</th>
	            			<td>Action</td>
	            		</tr>
	            	</thead>
	            	<tbody>
	            		<?php $num = 1; ?>
	            		@foreach ($users as $user)
	            		
	            		<tr>
	            			<td>{{ $num }}</td>
	            			<td>{{ $user->name }}</td>
	            			<td>{{ $user->email }}</td>
	            			<td>
	            				{{ Form::open(array('url' => 'user/' . $user->id)) }}
	            					{{ Form::hidden('_method', 'DELETE') }}
	            					{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
	            				{{ Form::close() }}	
	            			</td>
	            		</tr>
	            		<?php $num++ ?> 
	            		@endforeach          		
	            	</tbody>
            	</table>
            @else
            	<p>There is no users at the moment.</p>
            @endif
        </div>
    </div>
        
@endsection