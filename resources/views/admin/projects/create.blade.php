
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mt-2">
            <h1 class="text-center mt-2">Aggiungi il tuo progetto</h1>
            @include('layouts.formEditCreate', ['method'=>'POST','route'=>'admin.projects.store'])
                        
        </div>
    </div>
</div>
@endsection
