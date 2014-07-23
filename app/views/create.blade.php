@extends('layout')

@section('content')
	<h1>New to-do</h1>
	{{ Form::open(['route' => 'tasks.store']) }}
		{{ Form::label('name', 'Title') }}
		{{ Form::text('name') }}
		{{ $errors->first('name') }}
		{{ Form::submit('Add') }}
	{{ Form::close() }}
@stop
