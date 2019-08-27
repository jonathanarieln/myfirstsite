@extends('layouts.app')

@section('title','Home')

  @section('content')
   <h1>{{$regard}}</h1>
     <ul>
       @foreach ($tasks as $task)
         <li>{{$task}}</li>
       @endforeach
     </ul>
  @endsection