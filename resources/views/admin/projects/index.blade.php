@extends('layouts.app')

@section('content')

<main>

    <div class="container">

        <h1 class="py-3 text-center text-danger">Projects index page (admin)</h1>

        <div class="d-flex justify-content-center pb-3">
            <a class="btn btn-primary" href="{{route('admin.projects.create')}}">Create New Project</a>
        </div>

        <div class="row row-cols-4 g-4">

            @foreach ($projects as $project)
                
                <div class="col">

                    <div class="card h-100">
                        <a href="{{route('admin.projects.show', $project['slug'])}}">
                            <img src="{{$project['image']}}" class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{$project['name']}}</h5>
                            <p class="card-text">{{substr_replace($project['description'], '...', 100)}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{$project['publication_date']}}</li>
                            <li class="list-group-item">{{$project['technologies_used']}}</li>
                            <li class="list-group-item">
                                <a href="{{$project['git_link']}}">{{$project['git_link']}}</a>
                            </li>
                        </ul>
                    </div>

                </div>

            @endforeach

        </div>

    </div>

</main>

@endsection