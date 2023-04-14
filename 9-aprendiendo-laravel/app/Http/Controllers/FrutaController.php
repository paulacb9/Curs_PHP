<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ilumminate\Http\RedirectResponse; 

class FrutaController extends Controller
{
    public function index(){
        $frutas = DB::table('frutas')
        ->orderBy('id','desc')
        ->get();

        return view('fruta.index', ['frutas' => $frutas]);
    }

    public function detalle($id){
        $fruta = DB::table('frutas')->where('id', '=', $id)->first();

        // var_dump($fruta);
        // die();
        
        return view('fruta.detalle', ['fruta' => $fruta]);
    }

    public function create(){
        return view('fruta.create');
    }

    public function save(Request $request){
        $fruta = DB::table('frutas')->insert(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('Y-m-d') 
        ));
        return redirect('frutas/index')->with('status', 'Fruta creada correctamente');
    }

    public function delete($id){
        $fruta = DB::table('frutas')->where('id', $id)->delete();
        return redirect('frutas/index')->with('status', 'Fruta eliminada correctamente');
    }

    public function edit($id){
        // sacar el registro de la bd
        $fruta = DB::table('frutas')->where('id', $id)->first();

        //pasarle a la vista el objeto y rellenar el formulario
        return view('fruta.create', [
            'fruta' => $fruta
        ]);
    }

    public function update(Request $request){
        $id = $request->input('id');
        $fruta = DB::table('frutas')->where('id', $id)->update(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio')
        ));
        return redirect('frutas/index')->with('status', 'Fruta actualizada correctamente');
    }
}
