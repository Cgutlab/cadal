<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Http\Requests\HomeRequest;

class HomeController extends Controller
{
    public function index(Request $request)
    {
       $home = Home::all()->first();

        return redirect()->route('home.edit', $home->id);
    }
    public function create()
    {
        
    } 
    public function store(Request $request)
    {
        
    }
    public function edit($id)
    {
        $home_seccion= 'active';
        $home_edit ='active';
        $home = Home::find($id);
        return view('adm.control.home.EditarHome')
            ->with('home',$home)
            ->with('home_seccion', $home_seccion)
            ->with('home_edit', $home_edit);
    }
    public function show($id)
    {
        
    }

    public function update(HomeRequest $request, $id)
    {
        $dato=Home::find($id);
        $dato->titulo=$request->titulo;
        $dato->contenido=$request->contenido;
        $dato->link=$request->link;
        $dato->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('home.index');
    }

    public function destroy($id)
    {
       
    }
}

