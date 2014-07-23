@extends('layout')

@section('content')
	{{ link_to('/', 'back') }}
	<h1>{{ $task->name }}</h1>
@stop
