<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use DB;

class ClienteController extends Controller
{
   
    public function index()
    {
        //
    }

    
    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        $cliente=new Cliente();
        $cliente=Cliente::create($request->all());
        if($cliente->id!=0){
            return redirect('numeros-form/'.$cliente->id)->with('success', true);
        }else{
            return "Falha cliente nao foi inserido";
        }
    }

    //formulario de cliente existente na pesquisa de autocomplete
    public function formAddClienteExistente($id){
            $cliente = DB::table('clientes')
            ->join('provincia', 'clientes.provincia_id', '=', 'provincia.id')
            ->where('clientes.id',$id)
            ->select('clientes.*', 'provincia.provincia as provincia')
            ->first();
            return view('cliente.cliente_existente',compact('cliente'));
    }

    public function autocomplete(Request $request){
       if ($request->get('term')) {
            $search = $request->get('term');
            $clientes = Cliente::where('nome', 'ILIKE', '%' . $search . '%')
                    ->orWhere('nuit', 'LIKE', '%' . $search . '%')
                    ->get();
            $filtrar = [];
            if (count($clientes) == 0)
                $filtrar[] = 'Este cliente não foi encontrado';
            else {
                foreach ($clientes as $key => $value) {
                    $filtrar[] = ['id' => $value->id, 'value' => $value->nome.', NUIT: '.$value->nuit];
                }
            }
            return response()->json($filtrar);
        }     
    }
    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
