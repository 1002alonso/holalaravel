@if(session()->has('msjes'))
    <div class="alert alert-success" role="alert">{{session('msjes')}}</div>
@endif

@if(session()->has('msjerror'))
    <div class="alert alert-danger" role="alert">{{session('msjerror')}}</div>
@endif


<form  role="form" method="post" action="{{url('noticias')}}" enctype="multipart/form-data">
    
    {{csrf_field()}}
  <div class="form-group">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" name="titulo" placeholder="titulo">
      @if($errors->has('titulo'))
        <span style="color:red">{{$errors->first('titulo')}}</span>
      @endif
  </div>
    
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <textarea class="form-control" name="descripcion" placeholder="descripcion">
      </textarea>
      
         @if($errors->has('descripcion'))
        <span style="color:red">{{$errors->first('descripcion')}}</span>
      @endif
  </div>
 
  <div class="form-group">
    <label for="urlImg">Imagen</label>
    <input type="file" name="urlImg">
   
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>