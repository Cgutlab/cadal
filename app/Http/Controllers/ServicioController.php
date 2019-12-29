<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Http\Requests\SliderRequest;

class ServicioController extends Controller
{
    public function index()
    {
        $home_seccion = 'active';
        $slider_edit = 'active';
        $slider  = Servicio::orderBy('seccion','ASC')->get();
        return view('adm.control.servicios.ListaServicio')
        ->with('servicios',$slider)
        ->with('servicio_seccion', $home_seccion)
        ->with('servicio_edit', $slider_edit);
    }

    public function create()
    {
        $home_seccion = 'active';
        $slider_create = 'active';
        return view('adm.control.servicios.CrearServicio')
        ->with('servicio_seccion', $home_seccion)
        ->with('servicio_create', $slider_create);
    } 
    public function store(Request $request)
    {
        $slider = new Servicio();
        $slider->titulo = $request->titulo;
        $slider->subtitulo = $request->subtitulo;
        $slider->orden = $request->orden;
        $slider->seccion = $request->seccion;
        $slider->contenido = $request->contenido;
        $id = Servicio::all()->max('id');
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/servicio/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $slider->imagen = 'img/servicio/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('imagen2')) {
            if ($request->file('imagen2')->isValid()) {
                $file = $request->file('imagen2');
                $path = public_path('img/servicio/');
                $request->file('imagen2')->move($path, $id.'_'.$file->getClientOriginalName());
                $slider->imagen = 'img/servicio/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('imagen3')) {
            if ($request->file('imagen3')->isValid()) {
                $file = $request->file('imagen3');
                $path = public_path('img/servicio/');
                $request->file('imagen3')->move($path, $id.'_'.$file->getClientOriginalName());
                $slider->imagen = 'img/servicio/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('imagen4')) {
            if ($request->file('imagen4')->isValid()) {
                $file = $request->file('imagen4');
                $path = public_path('img/servicio/');
                $request->file('imagen4')->move($path, $id.'_'.$file->getClientOriginalName());
                $slider->imagen = 'img/servicio/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('imagen5')) {
            if ($request->file('imagen5')->isValid()) {
                $file = $request->file('imagen5');
                $path = public_path('img/servicio/');
                $request->file('imagen5')->move($path, $id.'_'.$file->getClientOriginalName());
                $slider->imagen = 'img/servicio/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        $slider->save();
        flash('Se ha registrado de forma exitosa')->success()->important();
        return redirect()->route('servicios.index');
        
        
    }
    public function edit($id)
    {
        $slider = Servicio::find($id);
        $home_seccion = 'active';
        $slider_edit = 'active';
        return view('adm.control.servicios.EditarServicio')
        ->with('servicio',$slider)
        ->with('servicio_seccion',$home_seccion)
        ->with('servicio_edit', $slider_edit);
    }
    public function show($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        $slider=Servicio::find($id);
        $id = Servicio::all()->max('id');
        $slider->titulo = $request->titulo;
        $slider->subtitulo = $request->subtitulo;
        $slider->orden = $request->orden;
        $slider->seccion = $request->seccion;
        $slider->contenido = $request->contenido;
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/servicio/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $slider->imagen = 'img/servicio/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        $seccion=$slider->seccion;
        $slider->save();
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('servicios.index');
        
    }

    public function destroy($id)
    {
        $slider= Servicio::find($id);
        $seccion=$slider->seccion;
        $slider -> delete();
        flash('Se ha eliminado correctamente.')->success()->important();
        return redirect()->route('servicios.index');
        
    }
}
