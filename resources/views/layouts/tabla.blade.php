<table class="table table-hover">

  @if(isset($noticias))
    <thead>
        <th>
            Titulo
        </th>
        
        <th>
            Descripción
        </th>
        <th>
            Imagen
        </th>
        
        <th>
            
        </th>
        
        
    </thead>
    
    <tbody>
        
     @foreach($noticias as $n)
        <tr>
       <td>{{$n->titulo}}</td>
        <td>{{$n->descripcion}}</td>
       <td>
          <img src="imgNoticias/{{$n->urlImg}}" class="img-responsive" alt="Responsive image" style="max-width:100px;">
        </td>
            
        <th>
         <a href="noticias/{{$n->id}}/edit" class="btn btn-warning">Modificar</a>
         <a href="" class="btn btn-danger">Eliminar</a>
        </th>
        </tr>
     @endforeach
    </tbody>
  @endif
</table>