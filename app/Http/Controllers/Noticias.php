<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;

use Storage;

class Noticias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->titulo);
    
        $this->validate($request, [
            'titulo'=>'required',
            'descripcion' => 'required'
            
        ]);
        
        $noticia = new Noticia();
        $noticia -> titulo = $request->titulo;
        $noticia -> descripcion = $request -> descripcion;
        
        $img = $request->file('urlImg');
        $file_route=time().'_'.$img->getClientOriginalName();
        
        Storage::disk('imgNoticias')->put($file_route,file_get_contents($img->getRealPath()));
        
        $noticia->urlImg=$file_route;
        
        
        
        if ($noticia->save()){
            
            return back()->with('msjes','Datos guardados');
            
        }else{
            
            return back()->with('msjerror','Error al guardar los datos'); 
        }
        
       
      ///  $noticia -> save();
        //dd('Datos guardados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        //dd('Holas');
        
        $noticia = Noticia::find($id);
        
    
        return view('home')->with(['edit'=>true, 'noticia'=>$noticia]);
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
