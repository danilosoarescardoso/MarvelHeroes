<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroiController extends Controller
{
    //procurar heróis
	public function procura(){

		$inicialHeroi = $_POST['inicial'];
		$apiKey = "d26659defa53cd4c8f5f6df8bd82fc1c";
		$privateKey = "6d4aa452d7ee049559acc6fd84cf4403325eb7ea";
		$ts = 1;
		$dados_pagina = [];
		
		$hash = md5($ts . $privateKey . $apiKey);

		$url = "https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=$apiKey&nameStartsWith=$inicialHeroi&hash=$hash";

		$resposta = file_get_contents($url);
		$resposta_dados = json_decode($resposta, true);
		$herois = $resposta_dados['data']['results'];
	
		$dados_pagina['heroi'] = $herois;
		
		if (empty($herois)) {
			return view('erro');

		}

		foreach ($dados_pagina['heroi'] as $key => $value){
			return view('resultado')->with(compact('dados_pagina'));
		}
		
	}

	public function todos(){
		$apiKey = "d26659defa53cd4c8f5f6df8bd82fc1c";
		$privateKey = "6d4aa452d7ee049559acc6fd84cf4403325eb7ea";
		$ts = 1;
		$dados_pagina = [];

		$hash = md5($ts . $privateKey . $apiKey);

		$url = "https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=$apiKey&hash=$hash";

		$resposta = file_get_contents($url);
		$resposta_dados = json_decode($resposta, true);
		$herois = $resposta_dados['data']['results'];

		$dados_pagina['heroi'] = $herois;

		foreach ($dados_pagina['heroi'] as $key => $value){
			return view('todos')->with(compact('dados_pagina'));
		}

	}

/*	public function detalhes($id){
		$idHeroi = $id;
		$apiKey = "d26659defa53cd4c8f5f6df8bd82fc1c";
		$privateKey = "6d4aa452d7ee049559acc6fd84cf4403325eb7ea";
		$ts = 1;
		$dados_pagina = [];

		$hash = md5($ts . $privateKey . $apiKey);

		$url = "https://gateway.marvel.com:443/v1/public/characters/1011334?apikey=$apiKey&hash=$hash";


		$resposta = file_get_contents($url);
		$resposta_dados = json_decode($resposta, true);

		return dd ($resposta_dados);



	}*/

}
