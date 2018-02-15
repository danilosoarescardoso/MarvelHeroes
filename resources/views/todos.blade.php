@extends('principal')

@section('conteudo')

<h2>Veja todos os heróis</h2>
<p>Os 20 primeiros, em ordem alfabética.</p>


<div class="row mb-2">

@foreach($dados_pagina['heroi'] as $heroi)
	
	<div class="col-md-4 p-3">
		<div class="card flex-md-row mb-4 box-shadow h-md-250 h-100">
			<div class="card-body d-flex flex-column  ">
				<h4 class="mb-0">
					<a href="/id?{{ $heroi['id'] }}"><strong class="d-inline-block mb-2 text-success">{{ $heroi['name'] }}</a></strong>
				</h4>
				<img src="{{ $heroi['thumbnail']['path'] }}/portrait_incredible.jpg"><hr>
					<p class="card-text">
					    {{ str_limit($heroi['description'], 110) }}
					</p>
				<hr>
				<div class="form-group">
					<strong class="d-inline-block mb-2">Séries</strong>
				  <select class="form-control" id="sel1">
				  	
				  	@foreach ($heroi['series']['items'] as $serie)
				  		<option>{{$serie['name']}}</option>
				  	@endforeach
				  
				  </select>
				</div>

			</div>
		</div>
	</div>

@endforeach

</div>


@stop