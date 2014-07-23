@extends('layout')

@section('content')
	<h1>Laravel To-do</h1>
	{{ link_to_route('tasks.create', 'new') }}
	<ul>
	@foreach($tasks as $task)
		<li>{{ link_to_route('tasks.show', $task->name, $task->id) }}</li>
	@endforeach
	</ul>
@stop
