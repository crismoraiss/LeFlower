<?php

namespace App\Http\Controllers;

use App\Mail\ContatoEmail;
use App\Models\Contato;
use App\Models\news_letters;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContatoController extends Controller
{
    //
    public function index(){
        return view('site.contato');
    }

   // Contato email
   public function salvarNoBanco(Request $request){

    // dd($request);

    $dados = $request->json()->all();

      $validarDados = Validator::make($dados, [
          'nomeContato'    => 'required|max:100',
         'emailContato'   => 'required|email|max:100',
         'foneContato'    => 'required|max:15',
          'msgContato'     => 'required',

      ]);

      if ($validarDados->fails()) {
        return response()->json(['errors', $validarDados->errors()], 422);

    } else {

            $contato = Contato::create($validarDados->validated());

            //Por email
            Mail::to('leflowersalao@gmail.com')->send(new ContatoEmail($contato));

            return response()->json(['success' => 'Email registrado com sucesso']);
        }
    }

    // newsletter
    // NewsLetter
    public function salvarNoEmail(Request $request1)
    {

        //dd($request1);
        $dados = $request1->json()->all();

        $validarDadosNew = Validator::make($dados, [
            'emailNews' => 'required|email|max:100'
        ]);

        if ($validarDadosNew->fails()) {
            return response()->json(['errors' => $validarDadosNew->errors()], 422);
        } else {

             news_letters::create($validarDadosNew->validated());

             return response()->json(['success' => 'Email salvo com sucesso!']);
        }
    }

}

