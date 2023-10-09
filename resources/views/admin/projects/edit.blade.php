@extends('layouts.app')

@section('content')

    <main class="py-5">

        <div class="container">

            <h1 class="py-3 text-center text-danger">Projects edit page (admin)</h1>
    
            <h2 class="pb-3 text-center text-danger">Edit selected project by filling in the following form</h2>
    
            <div class="row">
                    
                <div class="col offset-md-2">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{route('admin.projects.update', $project->slug)}}" method="POST" class="w-75">
                        @csrf()
                        @method('PATCH')

                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{old('name', $project->name)}}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea type="text" class="form-control" name="description">{{old('description', $project->description)}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Image</label>
                            <input type="text" class="form-control" name="image"  value="{{old('image', $project->image)}}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Publication Date</label>
                            <input type="date" class="form-control" name="publication_date" value="{{old('publication_date', $project->getter_publication_date())}}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Technologies Used</label>
                            <input type="text" class="form-control" name="technologies_used" value="{{old('technologies_used', $project->technologies_used)}}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Git Link</label>
                            <input type="text" class="form-control" name="git_link" value="{{old('git_link', $project->git_link)}}">
                        </div>

                        <button class="btn btn-primary">Edit</button>

                        <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Abort</a>

                    </form>

                </div>
    
            </div>
    
        </div>
    
    </main>

@endsection