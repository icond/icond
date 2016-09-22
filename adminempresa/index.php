<?php
    include '../include/headerempresa.php';
    include '../include/connection.php';

    //Utilizador Logado
    if(isset($_SESSION["user"])) {

        //Saber qual o user que está logado
        $idEmpresa = $_SESSION["user"];

        //Obter a info do condominio
        /*$sqlInfoCond = "SELECT * FROM condominios LEFT JOIN parcelas ON condominios.idCond=parcelas.idCond WHERE condominios.idCond = $idCond";
        $sqlInfoAdmin = "SELECT * FROM condominios LEFT JOIN parcelas ON condominios.idCond=parcelas.idCond WHERE condominios.idCond = $idCond AND isAdmin = 1";
        //$sql = "SELECT morada, lote, codigoPostal, localidade, cidade, idPais, nifCond, nAndares, ibanCond, idEmpresa FROM condominios WHERE idCond = $idPacela";
        $result = mysqli_query($conn, $sqlInfoCond);
        $row = mysqli_fetch_array($result);
        $_SESSION["idCond"] = $row['idCond'];
        $morada = $row['morada'];
        $lote = $row['lote'];
        $codigoPostal = $row['codigoPostal'];
        $localidade = $row['localidade'];
        $cidade = $row['cidade'];
        $idPais = $row['idPais'];
        $nifCond = $row['nifCond'];
        $nAndares = $row['nAndares'];
        $ibanCond = $row['ibanCond'];
        $idEmpresa = $row['idEmpresa'];

        $result2 = mysqli_query($conn, $sqlInfoAdmin);
        $row2 = mysqli_fetch_array($result2);
        $nome = $row2['full_name'];
        $telemovel = $row2['telemovel'];
        $email = $row2['email'];
        $loteAdmin = $row2['andar']."º ".$row2['organizacao'];*/

        //Obter todos os condomínios sob gestão desta empresa
        $sqlObterCondsDaEmp = "SELECT * FROM condominios LEFT JOIN empresas ON condominios.idEmpresa=empresas.idEmpresa WHERE condominios.idEmpresa = $idEmpresa";
        $result = mysqli_query($conn, $sqlObterCondsDaEmp);
        $row = mysqli_fetch_array($result);
    ?>

        <body>
            <main>
                <div class="container">
                    <div class="info-panel-empresa">
                        <div class="panelheading">
                            <h3>Listagem de prédios</h3>
                        </div>
                        <div class="panel-body">
                            <div class='table-responsive'>
                                <table class='table table-striped table-hover'><thead><tr style='background-color: #0071BC; color: #fff'><td>Nº</td><td style="width:80%;">Morada</td><td>Editar</td><td>Apagar</td>
                                </tr></thead>
                                <tbody>
                                <tr>
                                <td>1</td>
                                <td>Praceta do kappa mix mon mux mix n5 420 blaze it</td>
                                <td> X </td>
                                <td> X </td>
                                </table>
                    </div>
                </div>
                <div style="width:20%;float:right">
                    <form action="novopredio.php">
                        <button class="btNice" style="width: 90%;">Novo Prédio</button>
                    </form>
                </div>
            </main>
        </body>
    </html>

<?php

  }else{
    // aqui podia-se enviar um parametro para pedir para fazer outra vez login
    header("Location: ../loginempresa.php");
  }

 ?>