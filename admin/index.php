<?php
    include '../include/headeradmin.php';
    include '../include/connection.php';

    //Utilizador Logado
    if(isset($_SESSION["user"])) {

        //Saber qual o user que está logado
        $idParcela = $_SESSION["user"];

        //Obter a info do condominio
        $sqlInfoCond = "SELECT * FROM condominios LEFT JOIN parcelas ON condominios.idCond=parcelas.idCond WHERE condominios.idCond = $idCond";
        //$sql = "SELECT morada, lote, codigoPostal, localidade, cidade, idPais, nifCond, nAndares, ibanCond, idEmpresa FROM condominios WHERE idCond = $idPacela";
        $result = mysqli_query($conn, $sqlInfoCond);
        $row = mysqli_fetch_array($result);
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
    ?>

        <body>
            <main>
                <div class="container">
                    <div class="info-panel">
                        <div class="panelheading"><h3>Informações do Condominio</h3></div>
                        <div class="panel-body">
                            <div class="panel-menu">

                                <div class="admin-menu-item admin-menu-item-active" id="op1">
                                    <span class="glyphicon glyphicon-home"></span> Dados do Condominio
                                </div>
                                <div class="admin-menu-item" id="op2">
                                    <span class="glyphicon glyphicon-user"></span> Dados do Administrador
                                </div>
                            </div>

                            <div class="panel-menu-info">
                                <div id="op1-data">
                                    <div class="panel-menu-info-titles">
                                        <span class="title">Morada</span><br><br>
                                        <span class="title">Lote</span><br><br>
                                        <span class="title">Codigo Postal</span><br><br>
                                        <span class="title">Localidade</span><br><br>
                                        <span class="title">Cidade</span><br><br>
                                        <span class="title">Pais</span><br><br>
                                        <span class="title">Nif</span><br>
                                    </div>
                                    <div class="panel-menu-info-data">
                                        <span class="data"><?php echo $morada; ?></span><br><br>
                                        <span class="data"><?php echo $lote; ?></span><br><br>
                                        <span class="data"><?php echo $codigoPostal; ?></span><br><br>
                                        <span class="data"><?php echo $localidade; ?></span><br><br>
                                        <span class="data"><?php echo $cidade; ?></span><br><br>
                                        <!-- TODO Ir buscar o país de acordo com o ID à tabela dos países -->
                                        <span class="data"><?php echo "ID País: ".$idPais." (Portugal)"; ?></span><br><br>
                                        <span class="data"><?php echo $nifCond; ?></span><br>
                                    </div>
                                </div>

                                <div id="op2-data">
                                    <div class="panel-menu-info-titles">
                                        <span class="title">Nome</span><br><br>
                                        <span class="title">Telemovel</span><br><br>
                                        <span class="title">Email</span><br><br>
                                        <span class="title">Lote</span><br>
                                    </div>
                                    <div class="panel-menu-info-data">
                                        <span class="data">Marco Sandro David Pedro</span><br><br>
                                        <span class="data">917758465</span><br><br>
                                        <span class="data">msdp@icond.pt</span><br><br>
                                        <span class="data">2F</span><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </body>
    </html>

<?php

  }else{
    // aqui podia-se enviar um parametro para pedir para fazer outra vez login
    header("Location: ../login.php");
  }

 ?>