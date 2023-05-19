@extends('layouts/admin')


@section('content')
    <h1>{{$project->title}}</h1>

    <hr>

    <ul>
        <li>
            <a href="{{route('admin.projects.edit', $project)}}">modifica</a>
        </li>
    </ul>

    <form action="{{ route('admin.projects.destroy' , $project) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Elimina</button>
    </form>

@endsection