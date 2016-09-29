<?php
        include 'insiderheader.php';
    include '../../include/connection.php';
    //include '../include/datepicker/css/datepicker.css';
    //include '../include/datepicker/js/bootstrap-datepicker.js';
    //include '../include/datepicker/less/datepicker.less';

    //Utilizador Logado
    if(isset($_SESSION["user"])=="") {
        header("Location: ../index.php");
    }

    $idParcela = $_SESSION["user"];
    $idCond = $_SESSION["idCond"];

    if(isset($_POST['regVistoria'])){
        $textVistoria = $_POST['vistoria'];
        $data = $_POST['data'];
        $sqlVistoria = "INSERT INTO vistorias (ocorrencias, dataVistoria, idParcelaRegisto, idCond, estado) VALUES ('$textVistoria', '$data', '$idParcela', '$idCond', '0');";
        mysqli_query($conn, $sqlVistoria);


        echo "<script>
    $(document).ready(function() {
        $('#infoVistoria').removeClass( 'block');
        $('#infoVistoria').hide();
        $('#infoVistoria').slideDown(500).delay(1750).slideUp(500);
    });</script>";
    }
?>
</head>
<body>
    <div class="container">
        <form method="post">
            <div class="regVistoria">
            <div class="info alert alert-success block" id="infoVistoria">Registo de vistoria inserido com sucesso.</div>
                <div class="vistoria">
                    <label>Registo da Vistoria</label><br>
                    <textarea name ="vistoria" rows="10" maxlength="5000" required placeholder="Descreva a vistoria com um maximo de 5000 caracteres."></textarea><br><br>

                    <label>Nome do Administrador para registo:</label> <?php echo $_SESSION['FLname']; ?><br><br>
                    <label>Data da Vistoria:</label> <input type="date" required name="data"><br><br>
                    <div class="botao">
                    <button type="submit" onclick="myFunction()" name="regVistoria" class="btlogin">Registar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>