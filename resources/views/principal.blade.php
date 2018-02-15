<html>
<head>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- Optional theme -->
    <link href="https://unpkg.com/picnic" rel="stylesheet">


    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico" />

    <title>Marvel Heroes</title>

</head>
<body>
  <div class="container">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Marvel Heroes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      </li> 
    </ul>
    <form class="form-inline my-2 my-lg-0" action="{{ action('HeroiController@procura') }}" method="POST" >
      <input class="form-control mr-sm-2" name="inicial" type="search" placeholder="Insira 3 iniciais" aria-label="Search" maxlength="3" required >
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar Super Herói</button>
    </form>
  </div>
</nav>



    @yield('conteudo')
<br><br>
  <footer class="footer">
      <p>© <a href="http://danilosoarescardoso.github.io"> Danilo Soares Cardoso</a>, 2018.</p>
  </footer>

  </div>
</body>
</html>