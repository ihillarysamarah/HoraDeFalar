<?php include("header.php") ?>

    <div class="container-fluid text-center">

        <h2>Solicitar Intérprete para Horário de Atendimento</h2>

        <div class="d-flex justify-content-center mb-3">

            <div class="row">

                <div class="col-sm-12">

                    <form action="actionAgenda.php" class="was-validated" method="POST" enctype="multipart/form-data">

                        <div class="form-floating mb-3 mt-3">
                            <textarea class="form-control" id="nomeUsuario" placeholder="Informe seu nome" name="nomeUsuario" required></textarea>
                            <label for="nomeUsuario" class="form-label">Nome Completo:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <select class="form-select" id="materiaAgend" name="materiaAgend" required>
                                <option value="bancoDeDados">Banco de Dados</option>
                                <option value="biologia">Biologia</option>
                                <option value="espanhol">Espanhol</option>
                                <option value="filosofia">Filosofia</option>
                                <option value="geografia">Geografia</option>
                                <option value="gestaoDeWebSites">Gestão de Web Sites</option>
                                <option value="historia">História</option>
                                <option value="ingles">Inglês</option>
                                <option value="matematica">Matemática</option>
                                <option value="programacaoWeb">Programação WEB</option>
                                <option value="portugues">Português</option>
                                <option value="sociologia">Sociologia</option>
                            </select>
                            <label for="materiaAgend" class="form-label">Matéria:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="date" class="form-control" id="dataAgend" placeholder="Informe a data do atendimento" name="dataAgend" required>
                            <label for="dataAgend" class="form-label">Data:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="time" class="form-control" id="horarioAgend" placeholder="Informe o horário do atendimento" name="horarioAgend" required>
                            <label for="horarioAgend" class="form-label">Horário:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-success">Agendar</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>

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