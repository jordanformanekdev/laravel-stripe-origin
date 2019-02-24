@extends('layout')

@section('content')
  <h1>Create a new Project</h1>
  <form class="" action="/projects" method="post">

    {{ csrf_field() }}

    <div>
      <input type="text" name="title" placeholder="Project title" value="{{ old('title') }}" >
    </div>

    <div>
      <textarea name="description" placeholder="Project description" required>{{ old('description') }}</textarea>
    </div>

    <div>
      <button type="submit">Create Project</button>
    </div>

    @include('errors')

  </form>
@endsection
