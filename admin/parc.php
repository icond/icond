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
                        <div class="panelheading"><h3>Parcela (Orientaçao, via BD)</h3></div>
                        <div class="panel-body">
                            <div id="row">
                                <div class="col-lg-8 col-md-6 col-sm-7">
                                    <p><b>Dados Parcela</b></p>
                                    nif: (via BD)<br>
                                    Comissao Mensal : (via BD)<br><br>
                                </div>
                                <div class="col-lg-3 col-md-5 col-sm-5">
                                    <p><b>Informações de condominio</b></p>
                                    (Via BD)
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
    