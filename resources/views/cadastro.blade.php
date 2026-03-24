<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/cadastro_user_style.css') }}">
    <title>Cadastro ou Login</title>
</head>

<body>
    @include('header')
    <div class="main-content">
        <div class="container" id="container">
            <div class="form-container sign-up">
                <form>
                    <h1>Entre na sua conta</h1>
                    <input type="text" placeholder="Nome de Usuário">
                    <input type="password" placeholder="Senha">
                    <button>Entre</button>
                </form>
            </div>
            <div class="form-container sign-in">
                <form>
                    <h1>Cadastra-se</h1>
                    <input type="email" placeholder="Email">
                    <input type="text" placeholder="Nome de Usuário">
                    <input type="password" placeholder="Senha">
                    <button>Cadastrar</button>
                </form>
            </div>
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1>Bem vindo de volta!</h1>
                        <p>Coloque seus dados para poder utilizar a plataforma</p>
                        <button class="" id="login">Entrar</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1>Olá!</h1>
                        <p>Cadastra-se para usufruir da plataforma</p>
                        <button class="" id="register">Cadastrar-se</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('script/cadastro_user_script.js') }}"></script>
</body>

</html>
