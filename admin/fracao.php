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

    <script type="text/javascript">
        function apagar(val, cond){
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("container").innerHTML = this.responseText;
                }
              };
              xmlhttp.open("GET", "delfra.php?I=" + val + "&C=" + cond , true);
              xmlhttp.send(); 
        }
    </script>
    
    <body>
        <div id="container" class="container">
            
            <?php 
            $n = 0;
            $queryParcelas = "SELECT idParcela, full_name, email, telemovel, codigo, idCond, nifParcela, andar, comissaoMensal, organizacao
                                FROM parcelas
                                WHERE idCond = $idCond";
            //echo $queryParcelas . "<br>";

            $resultParcelas = mysqli_query($conn, $queryParcelas);

            if(mysqli_num_rows($resultParcelas) > 0){
                echo "<div class='table-responsive'><table class='table table-striped table-hover'><thead><tr><td>Nome</td><td>Email</td><td>Telemovel</td><td>Codigo*</td><td>Id Condominio</td><td>NIF</td><td>Andar</td><td>Comissão Mensal</td><td></td></tr></thead><tbody>";
                while($row = mysqli_fetch_assoc($resultParcelas)){
                    echo "<tr><td>" . $row["full_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["telemovel"] . "</td><td>" . $row["codigo"] . "</td><td>" . $row["idCond"] . "</td><td>" . $row["nifParcela"] . "</td><td>" . $row["andar"] . " " . $row["organizacao"] . "</td><td>" . $row["comissaoMensal"] . "</td><td><div id='bt".$n."'><button  value='". $row["idParcela"] ."' ><span class='glyphicon glyphicon-trash'></span></button></div><div id='showconfirm".$n."' style='display: none;'><button style='color: #FC0707' id='btDel".$n."' class='glyphicon glyphicon-remove'></button><button style='color: #00D400;' value='". $row["idParcela"] ."' onclick='apagar(this.value, ". $idCond .")' class='glyphicon glyphicon-ok'></button></td></tr>";
                    echo "<script type='text/javascript'>
                            $( document ).ready(function() {
                                $('#bt".$n."').click( function(){
                                    $('#bt".$n."').css('display', 'none');
                                    $('#showconfirm".$n."').css('display', 'block');
                                });
                            });
                        </script>";
                    echo "<script type='text/javascript'>
                        $( document ).ready(function() {
                            $('#btDel".$n."').click( function(){
                                $('#showconfirm".$n."').css('display', 'none');
                                $('#bt".$n."').css('display', 'block');
                            });
                        });
                    </script>";
                    $n = $n + 1;
                }
                echo "</tbody></table></div><br>*Os codigos apresentados são dados pelo administrador ao utilizador para se registarem.";
            }else{
                echo "<b>Nao há parcelas registadas. Algo correu mal.</b><br><br>";
                //O formulario só vai aparecer quando nao existe nada
                //vermelho: fc0707
                //verde : 00d400
            }?>              

        </div>
        
    </body>
</html>