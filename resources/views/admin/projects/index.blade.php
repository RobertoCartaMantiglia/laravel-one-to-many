   @extends('layouts.app') 
    @section('content')
    <div class="container">
        <h1 class="text-center my-4">My-Projects</h1>
        <table class="table table-striped table-borderless table-hover">
            <thead class="table">
                <tr>                    
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Technology</th>
                    <th scope="col">
                        <a href="{{route('admin.projects.create')}}" class="btn  bg-info">
                            Create new project
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                   
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->author }}</td>
                    <td>{{ $project->used_technology }}</td>
                    <td>
                       <div class="d-flex justify-content-around">
                        <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-xs btn-primary m-1">
                            Show
                        </a>
    
                        <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-xs btn-warning m-1">
                            Edit
                        </a>
    
                        <a href="#" >
                            
                            <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST" class="delete_form">
                              @csrf
                              @method('DELETE')
                              <input type="submit" value="Delete" class="btn btn-xs btn-danger m-1">
                            </form>                     
                        </a>
                       </div>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    @endsection
    @section('script')
        @vite('resources/js/confirmDelete.js')
    @endsection
