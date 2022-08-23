<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="">
</head>
<body>

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">Nozama</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/contato">Contato</a></li>
                    <li><a href="/categoria">Categoria</a></li>
                    <li><a href="/cliente">Cliente</a></li>
                    <li><a href="/pedido">Pedido</a></li>
                    <li><a href="/produto">Produto</a></li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')


    <footer>
        <p> Todos os direitos reservados a <mark> Saul goodman <mark> </p>
        <p> 2022 </p>
    </footer>
</body>
</html>
