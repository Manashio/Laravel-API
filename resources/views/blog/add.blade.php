@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 pt-5 pb-5">

	        	{!! Form::open(['action' => 'PostsController@store','method' => 'POST']) !!}
					
	        		<div class="row">

	        			<div class="col-md-6">
			        		<div class="form-group pb-3">
			                    <b>{{Form::label('post_title', 'Title ')}}</b>
			                    {{Form::text('post_title', '' , ['class' => 'form-control input', 'placeholder' => 'Lorem ipsum dolor sit amet',])}}
	               		 	</div>
	        			</div>

	        			<div class="col-md-6">
	        				<div class="form-group pb-3">
	                       		 <b>{{Form::label('post_author', 'Author')}}</b>
	                       		 {{Form::text('post_author', '' , ['class' => 'form-control input', 'placeholder' => 'John Doe'])}}
	                		</div>
	        			</div>
	        		</div>

	                
	                <div class="form-group pb-1">
	                    <b>{{Form::label('post_body', 'Post description')}}</b>
	                    {{Form::textarea('post_body', ' ' , ['class' => 'form-control input', 'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'])}}
	                </div>	

	                <div class="pt-5">
	                            {!! Form::submit('Post', ['class' => 'btn primary']) !!}    
	                            <a href="/home" class="btn btn-danger">Back</a>
	                </div>		

			 {!! Form::close() !!}
                   
     
                    
               
                

        </div>
    </div>
</div>
@endsection