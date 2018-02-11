
@extends('principal')

@section('conteudo')

<div class="container">
	<div class="form-group row">
	  <label for="example-search-input" class="col-2 col-form-label">Digite as iniciais do Herói Marvel abaixo:</label>

	  <form action="procurarHeroi" method="post">
		  <div class="row">
		    <div class="col-lg-6">
		      <div class="input-group">

		        <input type="text" name="inicial" class="form-control" placeholder="Exemplo...">
		        <span class="input-group-btn">
		          <button class="btn btn-default" type="submit">Pesquisar</button>
		        </span>
		      </div><!-- /input-group -->
		    </div><!-- /.col-lg-6 -->
		  </div><!-- /.row -->
	  </form>
	</div>
</div>






@stop