@extends('layouts.app')
@section('content')
  <h1>Create a New Project</h1>

  <form method="PATCH" action="/projects">
    {{csrf_field()}}
   <div>
     <input type="text" name="title" placeholder="Project Title">
   </div>
   <div>
     <textarea name="description" placeholder="Description" rows="8" cols="50"></textarea>
   </div>
   <div>
       <button type="submit">Create Project</button>
   </div>
  </form>

@endsection