@extends('layouts/admin')

@section('content')
<section class="section-admin-index">

    <div class="container my-5">
        <h1>Portoflio</h1>
        <h3>Siti web e realizazzioni</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eveniet quaerat id esse ullam, iure dolorum aut ipsum minima placeat harum, at a ea, nobis quis perferendis nostrum omnis illum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aspernatur magni blanditiis nisi repellendus esse et similique quibusdam aut odio vitae expedita, tempore sunt, tempora id. Quia ratione dicta modi.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quos odio quis sequi, hic numquam illo beatae reprehenderit possimus, facere nemo ipsum dolorem laboriosam voluptates doloribus alias eius excepturi culpa.</p>
    </div>

    <div class="my-5">
        <ul>
            @foreach ($projects as $project)
                <li>
                    <a class="cont-card" href="{{ route('admin.projects.show', $project) }}">
                      <div class="card mb-3" style="width: 70%;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="https://fastly.picsum.photos/id/1/5000/3333.jpg?hmac=Asv2DU3rA_5D1xSe22xZK47WEAN0wjWeFOhzd13ujW4" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{ $project->title }}</h5>
                              <p class="card-text">{{$project->description}}</p>
                              <p class="card-text"><small class="text-body-secondary">{{ $project->languages }}</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                </li>
            @endforeach
        </ul>

    </div>
    
    


</section>

@endsection