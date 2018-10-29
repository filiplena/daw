
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Mcel Arquivo</title>

        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">       
        <link href="{{ asset('recursos/css/meuEstilo.css')}}" rel="stylesheet">

           <!-- Bootstrap core JavaScript
        ================================================== -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>

    <body>
        <div id="overlay"><center><img src="{{ asset('recursos/icon/lg.rotating-balls-spinner.gif')}}" alt=""/></center></div>
        <!-- menu top da pagina -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Mcel</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Inicio</a></li>
                        <li><a href="#about">Processo</a></li>
                        <li><a href="#contact">Arquivo</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Rolex</a></li>
                        <li><a href="login.html"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Sair Sistema</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <!-- cabecalho -->
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{ asset('recursos/icon/logo.jpg')}}" class="img-responsive" width="57px" alt=""/>
                    </div>
                    <div class="col-md-8">
                        <h3>SGA <small>gestão documental</small></h3>
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown accoes">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Acções
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="{{ url('clientes/create') }}">Adicionar requisição</a></li>
                                <li><a href="#">Pesquiar Processo</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Ver Contractos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header> 

        <!-- corpo da app -->
        <section id='main'>
            <div class="container">
                <div class="row">
                    <!-- menu-lado-esquerdo -->
                    <div class="col-md-3">
                        <div class="list-group">
                            <a href="#" class="list-group-item active main-color-bg">
                                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> MENU
                            </a>
                            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Pagina Inicial </a>
                            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> Pesquisar Processo</a>
                            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Adicionar Processo</a>
                            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Clientes <span class="badge">21</span></a>
                            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Contratos <span class="badge">14</span></a>
                        </div>
                        <div class="well2"> 

                        </div>
                    </div>
                    <!-- corpo da pagina parte dinamica -->
                    
  <div class="col-md-9">
                     @yield('content')   

                    </div>
        

                </div>
            </div>
        </section>
        
          <!--loading page-->
    <script>
        var ol = document.getElementById("overlay");
        window.addEventListener("load", function () {
        ol.style.display = "none";
        });
    </script>
    </body>
</html>