<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li> <a href="/"> Home </a> </li>
                <li> <a href="/contato"> Contato </a> </li>
            </ul>
        </nav>
    </header>

    @yield('content')


    <footer>
        <p> Todos os direitos reservados a SaulGoodman - 2022 </p>
    </footer>
</body>
</html>
