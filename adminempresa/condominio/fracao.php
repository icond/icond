<?php
  
  //User só para debug
  $_SESSION["user"] = "debug";

  if($_SESSION["user"] != "") {
    include '../include/headeradmin.php';
    include '../include/connection.php';
    $idCond = $_SESSION['idCond'];
    $idParcela = $_SESSION["user"];
  }else{
    header("Location: ../login.php");
  }
?>  
    <!--cenas feitas by David -->
    <script>
        function trashMojiClick(id)
        {
            $('#' + id).css('display', 'none');
            //duss, esta solução não é nada elegante
            var duss = id.replace('bt', '');

            $('#showconfirm' + duss).css('display', 'block');
        }
        function NOmojoClick(id)
        {
            //E mais uma vez..
            var duss = id.replace('btDel', '');
            $('#showconfirm' + duss).css('display', 'none');
            $('#bt' + duss).css('display', 'block');
        }
    </script>




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
    <!-- tratar de hide/show 
    <script type='text/javascript'>
         $( document ).ready(function() {
                                $('#bt0').click( function(){
                                    $('#bt0').css('display', 'none');
                                    $('#showconfirm0').css('display', 'block');
                                });
        });

    </script>-->
    <?php
        $n = 1;
        $queryParcelas = "SELECT idParcela, full_name, email, telemovel, codigo, idCond, nifParcela, andar, comissaoMensal, organizacao
                                FROM parcelas
                                WHERE idCond = $idCond";
            //echo $queryParcelas . "<br>";

            $resultParcelas = mysqli_query($conn, $queryParcelas);

            if(mysqli_num_rows($resultParcelas) > 0){
                while($row = mysqli_fetch_assoc($resultParcelas)){
                    echo"<script type='text/javascript'>
                            $( document ).ready(function() {
                                $('#bt".$n."'').click(function(){
                                    $('#bt".$n."').style('display','none');
                                    $('#showconfirm".$n."').style('display','block');
                                });
                            });
                        </script>";
                    $n++;
                }
            }
    ?>
    <body>
        <div id="container" class="container">
            
            <?php 
            $n = 0;
            $verAdmin = "SELECT isAdmin FROM parcelas WHERE idParcela = $idParcela";
            $resultVerAdmin = mysqli_query($conn, $verAdmin);
            $Admin = mysqli_fetch_array($resultVerAdmin);
            $isAdmin = $Admin['isAdmin'];
            $queryParcelas = "SELECT idParcela, full_name, email, telemovel, codigo, idCond, nifParcela, andar, comissaoMensal, organizacao
                                FROM parcelas
                                WHERE idCond = $idCond";
            //echo $queryParcelas . "<br>";

            $resultParcelas = mysqli_query($conn, $queryParcelas);

            if(mysqli_num_rows($resultParcelas) > 0){
                echo "<div class='table-responsive'><table class='table table-striped table-hover'><thead><tr style='background-color: #0071BC; color: #fff'><td>Nome</td><td>Email</td><td>Telemovel</td><td>Codigo*</td><td>Id Condominio</td><td>NIF</td><td>Andar</td><td>Comissão Mensal</td>";
                if($isAdmin == '1'){
                    echo "<td style='width: 80px;'></td>";
                }
                echo "</tr></thead><tbody>";
                while($row = mysqli_fetch_assoc($resultParcelas)){
                    if($isAdmin == '1'){
                        echo "<tr><td>" . $row["full_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["telemovel"] . "</td><td>" . $row["codigo"] . "</td><td>" . $row["idCond"] . "</td><td>" . $row["nifParcela"] . "</td><td>" . $row["andar"] . " " . $row["organizacao"] . "</td><td>" . $row["comissaoMensal"] . "</td><td><button onclick='trashMojiClick(this.id)' id='bt". $n ."' ><span class='glyphicon glyphicon-trash'></span></button><div id='showconfirm".$n."' style='display: none;'><button style='color: #FC0707; height:26px; width:30px;' onclick='NOmojoClick(this.id)' id='btDel".$n."' class='glyphicon glyphicon-remove'></button><button style='color: #00D400; height:26px; width:30px;' value='". $row["idParcela"] ."' onclick='apagar(this.value, ". $idCond .")' class='glyphicon glyphicon-ok'></button></td></tr>";
                    }else{
                        echo "<tr><td>" . $row["full_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["telemovel"] . "</td><td>" . $row["codigo"] . "</td><td>" . $row["idCond"] . "</td><td>" . $row["nifParcela"] . "</td><td>" . $row["andar"] . " " . $row["organizacao"] . "</td><td>" . $row["comissaoMensal"] . "</td></tr>";
                    }
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