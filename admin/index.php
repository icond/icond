<?php

  if($_SESSION["user"] != "") {
    include '../include/headeradmin.php';
    include '../include/connection.php';
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
                                        <span class="data">Avenida Alberto Caeiro Nº33</span><br><br>
                                        <span class="data">2F</span><br><br>
                                        <span class="data">2562-225</span><br><br>
                                        <span class="data">Palmela</span><br><br>
                                        <span class="data">Setubal</span><br><br>
                                        <span class="data">Portugal</span><br><br>
                                        <span class="data">269009540</span><br>
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
    header("Location: ../login.php");
  }


 ?>
    
