<?php
    include '../include/headeradmin.php';
    include '../include/connection.php';

    //Utilizador Logado
    if(isset($_SESSION["user"])=="") {
        header("Location: ../index.php");
    }

    date_default_timezone_set('Europe/Lisbon');
    $date = date('Y/m/d H:i:s');
?>
</head>
<body>
    <div class="container">
        <form method="post">
            <div class="regOcorrencia">
                <div class="ocorrencia">
                    <label>Registo da Ocorrencia</label><br>
                    <textarea rows="10" placeholder="Descreva a ocorrencia com um maximo de 500 caracteres. PROXIMO PASSO É INSERIR NA BD, É O TODO"></textarea><br><br>

                    <label>Nome do Utilizador para registo:</label> Marco<br><br>
                    <label>Data de Registo:</label> <?php echo $date ?> <br>(A ser atualizada no momento do registo.)<br><br>
                    <div class="botao">
                    <button type="submit" name="regOco" class="btlogin">Registar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>