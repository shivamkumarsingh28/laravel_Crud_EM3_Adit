@extends('layouts.app')
@section('content')
<h1 class="text-center">Create a Today Todo</h1>
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
    <form method="post" action="{{route('student.store')}}">
        @csrf 
        @method('post')
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name" placeholder="Name" />
        </div>
        
      
        <div class="form-group mt-4">
            <label>Todo</label>
            <input class="form-control" type="text" name="todo" placeholder="Todo" />
        </div>
        <div>
            <input class="btn btn-primary mt-4" type="submit" value="Save a Todo" />
        </div>
    </form>
</div>
@endsection