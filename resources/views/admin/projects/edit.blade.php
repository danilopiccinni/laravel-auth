@extends('layouts/admin')

@section('content')

    <form action="{{ route('admin.projects.update', $project) }}" method="POST">

        @csrf
        @method('PUT')
    
        <div class="mb-2" >
            <label class="col-1" for="">Title</label>
            <input class="col-4" type="text" id="title" name="title" value="{{old('title') ?? $project->title}}">
            @error('title')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>

        <div class="mb-2" >
            <label class="col-1" for="">repo</label>
            <input class="col-4" type="text" id="repo" name="repo" value="{{old('repo') ?? $project->repo}}">
            @error('repo')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>

        <div class="mb-2" >
            <label class="col-1" for="">description</label>
            <textarea class="col-4" type="text" id="description" name="description">{{old('description') ?? $project->description}}</textarea>
            @error('description')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>

        <div class="mb-2" >
            <label class="col-1" for="">languages</label>
            <input class="col-4" type="text" id="languages" name="languages" value="{{old('languages') ?? $project->languages}}">
            @error('languages')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>

        <div class="mb-2" >
            <label class="col-1" for="">thumb</label>
            <input class="col-4" type="text" id="thumb" name="thumb" value="{{old('thumb') ?? $project->thumb}}">
            @error('thumb')
                <em style="color:red"> {{$message}} </em>
            @enderror
        </div>

        <button type="submit">crea</button>
 
    </form>

@endsection