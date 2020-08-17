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
    <div class="nav-wrapper blue lighten-1">
        <nav>
        <div class="nav-wrapper teal darken-2">
          <a href="{{route('site.home')}}" class="brand-logo"><i class="material-icons">cloud</i>Tuzin Store</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="{{route('site.login')}}">Login</a></li>
            <li><a href="{{route('adm.loja.filtrar')}}">Categorias</a></li>

            <!--
             <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Drop Me!</a>
              <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#!">Casacos</a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="#!">Camisas</a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="#!">Sandálias</a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="#!">Sandálias</a></li>
              </ul>
              -->
            <li><a href="{route('adm.loja.contato')}}">Contato</a></li>
          </ul>
        </div>
      </nav>
       
    </div>
  </nav>
  </header>
  @yield('conteudo')

<!--
  <footer class="page-footer docs-footer">
    <div class="container">
        <div class="row" style="margin-bottom: 0;">
          <div class="col s6 m10 offset-m1">
            <div class="row">
              <div class="col l4 s12">
                <h5>Help Materialize Grow</h5>
                <p class="grey-text text-darken-2">We hope you have enjoyed using Materialize and if you feel like it has helped you out and want to support the team you can help us by donating or backing us on Patreon. Any amount would help support and continue development on this project and is greatly appreciated.</p>
                <a class="btn waves-effect waves-light red lighten-2" href="/support-us.html">Support Us</a>

              </div>
            </div>
          </div>
        </div>
      </div>
  </footer>
-->