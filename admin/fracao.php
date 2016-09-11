<?php
  
  //User só para debug
  $_SESSION["user"] = "debug";

  if($_SESSION["user"] != "") {
    include '../include/headeradmin.php';
    include '../include/connection.php';
    $idCond = $_SESSION['idCond'];
  }else{
    header("Location: ../login.php");
  }
?>
    <body>
        <div class="container">
            
            <?php 

            $queryParcelas = "SELECT full_name, email, codigo, idCond, nifParcela, andar, comissaoMensal, organizacao
                                FROM parcelas
                                WHERE idCond = $idCond";
            //echo $queryParcelas . "<br>";

            $resultParcelas = mysqli_query($conn, $queryParcelas);

            if(mysqli_num_rows($resultParcelas) > 0){
                echo "<div class='table-responsive'><table class='table table-striped table-hover'><thead><tr><td>Nome</td><td>Email</td><td>Codigo*</td><td>Id Condominio</td><td>NIF</td><td>Andar</td><td>Comissão Mensal</td><td>Apagar</td></tr></thead><tbody>";
                while($row = mysqli_fetch_assoc($resultParcelas)){
                    echo "<tr><td>" . $row["full_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["codigo"] . "</td><td>" . $row["idCond"] . "</td><td>" . $row["nifParcela"] . "</td><td>" . $row["andar"] . " " . $row["organizacao"] . "</td><td>" . $row["comissaoMensal"] . "</td><td>X</td></tr>";
                }
                echo "</tbody></table></div><br>*Os codigos apresentados são dados pelo administrador ao utilizador para se registarem.";
            }else{
                echo "<b>Nao há parcelas registadas. Algo correu mal.</b><br><br>";
                //O formulario só vai aparecer quando nao existe nada
            }?>              

        </div>
    </body>
</html>