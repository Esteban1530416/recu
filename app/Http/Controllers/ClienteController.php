<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->ajax()) return redirect('/');

        $buscar = $request->buscar;
        $criterio = $request->criterio;
        
        if ($buscar==''){
            $personas = Persona::orderBy('id', 'desc')->paginate(10);
        }
        else{
            $personas = Persona::where($criterio, 'like', '%'. $buscar . '%')->orderBy('id', 'desc')->paginate(10);
        }
        

        return [
            'pagination' => [
                'total'        => $personas->total(),
                'current_page' => $personas->currentPage(),
                'per_page'     => $personas->perPage(),
                'last_page'    => $personas->lastPage(),
                'from'         => $personas->firstItem(),
                'to'           => $personas->lastItem(),
            ],
            'personas' => $personas
        ];
    }

    public function selectCliente(Request $request){
        if (!$request->ajax()) return redirect('/');

        $filtro = $request->filtro;
        $clientes = Persona::where('nombre', 'like', '%'. $filtro . '%')
        ->orWhere('reprecentante', 'like', '%'. $filtro . '%')
        ->select('id','nombre','reprecentante')
        ->orderBy('nombre', 'asc')->get();

        return ['clientes' => $clientes];
    }


    public function store(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $persona = new Persona();
      


        $persona->reprecentante = $request->reprecentante;
        $persona->nombre = $request->nombre;
        $persona->rfc = $request->rfc;
        $persona->curp = $request->curp;
        $persona->domicilio = $request->domicilio;
        $persona->numexterior = $request->numexterior;
        $persona->numinterior = $request->numinterior;
        $persona->colonia = $request->colonia;
        $persona->cp = $request->cp;
        $persona->localidad = $request->localidad;
        $persona->municipio = $request->municipio;
        $persona->estado = $request->estado;
        $persona->pais = $request->pais;
        $persona->telefono = $request->telefono;
        $persona->celular = $request->celular;
        $persona->email = $request->email;
        $persona->comentario = $request->comentario;
        $persona->limitecredito = $request->limitecredito;
        $persona->diascredito = $request->diascredito;
    








        $persona->save();
    }

    public function update(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $persona = Persona::findOrFail($request->id);


        $persona->reprecentante = $request->reprecentante;
        $persona->nombre = $request->nombre;
        $persona->rfc = $request->rfc;
        $persona->curp = $request->curp;
        $persona->domicilio = $request->domicilio;
        $persona->numexterior = $request->numexterior;
        $persona->numinterior = $request->numinterior;
        $persona->colonia = $request->colonia;
        $persona->cp = $request->cp;
        $persona->localidad = $request->localidad;
        $persona->municipio = $request->municipio;
        $persona->estado = $request->estado;
        $persona->pais = $request->pais;
        $persona->telefono = $request->telefono;
        $persona->celular = $request->celular;
        $persona->email = $request->email;
        $persona->comentario = $request->comentario;
        $persona->limitecredito = $request->limitecredito;
        $persona->diascredito = $request->diascredito;
    




        $persona->save();
    }
}
