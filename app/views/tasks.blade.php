@extends('layout')

@section('content')
	<ul>
	@foreach($tasks as $task)
		<li>{{ $task->name }}</li>
	@endforeach
	</ul>
@stop
