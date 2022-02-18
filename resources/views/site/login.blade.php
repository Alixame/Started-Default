<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Administrativo</title>
    <link rel="stylesheet" href="{{ asset('css/style-login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <div class="headline">
            <img src="{{ asset('img/logo.svg') }}" alt="Logo">
        </div>

        <form action="#" class="form" method="POST">

            <!--<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <strong>Autenticação Invalida!</strong><br> Verifique seu Usuario ou Senha.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>-->

            <div class="signin">

                <div class="form-group">
                    <input type="text" name="login" id="login" placeholder="Usuario" required>
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Senha" required>
                </div>

                <div class="forget-password">
                    <div class="check-box">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label for="checkbox">Lembrar-me</label>
                    </div>
                    <a href="#">Esqueceu sua senha?</a>
                </div>

                <button type="submit" class="btn">Entrar</button>

            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>