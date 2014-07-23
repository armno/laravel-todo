@extends('layout')

@section('content')
	<h1>Laravel To-do</h1>
	<ul>
	@foreach($tasks as $task)
		<li>{{ link_to('tasks/view/' . $task->id, $task->name) }}</li>
	@endforeach
	</ul>
@stop
