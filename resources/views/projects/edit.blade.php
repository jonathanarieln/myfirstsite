@extends('layouts.app')

@section('content')

  <h1 class="title">Edit Project</h1>

  <form method="POST" action="/projects/{{$project->id}}">
    {{ method_field('PATCH') }}
    {{csrf_field()}}


    <div class="field">

      <label class="label" for="title">Title</label>


      <div class="control">

      <input class="input" type="text" name="title" placeholder="title" value="{{$project->title}}">

      </div>

    </div>


    <div class="field">

      <div class="control">

      <label class="label" for="description">Title</label>

      <textarea class="textarea" name="description">{{$project->description}}</textarea>

      </div>

    </div>


    <div class="field">

     <button type="submit" class="button is-link">Update Project</button>

    </div>

  </form>

@endsection