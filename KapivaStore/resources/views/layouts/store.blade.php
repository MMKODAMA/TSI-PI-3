<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Kapiva Store</title>
</head>

<body>
    <header>
        <nav class="nav navbar-expand-sm d-flex navbar " id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/imagens/logo.svg" style="height:120px;margin-top: 50px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form action="{{ route('serach.product') }}" class="form-group my-0 mx-auto w-50">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Digite o nome do produto" name="s">
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text">Buscar</button>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav ms-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Registrar</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarUser" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarUser">
                                    <a href="/cart" class="dropdown-item">Carrinho</a>
                                    @if(Auth::user()->role == 'admin')
                                    <a href="/product" class="dropdown-item">Produtos</a>
                                    <a href="/tag" class="dropdown-item">Tags</a>
                                    <a href="/category" class="dropdown-item">Categorias</a>
                                    @endif
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="m-5 container" >
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session()->get('error') }}</div>
        @endif
        @yield('content')
    </main>
    <footer>
        <div class="row">
            <div class="col-sm-3 mt-0">
                <img src="/imagens/logo-footer.svg" style="width: 150px; height:125%;">

            </div>
            <div class="col-sm-4 mt-2  ">
                <address>Av. Eng. Eusébio Stevaux, 823 Santo Amaro, São Paulo - SP
                    <br>
                    Telefone: (11) 5682-7300 <br>
                    CEP:04696-000
                </address>
            </div>
            <div class="col-sm-5 mt-2">
                Redes Sociais <br>
                <a href="https://www.instagram.com/atleticakapiva/?hl=pt"><img src="/imagens/insta_logo.svg" style="width:50px;height:50px"></a>
                <a href="https://web.facebook.com/atleticakapiva"><img src="/imagens/face_logo.svg" style="width:50px;height:50px;margin-left:10px"></a>

            </div>
        </div>
    </footer>
</body>

</html>
