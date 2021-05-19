<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Conta;
use App\Transacao;
use App\Operacao;

class ContaController extends Controller
{

    public function index()
    {

    }

    public function store(Request $request)
    {
        return Conta::create($request->all());
    }

    public function show($id)
    {
        $conta = Conta::where("conta",$id)->first();
        
        return $conta;
        
    }

    public function transacao(Request $request){
        $dadosRequest = $request->all();
        $conta = Conta::where('id',$request->contaId)->first();
        $transacao =  Transacao::create($request->all());
        // dd($request);
        if($request->tipoId == 1){
            
            $conta->valor += (integer)$request->valor;
        }
        if($request->tipoId == 2){
            $conta->valor -= (integer)$request->valor;
        }

        $conta->save();
        return $conta;
    }

    public function listagem($id){
        // dd($conta);
        $conta= Conta::where('id',$id)->first();
        
        $transacoes = Transacao::where('contaId',$conta->id)->get();    

        $lista = null;

        foreach($transacoes as $transacao){
               
            $lista[$transacao->transacaoId] = [
                "id" => $transacao->transacaoId,
                "created_at" => $transacao->created_at,
                "valor" => $transacao->valor,
                "tipo" => Operacao::find($transacao->tipoId)

            ];
        }

        return $lista;
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        //
    }
}
