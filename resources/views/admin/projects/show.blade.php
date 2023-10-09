@extends('layouts.app')

@section('content')

    <main>

        <div class="container">

            <h1 class="py-3 text-center text-danger">Projects show page (admin)</h1>
    
            <div class="row">
    
                <div class="col col-6 offset-md-3 d-flex flex-column align-items-center">
    
                    <button class="btn btn-primary mt-5">
                        <a class="text-light" href="{{route('admin.projects.index')}}">Back to Projects</a>
                    </button>
    
                    <div class="card my-5">
                        <img src="{{$project->image}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{$project->name}}</h5>
                            <p class="card-text">{{substr_replace($project['description'], '...', 100)}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{$project->getter_publication_date()}}</li>
                            <li class="list-group-item">{{$project->technologies_used}}</li>
                            <li class="list-group-item">
                                <a href="{{$project->git_link}}">{{$project->git_link}}</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-evenly">
    
                                <button class="btn btn-warning">
                                    <a class="text-light" href="{{route('admin.projects.edit', $project->slug)}}">Edit Project</a>
                                </button>
    
                                <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
    
                            </li>
                        </ul>
                    </div>
    
                    <button class="btn btn-primary mb-5">
                        <a class="text-light" href="{{route('admin.projects.index')}}">Back to Projects</a>
                    </button>
    
                </div>
    
            </div>
    
        </div>
    
    </main>

@endsection