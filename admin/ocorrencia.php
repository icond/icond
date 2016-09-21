<?php
    include '../include/headeradmin.php';
    include '../include/connection.php';

    //Utilizador Logado
    if(isset($_SESSION["user"])=="") {
        header("Location: ../index.php");
    }

    $idParcela = $_SESSION["user"];
    $idCond = $_SESSION["idCond"];

    date_default_timezone_set('Europe/Lisbon');
    $date = date('Y/m/d H:i:s');

    if(isset($_POST['regOco'])){
        $textOcorrencia = $_POST['ocorrencia'];
        $sqlOcorrencia = "INSERT INTO ocorrencias (ocorrencia, idParcela, idCond, dataRegOcorrencia) VALUES ('$textOcorrencia', '$idParcela', '$idCond', '$date');";
        //echo $sqlOcorrencia;
        mysqli_query($conn, $sqlOcorrencia);

        echo "<script>
    $(document).ready(function() {
        $('#infoOco').removeClass( 'block');
        $('#infoOco').hide();
        $('#infoOco').slideDown(500).delay(1750).slideUp(500);
    });</script>";
    }
?>
</head>
<body>
    <div class="container">
        <form method="post">
            <div class="regOcorrencia">
            <div class="info alert alert-success block" id="infoOco">Registo de ocorrencia inserido com sucesso.</div>
                <div class="ocorrencia">
                    <label>Registo da Ocorrencia</label><br>
                    <textarea name ="ocorrencia" rows="10" maxlength="500" required placeholder="Descreva a ocorrencia com um maximo de 500 caracteres."></textarea><br><br>

                    <label>Nome do Utilizador para registo:</label> <?php echo $_SESSION['FLname']; ?><br><br>
                    <label>Data de Registo:</label> <?php echo $date ?> <br>(A ser atualizada no momento do registo.)<br><br>
                    <div class="botao">
                    <button type="submit" name="regOco" class="btlogin">Registar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>