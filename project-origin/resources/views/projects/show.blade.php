@extends('layout')

@section('content')

  <div>
    {{ $project->title }}
  </div>

  <div>
    {{ $project->description }}
  </div>

  <div class="content">
    <a href="/projects/{{ $project->id }}/edit">
      Edit
    </a>
  </div>

  @if ($project->tasks->count())
  <div>
    @foreach($project->tasks as $task)
      <form method="POST" action="/tasks/{{ $task->id }}">
        @method('PATCH')
        @csrf
        <label class="checkbox" for="completed">
          <input
            type="checkbox"
            name="completed"
            onChange="this.form.submit()"
            {{ $task->completed ? 'checked' : '' }}>
          {{ $task->description }}
        </label>
      </form>
    @endforeach
  </div>
  @endif

  <form class="box" action="/projects/{{ $project->id}}/tasks" method="POST">
    @csrf
    <label for="description">New Task</label>
    <div class="control">

      <input type="text" class="input" name="description" placeholder="New Task" required>

    </div>
    <div class="field">

      <div class="control">
        <button type="submit" class="button is-link">Add Task</button>
      </div>

    </div>
  </form>

  @include('errors')

@endsection
