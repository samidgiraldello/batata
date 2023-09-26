<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerQuiz extends Controller
{
    private $perguntas = array();

    public function __construct(){
        $this->perguntas['pergunta1'] = 'B';
        $this->perguntas['pergunta2'] = 'D';
        $this->perguntas['pergunta3'] = 'A';
    }
    public function index(){
        session(['acertos' => 0]);
        return view('pagina1');
    }

    public function pagina1(Request $request){
        
        $resposta = $request->input('pergunta');

        session(['resposta1' => $resposta]);

        if(strcmp($this->perguntas['pergunta1'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado1' => 'Acertou']);
        } else {
            session(['resultado1' => 'Errou']);
        } 
        return view('pagina2');
    }

    public function pagina2(Request $request){
        
        $resposta = $request->input('pergunta');

        session(['resposta2' => $resposta]);

        if(strcmp($this->perguntas['pergunta2'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado2' => 'Acertou']);
        } else {
            session(['resultado2' => 'Errou']);
        } 
        return view('pagina3');
    }

    public function pagina3(Request $request){
        
        $resposta = $request->input('pergunta');

        session(['resposta3' => $resposta]);

        if(strcmp($this->perguntas['pergunta3'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado3' => 'Acertou']);
        } else {
            session(['resultado3' => 'Errou']);
        } 
        
        $dados = array();

        $dados[1]['gabarito'] = $this->perguntas['pergunta1'];
        $dados[1]['resposta'] = session('resposta1');
        $dados[1]['resultado'] = session('resultado1');

        $dados[2]['gabarito'] = $this->perguntas['pergunta2'];
        $dados[2]['resposta'] = session('resposta2');
        $dados[2]['resultado'] = session('resultado2');

        $dados[3]['gabarito'] = $this->perguntas['pergunta3'];
        $dados[3]['resposta'] = session('resposta3');
        $dados[3]['resultado'] = session('resultado3');

        $acertos = session('acertos');

        if($acertos == 3)
            $dados['mensagem'] = "Parabens, você acertou todas! Pode pegar a próxima pista";
        else if ($acertos <= 2)
            $dados['mensagem'] = "Você acertou algumas! ". $acertos . " de 3." ;
        else
            $dados['mensagem'] = "Que Pena! Você não acertou nenhuma! ";
        return view('resultado', compact('dados'));
    }
}
