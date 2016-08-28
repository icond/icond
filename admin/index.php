<?php
  session_start();
  
  //User só para debug
  $_SESSION["user"] = "debug";

  if($_SESSION["user"] != "") {
    include '../include/headeradmin.php';
    include '../include/connection.php';
    ?>
        <body>
            <main>
                <div class="container">
                    <div class="panel panel-default">
                        <div class="panelheading"><h3>Bem vindo</h3></div>
                        <div class="panel-body">
                            <div id="row">
                                <div class="col-lg-8 col-md-6 col-sm-7">
                                    <div>
                                        <p><b>Dados Condominio</b></p>
                                        nif: 269009540<br>
                                        nome: condominio rua X<br>
                                        morada: rua x 1100 Lx<br><br>
                                    </div>
                                    <div>
                                        <p><b>Dados Administrador</b></p>
                                        nome: Almerindo<br>
                                        tel: 129999999<br>
                                        tel: 219999999<br>
                                        email: cenas@cenas.pt
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-5 col-sm-5">
                                    <p><b>Informações extra</b></p>
                                    Coisa partida<br>
                                    Festa no 3ºEsq<br>
                                    asdasdasdasdasd<br>
                                    asdasdasdadasd<br>
                                    asdasdasdasd<br>
                                    asdasdasdasdasds<br>
                                    asdasdasdasdas<br>
                                    asdasdasdasd<br>
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
    
