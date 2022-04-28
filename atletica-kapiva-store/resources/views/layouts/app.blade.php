<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>E-commerce</title>
</head>

<body>
    <header>
        <nav class="nav navbar-expand-sm d-flex navbar " id="navbar" style="background-color:#FF8000; height:75px">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--
                <div class="container-fluid">

            -->
                <a href=""><img id="logo" src="/img/logo.png"></a>
                <ul class="navbar-nav ms-auto mb-2 d-flex justify-content-center list-group list-group-horizontal ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Meu perfil
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('product.index') }}">Produto</a>
                            <a class="dropdown-item" href="{{ route('product.trash') }}">Lixeira Produto</a>
                            <a class="dropdown-item" href="{{ route('category.index') }}">Categorias</a>
                            <a class="dropdown-item" href="{{ route('category.trash') }}">Lixeira Categorias</a>
                            <a class="dropdown-item" href="{{ route('tag.index') }}">Tags</a>
                            <a class="dropdown-item" href="{{ route('tag.trash') }}">Lixeira Tags</a>

                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <!--
                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="{{ route('product.index') }}">
                                Produto
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('product.trash') }}">
                                Lixeira Produto
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('category.index') }}">
                                Categorias
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('category.trash') }}">
                                Lixeira Categorias
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('tag.index') }}">
                                Tags
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('tag.trash') }}">
                                Lixeira Tags
                            </a>
                        </li>
                        <li class="ml-auto p-2">

                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                -->

                    <li class="nav-item">
                        <a class="nav-link text-decoration-none " href="{{ route('tag.trash') }}">
                            Carrinho
                        </a>
                    </li>


                </ul>
                <!-- add
                        </div>
                    </div>
                -->

            </div>
        </nav>

    </header>
    <main>
        <div>
            {{ session()->get('success') }}
        </div>
        <section>
            @yield('content')
        </section>
    </main>
</body>

</html>
