@extends('master')
@section('content')

	@if(count($errors) > 0)
	    <div>
	        @foreach ($errors->all() as $error)
	            <div class="alert alert-danger" role="alert">
	            	<li >{{ $error }}</li>
	            </div>
	        @endforeach
	    </div>
	@endif

	<div class="jumbotron">
		{!! Form::model($items, ['method'=>'PATCH', 'action'=>['ItemsController@update', $items->id ]]) !!}
			<div class="form-group">  
			    <div class="offset-md-3 col-md-4 control-label">
			    	{!! Form::label('title','Nazwa produktu:') !!}
			    </div>

				<div class="offset-md-3 col-md-6">
					{!! Form::text('title', null, ['class' => 'form-control']) !!}
				</div>
			</div>

			<div class="form-group">  
			    <div class="offset-md-3 col-md-4 control-label">
			    	{!! Form::label('description','Opis produktu:') !!}
			    </div>

				<div class="offset-md-3 col-md-6">
					{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
				</div>
			</div>

			<div class="form-group">  
			    <div class="offset-md-3 col-md-4 control-label">
			    	{!! Form::label('price','Cena:') !!}
			    </div>

				<div class="offset-md-3 col-md-6">
					{!! Form::text('price', null, ['class' => 'form-control']) !!}
				</div>
			</div>

			<div class="form-group">  
				<div class="offset-md-3 col-md-6 col-md-offset-4">
					{!! Form::submit('Zapisz zmiany', ['class' => 'class="btn btn-primary']) !!}
				</div>
			</div>
		{!! Form::close() !!}
	</div>

@endsection