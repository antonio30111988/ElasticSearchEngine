@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1 class="text-primary" style="text-align: center;">Laravel Live Search by Elastic Search</h1>
    </div>
</div>

<div class="container">
	<div class="panel panel-primary">
	  <div class="panel-heading">
	  	<div class="row">
		  <div class="col-lg-6">
		    {!! Form::open(array('method'=>'get','class'=>'')) !!}
		    <div class="input-group">
		      <input name="search" value="{{ old('search') }}" type="text" class="form-control" placeholder="Search post here..">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="submit">Search now</button>
		      </span>
		    </div>
		    {!! Form::close() !!}
		  </div>
		</div>
	  </div>
	  <div class="panel-body">

	    	
	    	<div class="row">
				{{--List results---}}
		  		<div class="col-lg-6">
			    	@if(!empty($posts))
			    		@foreach($posts as $key => $value)
			    			<h3 class="text-danger">{{ $value['title'] }}</h3>
			    			<p>{{ $value['content'] }}</p>
							<p>Keywords list: {{ $value['tags'] }}</p>
			    		@endforeach
			    	@endif
		  		</div>
		  		<div class="col-lg-6">
		  			<div class="panel panel-default">
	  					<div class="panel-heading">
	  						Create New Post
	  					</div>
	  					<div class="panel-body">

	  						@if (count($errors) > 0)
								<div class="alert alert-danger">
									<strong>Error noticed!</strong> Please try again..<br><br>
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

	  						{!! Form::open(array('url' => 'createPost','autocomplete'=>'off')) !!}
	  							<div class="row">
			                        <div class="col-xs-12 col-sm-12 col-md-12">
			                            <div class="form-group">
			                                <strong>Title:</strong>
			                                {!! Form::text('title', null, array('placeholder' => 'Post Title','class' => 'form-control')) !!}
			                            </div>
			                        </div>
			                        <div class="col-xs-12 col-sm-12 col-md-12">
			                            <div class="form-group">
			                                <strong>Content:</strong>
			                                {!! Form::textarea('content', null, array('placeholder' => 'Type text..','class' => 'form-control','style'=>'height:150px')) !!}
			                            </div>
			                        </div>
									<div class="col-xs-12 col-sm-12 col-md-12">
			                            <div class="form-group">
			                                <strong>Tags:</strong>
											{{ Form::select('tags[]', ['Type something'],null,['multiple' => 'multiple']) }}
			                            </div>
			                        </div>
			                    </div>

			                    <div class="text-center">
			                    	<button type="submit" class="btn btn-primary">Create Post</button>
			                    </div>

	  						{!! Form::close() !!}

	  					</div>
	  				</div>
		  		</div>
		  	</div>

	  </div>
	</div>
</div>
@endsection