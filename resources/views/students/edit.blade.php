@extends('layouts.app')

@section('content')
 <h1 class="text-center">Edit a Todo</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
<div class="container">
    <form method="post" action="{{route('student.update', ['student' => $student])}}">
        @csrf 
        @method('put')
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name" placeholder="Name" value="{{$student->name}}" />
        </div>
    
        <div class="form-group">
            <label>Todo</label>
            <input class="form-control" type="text" name="todo" placeholder="Description" value="{{$student->todo}}" />
        </div>
        <div>
            <input class="btn btn-primary mt-4" type="submit" value="Update" />
        </div>
    </form>
  </div>
@endsection