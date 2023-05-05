<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('title') </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    
        @vite([
            'resources/css/app.css',
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'                
        ])
    
    <style>

        body{
            background-color: whitesmoke;
        }

        .container{
            margin-top: 4%!important;
        }

    </style>
    </head>
    <body>

        <!-- navbar -->
        <div class="container" id="navbar_">  
            <div class="row">      
                <nav class="navbar navbar-dark navbar-expand-lg bg-primary">         
                    <div class="container-fluid">
                        <a class="navbar-brand text-white">&nbsp;&nbsp;SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse navbar-dark" id="navbarText">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/')}}">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/consulta">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>      
            <!-- navbar  -->
            
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5>Cadastrar - Agendamento de Potenciais Clientes</h5>
                        <p>Sistema utilizado para agendamento de serviços.</p>
                            
                        <div class="container">
                            @yield('content')
                        </div>

                    </div>
                </div>
            </div>
        </div>       
    </body>
</html>