<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Subfamilia;



use App\Http\Requests\SubproductoRequest;



class SubproductoController extends Controller

{

    

    public function index()

    {

        $home_seccion= 'active';

        $home_edit ='active';
        $subfamilia2 = Subfamilia::orderBy('id_familia','ASC')->get();
        $subfamilia = Subfamilia::orderBy('id_familia','ASC')->get();

        return view('adm.control.subfamilia.ListaSubfamilia')

        ->with('subfamilias',$subfamilia)
        ->with('subfamilias2',$subfamilia2)
        ->with('general_seccion', $home_seccion)

        ->with('general_edit', $home_edit);

    }

    public function create()

    {

    	$producto  = Subfamilia::all();

        $home_seccion= 'active';

        $home_edit ='active';

        return view('adm.control.subfamilia.CrearSubfamilia')

        ->with('familias',$producto)

        ->with('general_seccion', $home_seccion)

        ->with('general_create', $home_edit);

    }

    public function store(SubproductoRequest $request)

    {

        $producto = new Subfamilia();

        $id = Subfamilia::all()->max('id');

        $producto->titulo= ucfirst(trans($request->titulo));

        $producto->id_familia=$request->id_familia;

        $producto->orden=$request->orden;

        $id++;

        if ($request->hasFile('imagen')) {

            if ($request->file('imagen')->isValid()) {

                $file = $request->file('imagen');

                $path = public_path('img/familia/');

                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());

                $producto->imagen = 'img/familia/' . $id.'_'.$file->getClientOriginalName();

            }

        }

        $producto->save();

        flash('Se ha registrado '. $producto->titulo . ' de forma exitosa')->success()->important();

        return redirect()->route('subproductos.index');

        

    }

    public function edit($id)

    {

        $subproducto = Subfamilia::find($id);

        $familia = Subfamilia::all();

        $home_seccion= 'active';

        $home_edit ='active';

        return view('adm.control.subfamilia.EditarSubfamilia')

            ->with('subproducto',$subproducto)

            ->with('familias',$familia)

            ->with('general_seccion', $home_seccion)

            ->with('general_edit', $home_edit); 

    }

    public function show($id)

    {

        

    }



    public function update(Request $request, $id)

    {

        $producto = Subfamilia::find($id);

        $id = Subfamilia::all()->max('id');

        $producto->titulo = $request->titulo;

        $producto->id_familia=$request->id_familia;

        $producto->orden=$request->orden;

        $id++;

        if ($request->hasFile('imagen')) {

            if ($request->file('imagen')->isValid()) {

                $file = $request->file('imagen');

                $path = public_path('img/familia/');

                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());

                $producto->imagen = 'img/familia/' . $id.'_'.$file->getClientOriginalName();

            }

        }

        $producto->save();

        flash('Se ha actualizado de forma exitosa')->success()->important();

        return redirect()->route('subproductos.index');

    }



    public function destroy($id)

    {

        $subproducto= Subfamilia::find($id);

        $subproducto -> delete();

        flash('Se ha eliminado correctamente.')->success()->important();

        return redirect()->route('subproductos.index');

    }

}

