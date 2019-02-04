<!DOCTYPE html lang="pt-br">
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="/css/app.css"/>
    <link rel="stylesheet"  href="/css/fontawesome-free-5.6.3-web/css/all.css"/>
    <link rel="stylesheet"  href="/css/style.css"/>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/Circle-icons-computer.svg/1000px-Circle-icons-computer.svg.png" type="image/x-icon"/>
    <script src="/js/app.js"></script>
</head>
<body>
<!--Menu-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Top Prime</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--Empresa-->
            <ul class="navbar-nav mr-auto"> 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Empresa
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ action ('EmpresaController@formularioEmpresa')}}">Adicionar</a>
                    <a class="dropdown-item" href="{{ action ('EmpresaController@listarEmpresa')}}">Listar</a>
         </a>       </li>
                <!--Membro-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Membro
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{action ('MembroController@formularioMembro')}}">Adicionar</a>
                    <a class="dropdown-item" href="{{action ('MembroController@listarMembro')}}">Listar</a>
                    </div>
                </li>
                <!--Cupom-->    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Promoção
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{action ('PromocaoController@formularioPromocao')}}">Adicionar</a>
                    <a class="dropdown-item" href="{{action ('PromocaoController@listarPromocao')}}">Listar</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div>
        @yield('empresa')
    </div>

    <div>
        @yield('membro')
    </div>

    <div>
        @yield('promocao')
    </div>
</body>
</html>