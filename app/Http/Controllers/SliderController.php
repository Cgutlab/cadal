<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Http\Requests\SliderRequest;

class SliderController extends Controller
{
	public function index()
    {
        $home_seccion = 'active';
        $slider_edit = 'active';
        $seccion = "home";
        $slider  = Slider::orderBy('seccion','ASC')->get();
    	return view('adm.control.Sliders.ListaSlider')
        ->with('sliders',$slider)
        ->with('seccion', $seccion)
        ->with('home_seccion', $home_seccion)
        ->with('slider_edit', $slider_edit);
    }

    public function index_empresa()
    {
        $seccion = "empresa";
        $empresa_seccion = 'active';
        $sliderem_edit = 'active';
        $slider  = Slider::orderBy('seccion','ASC')->get();
        return view('adm.control.Sliders.ListaSlider')
        ->with('sliders',$slider)
        ->with('seccion', $seccion)
        ->with('contenido_seccion', $empresa_seccion)
        ->with('sliderem_edit', $sliderem_edit);
    }
    public function index_soplado()
    {
        $seccion = "soplado";
        $empresa_seccion = 'active';
        $sliderem_edit = 'active';
        $slider  = Slider::orderBy('seccion','ASC')->get();
        return view('adm.control.Sliders.ListaSlider')
        ->with('sliders',$slider)
        ->with('seccion', $seccion)
        ->with('general_seccion', $empresa_seccion)
        ->with('sliderge_edit', $sliderem_edit);
    }
    public function create()
    {
        $seccion = "home";
        $home_seccion = 'active';
        $slider_create = 'active';
        return view('adm.control.Sliders.CrearSlider')
        ->with('seccion', $seccion)
        ->with('home_seccion', $home_seccion)
        ->with('slider_create', $slider_create);
    } 
    public function create_empresa(){
        $seccion = "empresa";
        $empresa_seccion = 'active';
        $sliderem_create = 'active';
        return view('adm.control.Sliders.CrearSlider')
        ->with('seccion', $seccion)
        ->with('contenido_seccion', $empresa_seccion)
        ->with('sliderem_create', $sliderem_create);
    }
    public function create_soplado(){
        $seccion = "soplado";
        $empresa_seccion = 'active';
        $sliderem_create = 'active';
        return view('adm.control.Sliders.CrearSlider')
        ->with('seccion', $seccion)
        ->with('general_seccion', $empresa_seccion)
        ->with('sliderge_create', $sliderem_create);
    }
    public function store(SliderRequest $request)
    {
     	$slider = new Slider();
        $slider->titulo = $request->titulo;
        $slider->subtitulo = $request->subtitulo;
        $slider->orden = $request->orden;
        $slider->seccion = $request->seccion;
     	$id = Slider::all()->max('id');
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/slider/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $slider->imagen = 'img/slider/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        $slider->save();
        flash('Se ha registrado de forma exitosa')->success()->important();
        
        if($request->seccion == "home"){
            return redirect()->route('sliders.index');
        }
        else{
            if($request->seccion == "empresa"){
                return redirect()->route('sliders.index_empresa');
            }
            else{
                if($request->seccion == "soplado"){
                    return redirect()->route('sliders.index_soplado');
                }
            }
        }
        
    }
    public function edit($id)
    {
        $slider = Slider::find($id);
        if($slider->seccion == "home"){
            $home_seccion = 'active';
            $slider_edit = 'active';
            return view('adm.control.Sliders.EditarSlider')
            ->with('slider',$slider)
            ->with('home_seccion',$home_seccion)
            ->with('slider_edit', $slider_edit);
        }
        else{
            if($slider->seccion == "empresa"){
                $empresa_seccion = 'active';
                $sliderem_edit = 'active';
                return view('adm.control.Sliders.EditarSlider')
                ->with('slider',$slider)
                ->with('contenido_seccion',$empresa_seccion)
                ->with('sliderem_edit', $sliderem_edit);
            }
            else{
                if($slider->seccion == "soplado"){
                    $empresa_seccion = 'active';
                    $sliderem_edit = 'active';
                    return view('adm.control.Sliders.EditarSlider')
                    ->with('slider',$slider)
                    ->with('natural_seccion',$empresa_seccion)
                    ->with('sliderna_edit', $sliderem_edit);
                }
            }
        }

    }
    public function show($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        $slider=Slider::find($id);
        $id = Slider::all()->max('id');
        $slider->titulo = $request->titulo;
        $slider->subtitulo = $request->subtitulo;
        $slider->orden = $request->orden;
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/slider/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());
                $slider->imagen = 'img/slider/' . $id.'_'.$file->getClientOriginalName();
            }
        }
        $seccion=$slider->seccion;
        $slider->save();
        flash('Se ha actualizado de forma exitosa')->success()->important();
        if($seccion == 'home'){
            return redirect()->route('sliders.index');
        }
        else{
            if($seccion == 'empresa'){
                return redirect()->route('sliders.index_empresa');
            }
            else{
                if($seccion == 'soplado'){
                    return redirect()->route('sliders.index_soplado');
                }
                
            }
        }
    }

    public function destroy($id)
    {
        $slider= Slider::find($id);
        $seccion=$slider->seccion;
        $slider -> delete();
        flash('Se ha eliminado correctamente.')->success()->important();
        if($seccion === 'home'){
            
            return redirect()->route('sliders.index');
        }
        else{
            if($seccion === 'empresa'){
                return redirect()->route('sliders.index_empresa');
            }
            else{
                if($seccion === 'soplado'){
                    return redirect()->route('sliders.index_soplado');
                }
            }
            
        }
    }
}
