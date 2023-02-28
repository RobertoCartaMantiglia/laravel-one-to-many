
<form action="{{route($route, $project->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)
    
    @if($errors->any())
    <div class="alert alert-danger mt-3">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="mb-3">
        <label for="title" class="form-label">
            Titolo del Progetto
        </label>
        <input type="text" name="title" value="{{old('title', $project->title)}}" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="type_id" class="form-label">
            Tipologia di linguaggio Utilizzata
        </label>
        <select type="text" name="type_id" class="form-control"> 
            @foreach ($types as $type)
            <option value="{{$type->id}}"{{ old('type_id', $project->type_id) == $type->id ? 'selected' : ''}}>
                
                {{$type->name}}
            </option>
                
            @endforeach
        </select>
    </div>
   
    <div class="mb-3">
        <label for="description" class="form-label">
            Descrizione
        </label>
        <textarea class="form-control" name="description" rows="3">
            {{ old('description', $project->description)}}
        </textarea>
    </div> 
    <div class="mb-3">
        <label for="thumb" class="form-label">
            Immagine
        </label>
        <input type="file" name="thumb" value="{{old('thumb', $project->thumb)}}"  class="form-control">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">
            Autore
        </label>
        <input type="text" name="author" value="{{old('author', $project->author)}}"  class="form-control">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">
            Tecnologia Utilizzata
        </label>
        <input type="text" name="used_technology" value="{{old('used_technology', $project->used_technology)}}"  class="form-control">
    </div>
    
    <button type="submit" class="btn btn-success">Aggiungi Progetto</button>
</form>