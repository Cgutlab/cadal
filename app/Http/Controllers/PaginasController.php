<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Producto;
use App\Nuestra;
use App\Producto_general;
use App\Subproducto;
use App\Imagen;
use App\Metadato;
use App\Calidad;
use App\Subfamilia;
use App\Home;
use App\Mision;
use App\Dato;
use App\General;
use App\Servicio;
use App\Http\Requests\Contacto;
use App\Http\Requests\ContactoRequest;
use App\Mail\sendmail;
use Mail;

class PaginasController extends Controller
{
	public function index(){
        $metadato= metadato::where('seccion','home')->first();
        $home = Home::all()->first();
        $slider= slider::where('seccion','home')->orderBy('orden','ASC')->get();
        $producto= producto::all();
        return view('pages.home',[
            'sliders' => $slider,
            'home' => $home,
            'productos' => $producto,
            'metadatos' => $metadato
        ]);
	}
    public function empresa(Request $request)
    {
    	$metadato= metadato::where('seccion','empresa')->first();
        $slider= slider::where('seccion','empresa')->orderBy('orden','ASC')->get();
        $nuestra_empresa = Nuestra::all()->first();
    	return view('pages.empresa',[
            'metadatos' => $metadato,
            'sliders' => $slider,
            'nuestra' => $nuestra_empresa
        ]);
    }
    public function familia(){
        $metadato= metadato::where('seccion','productos')->first();
        $slider= slider::where('seccion','soplado')->orderBy('orden','ASC')->get();
        $producto= Subfamilia::orderby('orden','ASC')->where('id_familia',null)->get();
        $familia = Subfamilia::orderBy('orden','ASC')->get();
        return view('pages.producto',[
            'metadatos' => $metadato,
            'sliders' => $slider,
            'productos' => $producto,
            'familias' => $familia
        ]);
    }
    public function categoria($id){
        
    }


    public function subproducto($id){
        $metadato= metadato::where('seccion','productos')->first();
        $familia = Subfamilia::where('id_familia',$id)->get();
        $seleccionada = Subfamilia::where('id',$id)->first();
        $productos = General::orderby('orden','ASC')->get();
        $subfamilia = Subfamilia::where('id_familia',null)->get();
        $subfamilia2 = Subfamilia::all();
        return view('pages.subproducto',[
            'familias' => $familia,
            'seleccionada' => $seleccionada,
            'metadatos' => $metadato,
            'productos' => $productos,
            'subfamilias' => $subfamilia,
            'subfamilias2' => $subfamilia2
        ]);
    }


    public function subgaleria($id){
        
        $metadato= Metadato::where('seccion','productos')->first();
        $producto = General::find($id);
        $familia2 = Subfamilia::where('id',$producto->id_subfamilia)->first();
        $imagen = Imagen::orderBy('orden','ASC')->where('id_generales',$id)->get();
        $familia =Subfamilia::orderBy('orden','ASC')->get();

        $subfamilia = Subfamilia::where('id_familia',null)->get();
        $subfamilia2 = Subfamilia::all();
        $productos = General::all();
        $seleccionada = General::where('id',$id)->first();
        return view('pages.subgaleria',[
            'metadatos' => $metadato,
            'producto' => $producto,
            'familia2' => $familia2,
            'familias' => $familia,
            'imagenes' => $imagen,
            'subfamilias' => $subfamilia,
            'productos' => $productos,
            'seleccionada' => $seleccionada,
            'subfamilias2' => $subfamilia2
        ]);
    }
    public function impresion(){
        
        $metadato= Metadato::where('seccion','impresion')->first();
        $impresion = Servicio::orderBy('orden','ASC')->where('seccion','impresion')->get();
        return view('pages.impresion',[
            'metadatos' => $metadato,
            'servicios' => $impresion
        ]);
    }
    public function inyeccion(){
        $metadato= metadato::where('seccion','inyeccion')->first();
        $servicio = Servicio::orderBy('orden','ASC')->where('seccion','inyeccion')->get();
        return view('pages.inyeccion',[
            'metadatos' => $metadato,
            'servicios' => $servicio
        ]);
    }
    public function matricerio()
    {
        $metadato= metadato::where('seccion','matriceria')->first();
        $servicio = Servicio::orderBy('orden','ASC')->where('seccion','matricerio')->get();
        return view('pages.matricerio',[
            'servicios' => $servicio,
            'metadatos' => $metadato
        ]);
    }
    public function contacto(Request $request){
        $metadato= Metadato::where('seccion','contacto')->first();
        return view('pages.contacto',[
            'metadatos' => $metadato
        ]);
    }
    // public function buscador(Request $request){
    //     $metadato= Metadato::where('seccion','buscador')->first();
    //     $producto = null;
    //     return view('pages.buscador',[
    //         'metadatos' => $metadato,
    //         'productos' => $producto
    //     ]);
    // }
    public function buscar(Request $request){
        $metadatos= Metadato::where('seccion','productos')->first();
        $familias = Subfamilia::orderBy('orden','ASC')->get();
        $productos = null;
        if($request){
            if($request->buscar){
                $productos = Subfamilia::where('titulo','like','%'.$request->buscar.'%')->get();
            }
        }
        
        
        return view('pages.buscador',compact('productos','metadatos','familias'));
    }
    
    public function mail(ContactoRequest $request){
        $correo = Dato::where('tipo','mail')->first();
        $nombre = $request->nombre;
        $apellido = $request->apellido;
        $empresa = $request->empresa;
        $email = $request->email; 
        $mensaje = $request->mensaje;
        Mail::to('angelicabaca4@gmail.com')->send(new sendmail($nombre, $apellido, $empresa, $email, $mensaje));

        if(Mail::failures()){
            flash('Ha ocurrido un error')->error()->important();
            return redirect()->route('contacto');
        }
        flash('El mensaje se ha enviado exitosamente')->success()->important();
            return redirect()->route('contacto');
    }
    public function enviar_presupuesto(Contacto $request)
    {   
        $dato= Dato::where('tipo','mail')->first();
        $nombre= $request->nombre;
        $localidad= $request->localidad;
        $telefono= $request->telefono;
        $email= $request->email;
        $plano= $request->plano;
        $newid = Imagen::all()->max('subproducto_id');
        $mensaje= $request->mensaje;
        $newid++;
        if ($request->hasFile('archivo')) {
            if ($request->file('archivo')->isValid()) {
                $file = $request->file('archivo');
                $path = public_path('img/archivos/');
                $request->file('archivo')->move($path, $newid.'_'.$file->getClientOriginalName());
                $archivo = 'img/archivos/' . $newid.'_'.$file->getClientOriginalName();
                
            }
        }

        //Mail::to($dato)->send(new sendpresupuesto($nombre,$localidad,$email,$telefono,$mensaje,$plano,$archivo));

        Mail::send('pages.enviarpresupuesto', ['nombre' => $nombre, 'localidad' => $localidad, 'email' => $email, 'telefono' => $telefono, 'mensaje' => $mensaje, 'plano' => $plano], function ($message) use ($archivo){

            $message->from('cercas@osolelaravel.com', 'Cercas');

            $message->to('angelicabaca4@gmail.com');

            //Attach file
            $message->attach($archivo);

            //Add a subject
            $message->subject("Hello from Scotch");

        });
        if (Mail::failures()) {
            flash('Ha ocurrido un error.')->error()->important();
            return redirect()->route('presupuesto');
        }
        flash('El mensaje se ha enviado exitosamente.')->success()->important();
        return redirect()->route('presupuesto');
    }

/*----------------------------------------------------------------------------------------*/
}
