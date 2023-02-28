<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    @vite(['resources/js/app.js'])
    
</head>
<body>
    @extends('layouts.app') 
    @section('content')
    <div class="container">
        <div class="card text-center mt-2">
            <div class="card-title fw-bold p-3 text-uppercase">
                {{ $project->title }}
            </div>
            <div class="card-body p-3 m-3">
                <div class="mb-2">
                    <img src=" {{asset('storage/' . $project->thumb)}}" alt="#" class="img-fluid">                   
                </div>
                <div>
                    <p class="card-text mb-4">
                        {{ $project->description }}
                    </p>
                    <p class="card-text mb-4">
                       Autore: {{ $project->author }}
                    </p>
                    
                </div>
                
                <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-success">
                    Edit
                </a>
                <a href="{{route('admin.projects.index')}}" class="btn btn-primary">
                     Indietro                    
                </a>
            </div>
            
          </div>
    </div>
   @endsection
</body>
</html>