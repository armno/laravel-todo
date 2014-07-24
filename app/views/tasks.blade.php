@extends('layout')

@section('content')
	<h1>Laravel To-do</h1>
	{{ link_to_route('tasks.create', 'new todo item') }}

	<h2>Unfinished todo</h2>
	<ul>
	@foreach($unfinished as $task)
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

	<h2>Finished</h2>
	<ul>
	@foreach($finished as $task)
		<li>
			{{ link_to_route('tasks.show', $task->name, $task->id) }}
		</li>
	@endforeach
	</ul>
@stop
