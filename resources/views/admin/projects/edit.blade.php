  @extends('layouts.app')
  @section('content')
  <div class="container">
    <div class="row">
        <div class="col-12">
           <h1 class="text-center mt-2">Modifica il tuo progetto</h1>
            @include('layouts.formEditCreate', ['method' =>'PUT', 'route'=>'admin.projects.update'])
         
        </div>
    </div>
  </div>
  @endsection
