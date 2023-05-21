@extends('layouts/admin')


@section('content')

    <section class="section-admin-show">

        <section>
            <div class="image py-5">
                <div class="container-fliud py-5">
                    <div class="col-10 offset-1">
                        <div class="container-image" style="background-image: url({{$project->thumb}})">
                            <h1>{{$project->title}}</h1>
                            <div class="opacity"></div>
                            {{-- <img class="inner-bottom-svg" src="{{Vite::asset('resources/img/wave.svg')}}" alt=""> --}}
                        </div>
                    </div>
                </div>
            </div>
            <img class="svg" src="{{Vite::asset('resources/img/wave.svg')}}" alt="">
            
        </section>


        <section class="my-5">
            
            <div class="container">
                <p>{{$project->description}}{{$project->description}}{{$project->description}}
                    {{$project->description}}{{$project->description}}{{$project->description}}
                    {{$project->description}}{{$project->description}}{{$project->description}}
                    {{$project->description}}{{$project->description}}{{$project->description}}
                    {{$project->description}}{{$project->description}}{{$project->description}}
                </p>
                
            </div>

        </section>

        <div class="d-flex justify-content-center gap-5 my-5">
            <a class="btn btn-primary" href="{{route('admin.projects.edit', $project)}}">modifica</a>


            <form action="{{ route('admin.projects.destroy' , $project) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Elimina</button>
            </form>

        </div>


    </section>



@endsection