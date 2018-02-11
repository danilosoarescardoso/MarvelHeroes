@extends('principal')

@section('conteudo')

@foreach ($ocorrencias as $ocorrencia)



<div class="row">
  <div class="col-sm-6">
  	<div class="card border-primary mb-3" style="max-width: 18rem;">
  	  <div class="card-header">{{ $ocorrencia['name'] }}</div>
  	  <div class="card-body text-primary">
  	  <p class="card-text">Descrição: {{ $ocorrencia['description'] }}</p>
  	  </div>
  	</div>
</div>
</div>



@endforeach


@stop