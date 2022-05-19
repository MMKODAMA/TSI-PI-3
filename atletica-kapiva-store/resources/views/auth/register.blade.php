<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('/css/cadastro.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title></title>
</head>

<body>
    <main>
        <div class="container">
            <div class="texts">
                <h1 class="image animateanimated animatebackInLeft">Kapiva Store</h1>
                <h2>Insira suas credenciais de login para aprovietar todos os benéficios de nossa Loja</h2>


                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <fieldset>
                        <input type="text" name="name" id="name" placeholder="Digite seu nome" required>
                        <input type="text" name="surname" id="surname" placeholder="Digite sua sobrenome" required>
                    </fieldset>
                    <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                    <fieldset>
                        <input type="password" name="password" id="senha" placeholder="Digite sua senha" required>
                        <!--<input type="password" name="confPassword" id="confPassword" placeholder="Confirmar senha" required> -->
                    </fieldset>
                    <fieldset>
                        <input type="text" name="cpf" id="cpf" placeholder="Digite seu cpf" required>
                        <input type="text" name="telefone" id="telefone" placeholder="telefone" require>
                    </fieldset>
                    <button type="submit">Cadastrar</button>
                </form>
            </div>
            <div class="image animateanimated animatebackInRight">
                <img src="{{ asset('/img/logo.png') }}">
            </div>
        </div>
    </main>
</body>

</html>
