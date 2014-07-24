@extends('layout')

@section('content')
	<h1>Laravel To-do</h1>
	{{ link_to_route('tasks.create', 'new') }}
	<ul>
	@foreach($tasks as $task)
		<li>
			{{ link_to_route('tasks.show', $task->name, $task->id) }}
			|
			{{ Form::open([
				'route' => [
					'tasks.destroy',
					$task->id
				],
				'method' => 'delete'
			])}}
				{{ Form::submit('delete') }}
			{{ Form::close() }}
		</li>
	@endforeach
	</ul>
@stop
