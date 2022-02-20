<div class="headline">
    <img src="{{ asset('img/logo.svg') }}" alt="Logo">
</div>

<form action="{{ route('admin.login') }}" class="form" method="POST">

    <!--<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Autenticação Invalida!</strong><br> Verifique seu Usuario ou Senha.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>-->

    <div class="signin">

        @csrf

        <div class="form-group">
            <input type="text" value="{{ old('login') }}" name="login" id="login" placeholder="Usuario" required>
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