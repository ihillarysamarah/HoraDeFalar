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
                                <option value="matemática">Matemática</option>
                                <option value="português">Português</option>
                                <option value="biologia">Biologia</option>
                                <option value="espanhol">Espanhol</option>
                                <option value="ingles">Inglês</option>
                                <option value="filosofia">Filosofia</option>
                                <option value="sociologia">Sociologia</option>
                                <option value="história">História</option>
                                <option value="geografia">Geografia</option>
                                <option value="programação WEB">Programação WEB</option>
                                <option value="banco de dados">Banco de Dados</option>
                                <option value="gestao de web sites">Gestão de Web Sites</option>
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

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="condicaoAgend" name="condicaoAgend" value="novo" checked>
                            <label class="form-check-label" for="condicaoAgend">Novo agendamento</label>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary">Agendar</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
       
    </div>

<?php include("footer.php") ?>