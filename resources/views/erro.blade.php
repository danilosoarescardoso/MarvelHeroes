@extends('principal')

@section('conteudo')
	  <h2 class="card-title">Ops!</h2>
	  <div class="alert alert-danger">
	    <p class="card-text">Nenhum herói encontrado com essas iniciais. </p>
	  </div>
	  <img class="card-img-top" src="https://pmcvariety.files.wordpress.com/2017/08/jared-leto-joker.jpg">	
	  <hr>
	  <a href="/" class="btn btn-primary">Tentar novamente!</a>

@stop