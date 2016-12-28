@if(session()->has('msjes'))
    <div class="alert alert-success" role="alert">{{session('msjes')}}</div>
@endif

@if(session()->has('msjerror'))
    <div class="alert alert-danger" role="alert">{{session('msjerror')}}</div>
@endif

@if(isset($noticia))

<form  role="form" method="post" action="{{route('noticias.update',$noticia->id)}}" enctype="multipart/form-data">
    <input name="_method" type="hidden" value="PUT">
    
    {{csrf_field()}}
  <div class="form-group">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" name="titulo" value="{{$noticia->titulo}}" >
      @if($errors->has('titulo'))
        <span style="color:red">{{$errors->first('titulo')}}</span>
      @endif
  </div>
    
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <textarea class="form-control" name="descripcion">
        {{$noticia->descripcion}}
      </textarea>
      
         @if($errors->has('descripcion'))
        <span style="color:red">{{$errors->first('descripcion')}}</span>
      @endif
  </div>
 
  <div class="form-group">
    <label for="urlImg">Imagen</label>
    <input type="file" name="urlImg">
   
  </div>
  
  <button type="submit" class="btn btn-warning">Modificar</button>
</form>

@endif