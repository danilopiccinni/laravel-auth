@extends('layouts/admin')


@section('content')

    <section class="section-admin-show my-5">

        <div class="container">

            <div class="card mb-3" style="width: 70%;">
                <div class="card-body">
                  <h5 class="card-title">{{ $project->title }}</h5>
                  <p class="card-text">{{ $project->description }}</p>
                  <p class="card-text"><small class="text-body-secondary">{{ $project->languages }}</small></p>
                </div>
                <img src="https://fastly.picsum.photos/id/1/5000/3333.jpg?hmac=Asv2DU3rA_5D1xSe22xZK47WEAN0wjWeFOhzd13ujW4" class="card-img-bottom" alt="...">
              </div>

        </div>

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