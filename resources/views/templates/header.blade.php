<!DOCTYPE html>
<html>
<head>
  <title>@yield('titulo')</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">



  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <header>
  <nav>
    <div class="nav-wrapper">
        <nav>
        <div class="nav-wrapper light-green darken-1">
          <a href="{{route('adm.loja')}}" class="brand-logo"><i class="material-icons">cloud</i>Tuzin Store</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="{{route('adm.vendedores.index')}}">Vendedores</a></li>
            <li><a href="{{route('adm.loja.add')}}">Cadastrar</a></li>
            <li><a href="{{route('site.login.sair')}}">Sair</a></li>
          </ul>
        </div>
      </nav>
       
    </div>
  </nav>
  </header>
  @yield('conteudo')