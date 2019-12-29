<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subfamilia;
use App\Imagen;
use App\General;
use App\Http\Requests\GeneralRequest;
use App\Http\Requests\UpdateGnrlRequest;

class ProductosGeneralesController extends Controller
{
    public function index_general($id)
    {
        $general_seccion ='active';
        $general_edit = 'active';
        $general  = General::where('id_subfamilia',$id)->get();
        $subfamilia = Subfamilia::orderBy('id_familia','ASC')->get();
        return view('adm.control.general.ListaGeneral')
        ->with('generales',$general)
        ->with('subfamilias',$subfamilia)
        ->with('general_seccion', $general_seccion)
        ->with('general_edit', $general_edit);
    }
    public function create_general($id){
        $general_seccion ='active';
        $general_create = 'active';
        $subfamilia  = Subfamilia::find($id);
        return view('adm.control.general.CrearGeneral')
        ->with('subfamilia',$subfamilia)
        ->with('general_seccion', $general_seccion)
        ->with('general_edit', $general_create);
    }
    // public function index(Request $request)
    // {
    //     $familia  = Familia::all();
    //     $general_seccion ='active';
    //     $general_edit = 'active';
    //     return view('adm.control.familia.ListaFamilia')
    //     ->with('familias',$familia)
    //     ->with('general_seccion', $general_seccion)
    //     ->with('familia_edit', $general_edit);
    // }
    // public function create()
    // {
    //     $general_seccion ='active';
    //     $general_create = 'active';
    //     return view('adm.control.familia.CrearFamilia')
    //     ->with('general_seccion', $general_seccion)
    //     ->with('familia_create', $general_create);
    // } 
    public function store(GeneralRequest $request)
    {
        $producto = new General();
        $id = General::all()->max('id');
        $producto->id_subfamilia = $request->id_subfamilia;
        $producto->titulo = $request->titulo;
        $producto->orden = $request->orden;
        $producto->contenido = $request->contenido;
        $producto->tabla = $request->tabla;
        $id = General::all()->max('id');
        $id++;
        if ($request->hasFile('imagen_destacada')) {
            if ($request->file('imagen_destacada')->isValid()) {
                $file = $request->file('imagen_destacada');
                $path = public_path('img/productos/');
                $request->file('imagen_destacada')->move($path, $id.'_'.$file->getClientOriginalName());
                $producto->imagen_destacada = 'img/productos/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        $imagen = new Imagen();
        $imagen->id_generales = $id++;
        $id = Imagen::all()->max('id');
        $imagen->orden = "aa";
        $id++;
        $imagen->imagen = $producto->imagen_destacada;
        $imagen->save();

        $producto->save();
        flash('Se ha registrado '. $producto->titulo . ' de forma exitosa')->success()->important();
        return redirect()->route('productos.index_general',$producto->id_subfamilia);
        
    }
    public function edit($id)
    {
        $general_seccion ='active';
        $general_edit = 'active';
        $producto = General::find($id);
        return view('adm.control.general.EditarGeneral')
            ->with('general',$producto)
            ->with('general_seccion', $general_seccion)
            ->with('familia_edit', $general_edit);   
    }
    public function show($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        $producto = General::find($id);
        $producto->titulo = $request->titulo;
        $producto->contenido = $request->contenido;
        $producto->orden = $request->orden;
        $producto->tabla = $request->tabla;
        $id = General::all()->max('id');
        $id++;
        if ($request->hasFile('imagen_destacada')) {
            if ($request->file('imagen_destacada')->isValid()) {
                $file = $request->file('imagen_destacada');
                $path = public_path('img/productos/');
                $request->file('imagen_destacada')->move($path, $id.'_'.$file->getClientOriginalName());
                $producto->imagen_destacada = 'img/productos/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        $producto->save();
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('productos.index_general',$producto->id_subfamilia);
    }

    public function destroy($id)
    {
        $producto= General::find($id);
        $id= $producto->id_subfamilia;
        $producto -> delete();
        return redirect()->route('productos.index_general',$id);
    }
}
