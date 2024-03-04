
@extends('layouts.app')

@section('content')
<h1 class="text-center">Laravel CRUD Perform</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div >
        <div class="container mt-4">
            <a class="btn btn-primary mt-4 mb-4" href="{{route('student.create')}}">Create a Todo</a>
        </div>
      <div class="container mt-4">
        <table class="table" border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Todo</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($student as $students )
                <tr>
                    <td>{{$students->id}}</td>
                    <td>{{$students->name}}</td>
                    <td>{{$students->todo}}</td>
                    <td>
                        <a class="btn btn-outline-secondary" href="{{route('student.edit', ['student' => $students])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('student.destroy', ['student' => $students])}}">
                            @csrf 
                            @method('delete')
                            <input class="btn btn-outline-danger" type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        </div>
    </div>
@endsection