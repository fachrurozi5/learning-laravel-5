@extends('baseapp')

@section('content')
	<h1>Write new Article</h1>

	<hr/>

	{!! Form::open(['url' => 'articles']) !!}
		@include('articles._form', ['submitButtonText' => 'Add Article'])
	{!! Form::close() !!}
	
@stop