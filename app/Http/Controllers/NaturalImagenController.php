<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NaturalImagen;
use App\Natural;
use App\Http\Requests\NaturalImagenRequest;

class NaturalImagenController extends Controller
{
    public function index()
    {
        $imagen = NaturalImagen::orderBy('orden','ASC')->get();
        $natural_seccion ='active';
        $natural_edit = 'active';
        return view('adm.control.natural.ListaGaleria')
        ->with('imagenes', $imagen)
        ->with('natural_seccion', $natural_seccion)
        ->with('beneficio_edit', $natural_edit);
    }
    public function create()
    {
       $natural_seccion ='active';
        $natural_edit = 'active';
        return view('adm.control.natural.CrearGaleria')
        ->with('natural_seccion', $natural_seccion)
        ->with('beneficio_create', $natural_edit);
    }

    public function store(NaturalImagenRequest $request)
    {
        $imagen = new NaturalImagen();
        $id = NaturalImagen::all()->max('id');
        $imagen->orden = $request->orden;
        $imagen->titulo = $request->titulo;
        $imagen->contenido = $request->contenido;
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/galeria_productos/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $imagen->imagen = 'img/galeria_productos/'. $id.'_'.$file->getClientOriginalName();
                $imagen->save();
            }
        }
        flash('Se ha registrado de forma exitosa')->success()->important();
        return redirect()->route('imgnatural.create');
        
    }
    public function edit($id)
    {
        $natural_seccion ='active';
        $natural_edit = 'active';
        $imagen = NaturalImagen::where('id',$id)->first();
        return view('adm.control.natural.EditarGaleria')
            ->with('imagen',$imagen)
            ->with('natural_seccion', $natural_seccion)
            ->with('beneficio_edit', $natural_edit);
    }
    public function show($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        $imagen = NaturalImagen::find($id);
        $id = NaturalImagen::all()->max('id');
        $imagen->orden = $request->orden;
        $imagen->titulo = $request->titulo;
        $imagen->contenido = $request->contenido;
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/galeria_productos/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $imagen->imagen = 'img/galeria_productos/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        $imagen->save();
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('imgnatural.index');

    }

    public function destroy($id)
    {
        $imagen= NaturalImagen::find($id);
        $imagen -> delete();
        flash('Se ha eliminado correctamente.')->success()->important();
        return redirect()->route('natural.index');
    }
}
