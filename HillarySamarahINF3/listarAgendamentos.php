<?php
    echo "<h1 class='text-center'>Lista de Agendamentos do Sistema</h1>";
    $listarAgendamentos = "SELECT * FROM Agendamentos"; //Cria a query para buscar Agendamentos

    include "conexaoBD.php"; //Inclui o arquivo de conexão com o BD
    $res = mysqli_query($conn, $listarAgendamentos) or die("Erro ao tentar listar Agendamentos!") . mysqli_error($conn);

    $totalAgendamentos = mysqli_num_rows($res); //Busca o total de registros retornados pela query

    if($totalAgendamentos > 0){

        if($totalAgendamentos == 1){
            echo "<div class='alert alert-info text-center'>Há $totalAgendamentos agendamento cadastrado!</div>";
        }
        else{
            echo "<div class='alert alert-info text-center'>Há $totalAgendamentos agendamentos cadastrados!</div>";
        }


        echo "
            <form name='formFiltro' action='index.php' method='GET' class='mb-4'>
                <div class='input-group justify-content-center' style='width: 50%; margin: auto;'>
                    <select class='form-select' name='filtroAgendamento' required>
                        <option value='todos'>Visualizar todos os Agendamentos</option>
                        <option value='disponivel'>Horários de Atendimento</option>
                    </select>
                    <button type='submit' class='btn btn-success'>Filtrar Agendamentos</button>
                </div>
            </form>
        ";

        //Monta a tabela para exibir os registros
        echo "
        <!-- Cartões de atendimento -->
            <div class='row mt-4'>";

                while($registro = mysqli_fetch_assoc($res)){
                    //Armazena em variáveis PHP os registros encontrados na tabela
                    $idAgendamento           = $registro["idAgendamento"];
                    $idUsuario               = $registro["Usuarios_idUsuario"];
                    $materiaAgend            = ucfirst($registro["materiaAgend"]);
                    $dataAgend               = $registro["dataAgend"];
                    $horarioAgend            = $registro["horarioAgend"];

                    //Exibe os registros encontrados
                    echo "
                        <div class='col-lg-3 col-md-6 mb-4'>
                            <div class='card rounded-3 shadow-sm'>
                                <div class='card-body text-center'>
                                    <h5 class='card-title'>$materiaAgend</h5>
                                    <p class='card-text'>$dataAgend às $horarioAgend</p>
                                    <a href='#' class='btn btn-success'>AGENDAR</a>
                                </div>
                            </div>
                        </div>
                    ";
                }
        echo "</div>";
    }
    else{
        echo "<div class='alert alert-info text-center'>Não há agendamentos cadastrados!</div>";
    }


?>

<?php include "footer.php" ?>