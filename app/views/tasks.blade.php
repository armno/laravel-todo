@extends('layout')

@section('content')
	<h1>Laravel To-do</h1>
	{{ link_to_route('tasks.create', 'new') }}
	<ul>
	@foreach($tasks as $task)
		<li>{{ link_to('tasks/view/' . $task->id, $task->name) }}</li>
	@endforeach
	</ul>
@stop
