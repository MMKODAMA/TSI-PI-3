<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/login.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title></title>
</head>

<body>
    <main>
        <div class="container">
            <div class="texts">
                <h1 class="image animateanimated animatebackInLeft">Kapiva Store</h1>
                <h2>Insira suas credenciais de login para aprovietar todos os benéficios de nossa Loja</h2>

                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                    <input type="password" name="password" id="password" placeholder="Digite sua senha" required>

                    <button type="submit">Entrar</button>
                </form>

                <p>Esqueceu sua senha? <a href="#">Recupere aqui!</a></p>
                <p>Não tem uma conta? <a href="#">Registre-se!</a></p>
            </div>
            <div class="image animateanimated animatebackInRight">
                <img src="/img/logo.png">
            </div>
        </div>
    </main>
</body>

</html>
