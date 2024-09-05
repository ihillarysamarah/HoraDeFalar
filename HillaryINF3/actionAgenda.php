<?php include("header.php"); ?>

<?php

    //Bloco para declaração das variáveis
    $nomeUsuario = $materiaAgend = $dataAgend = $horarioAgend = $condicaoAgend = "";
    $dataAgend = date('Y-m-d'); //Utiliza a função date para pegar a data no formato AAAA/MM/DD
    $dataAgend = date('H:i:s'); //Utiliza a função date para pegar as horas no formato HH:MM:SS
    $erroPreenchimento = false; //Variável para controle de erros durante o preenchimento do formulário

    //Verifica o método de envio do FORM
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //Utiliza a função empty para verificar se o campo nomeUsuario(form) está vazio
        if(empty($_POST["nomeUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>NOME</strong> é obrigatório!</div>";
            $erroPreenchimento = true; //Em caso de erro, a variável passa a ser verdadeira
        } else{
            $nomeUsuario = filtrar_entrada($_POST["nomeUsuario"]); //Caso não hajam erros, a variável PHP recebe o valor que foi preenchido no formulário
        }

        //Validação do campo materiaAgend
        if(empty($_POST["materiaAgend"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>MATÉRIA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else{
            $materiaAgend = filtrar_entrada($_POST["materiaAgend"]);
        }

        //Validação do campo dataAgend
        if(empty($_POST["dataAgend"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>DATA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else{
            $dataAgend = filtrar_entrada($_POST["dataAgend"]);
        }

        //Validação do campo horarioAgend
        if(empty($_POST["horarioAgend"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>HORÁRIO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else{
            $horarioAgend = filtrar_entrada($_POST["horarioAgend"]);
        }

        //Validação do campo condicaoAgend
        if(empty($_POST["condicaoAgend"])){
            $condicaoAgend = "Antigo";
        } else{
            $condicaoAgend = "Novo";
        }

        //Se NÃO houver erro de preenchimento (caso a variável de controle esteja com o valor 'false')
        if(!$erroPreenchimento && !$erroUpload){

            //Cria a Query para realizar a inserção das informações na tabela Agendamentos
            $inserirAgendamento = "INSERT INTO Agendamentos (nomeUsuario, materiaAgend, dataAgend, valorProduto, condicaoProduto, dataCadastroProduto, horaCadastroProduto, statusProduto)
                            VALUES ('$nomeUsuario', '$materiaAgend', '$dataAgend', $valorProduto, '$condicaoProduto', '$dataCadastroProduto', '$horaCadastroProduto', 'disponivel')"; 

            //Inclui o arquivo para conexão com o Banco de Dados
            include("conexaoBD.php");

            //Utiliza a função mysqli_query para executar a QUERY no Banco de Dados
            if(mysqli_query($conn, $inserirAgendamento)){

                echo "
                    <div class='alert alert-success text-center'>Produto cadastrado com sucesso!</div>
                        <div class='table-responsive'>
                            <table class='table'>
                                <tr>
                                    <th>NOME</th>
                                    <td>$nomeUsuario</td>
                                </tr>
                                <tr>
                                    <th>MATÉRIA</th>
                                    <td>$materiaAgend</td>
                                </tr>
                                <tr>
                                    <th>DATA</th>
                                    <td>$dataAgend</td>
                                </tr>
                                <tr>
                                    <th>HORÁRIO</th>
                                    <td>$horarioAgend</td>
                                </tr>
                                <tr>
                                    <th>NOVO AGENDAMENTO</th>
                                    <td>$condicaoAgend</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                ";
            }
            else{
                echo "<div class='alert alert-danger text-center'>Erro ao tentar cadastrar produto!</div>" . mysqli_error($conn);
                echo "<p>$inserirAgendamento</p>";
            }
        }

    }

    //Função para filtrar as entradas de dados do formulário para evitar SQL Injection
    function filtrar_entrada($dado){
        $dado = trim($dado); //Remove espaços desnecessários
        $dado = stripslashes($dado); //Remove as barras invertidas
        $dado = htmlspecialchars($dado); //Converte caracteres especiais em entidades HTML

        return($dado); //Retorna o dado já filtrado
    }

?>

<?php include("footer.php");?>