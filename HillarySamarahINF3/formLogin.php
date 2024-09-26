<?php include("header.php") ?>

    <div class="container-fluid text-center">

        <h2>Acessar conta</h2>

        <div class="d-flex justify-content-center mb-3">
            <div class="row">
                <div class="col-12">
                    <form action="#login.php" method="POST" class="was-validated">
                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control" id="emailUsuario" placeholder="Informe o seu email" name="emailUsuario" required>
                            <label for="emailUsuario" class="form-label">Email:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="password" class="form-control" id="senhaUsuario" placeholder="Informe a senha" name="senhaUsuario" required>
                            <label for="senhaUsuario" class="form-label">Senha:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <button type="submit" class="btn btn-success">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <p>
            Ainda não possui cadastro?
            <a href="formUsuario.php" title="Cadastrar-se">
                Clique aqui!
            </a>
        </p>
    </div>

    <style>
    body {
        background-color: #e9ecef;
        font-family: 'Arial', sans-serif;
    }
    .alert {
        font-size: 1.2em;
        font-weight: bold;
    }
    .btn-success {
        background-color: #008080; /* Cor do botão */
        border: none;
    }
    .btn-success:hover {
        background-color: #006666; /* Cor ao passar o mouse */
        color: white;
    }
    .card {
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
</style>

<?php include("footer.php") ?>