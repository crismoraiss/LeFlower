<?php

namespace App\Http\Controllers;

use App\Models\ServicosModel;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index(){
        return view('site.servico');
    }

    public function servicoCabelo(){
        return view('site.servicos.cabelo');
    }

    public function servicoMaquiagem(){
        return view('site.servicos.maquiagem');
    }

    public function servicoUnha(){
        return view('site.servicos.unha');
    }
    public function servicoSobrancelha(){
        return view('site.servicos.sobrancelha');
    }

    public function servicoCilios(){
        return view('site.servicos.cilio');
    }
    public function servicoDepilacao(){
        return view('site.servicos.depilacao');
    }
    public function servicoMassagem(){
        return view('site.servicos.massagem');
    }
    public function servicoRosto(){
        return view('site.servicos.rosto');
    }
    public function servico(){
        return view('site.servicos.cabelo');
    }

    // Ajax Serviço cabelo

    public function AjaxCabelo(){
        $servicoCabelo = ServicosModel::where('tipoServico', 'Cabelo')->get();

        return response()->json($servicoCabelo);
    }

    public function indexServico(Request $request){
        $tipoServico = $request->query('tipo'); // Obtém o tipo de serviço da consulta

        // Verifica se foi fornecido um tipo de serviço
        if($tipoServico){
            $servicos = ServicosModel::where('tipoServico', $tipoServico)->get(); // Filtra os serviços pelo tipo fornecido
        } else {
            $servicos = ServicosModel::all(); // Se nenhum tipo fornecido, retorna todos os serviços
        }

        return response()->json($servicos);
    }

}
