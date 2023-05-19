@extends('layouts/admin')

@section('content')
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="{{ route('admin.projects.show', $project) }}">{{ $project->title }}</a>
                
            </li>
        @endforeach
    </ul>

    <hr>

    <div>
        <a href="{{ route('admin.projects.create') }}">Aggiungi un progetto</a>
    </div>
@endsection