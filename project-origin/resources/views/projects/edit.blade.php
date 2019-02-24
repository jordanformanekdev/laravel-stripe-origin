@extends('layout')

@section('content')
  <h1 class="title">Edit Project</h1>
  <form class="" action="/projects/{{ $project->id }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="field">
      <label class="label" for="title">Title</label>
      <div class="control">
        <input type="text" name="title" value="{{ $project->title }}">
      </div>
    </div clss="field">
    <div class="field">
      <label class="label" for="description">Description</label>
      <div class="control">
        <textarea name="description">{{ $project->description }}</textarea>
      </div>
    </div>
    <div class="field">
      <div class="control">
        <button type="submit">Update Project</button>
      </div>
    </div>
  </form>

  @include('errors')

  <form class="" action="/projects/{{ $project->id }}" method="post">
    @method('DELETE')
    @csrf
    <div class="field">
      <div class="control">
        <button type="submit">Delete Project</button>
      </div>
    </div>
  </form>
@endsection
