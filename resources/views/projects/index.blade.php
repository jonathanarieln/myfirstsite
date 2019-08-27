@extends('layouts.app')
@section('content')
  <h1>Projects</h1>
  <a href="{{route('projects.create')}}">Create New Project</a>
  <ul>
    @foreach ($projects as $project)
      <li>{{$project->title}}:{{$project->description}}</li>
    @endforeach
  </ul>
@endsection

