@extends('layouts/admin')

@section('content')

    <div class="container d-flex flex-column align-items-center mt-5">
        <h6>Dashboard del profilo</h6>
        <h1>Danilo Piccinni</h1>
        <h3>Programmatore</h3>

    </div>
    <a href="{{ route('admin.projects.index') }}">vai alla lista</a>
@endsection