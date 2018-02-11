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
		
		$hash = md5($ts . $privateKey . $apiKey);

		$url = "https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=$apiKey&nameStartsWith=$inicialHeroi&hash=$hash";

		$resposta = file_get_contents($url);
		$resposta_dados = json_decode($resposta, true);
		
		$data = $resposta_dados['data'];
		$results = $data['results'];

		#$series = $results['series'];
		#$series = $todasseries['items'];

		//$imagem = $ocorrencias['thumbnail'] . '/portrait_small';

		return dd($data);
		
		#return view ('resultado', compact('ocorrencias'));

	}

}
