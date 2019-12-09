<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Proveedor;
use App\Persona;


class ProveedorController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->ajax()) return redirect('/');

        $buscar = $request->buscar;
        $criterio = $request->criterio;
        
        if ($buscar==''){
            $personas = Proveedor::join('personas','proveedores.id','=','personas.id')
            ->select('personas.id','personas.nombre')
            ->orderBy('personas.id', 'desc')->paginate(10);
        }
        else{
            $personas = Proveedor::join('personas','proveedores.id','=','personas.id')
            ->select('personas.id','personas.nombre')            
            ->where('personas.'.$criterio, 'like', '%'. $buscar . '%')
            ->orderBy('personas.id', 'desc')->paginate(10);
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

    public function selectProveedor(Request $request){
        if (!$request->ajax()) return redirect('/');

        $filtro = $request->filtro;
        $proveedores = Proveedor::join('personas','proveedores.id','=','personas.id')
        ->where('personas.nombre', 'like', '%'. $filtro . '%')
        ->orWhere('personas.num_documento', 'like', '%'. $filtro . '%')
        ->select('personas.id','personas.nombre','personas.num_documento')
        ->orderBy('personas.nombre', 'asc')->get();

        return ['proveedores' => $proveedores];
    }

   

    public function store(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        
        try{
            DB::beginTransaction();
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

            $proveedor = new Proveedor();
            $proveedor->alias = $request->alias;
            $proveedor->id = $persona->id;
            $proveedor->save();

            DB::commit();

        } catch (Exception $e){
            DB::rollBack();
        }

        
        
    }

    public function update(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        
        try{
            DB::beginTransaction();

            //Buscar primero el proveedor a modificar
            $proveedor = Proveedor::findOrFail($request->id);

            $persona = Persona::findOrFail($proveedor->id);

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

            
            $proveedor->alias = $request->alias;
            $proveedor->save();

            DB::commit();

        } catch (Exception $e){
            DB::rollBack();
        }

    }
}
