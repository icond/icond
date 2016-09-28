<?php 
    session_start();
    include '../include/connection.php';
    $id = $_GET['I'] ;
    $idCond = $_GET['C'];
    $n = 0;
    $queryApagar = "DELETE FROM parcelas wHERE idParcela = '$id'";
    mysqli_query($conn, $queryApagar);
    $queryParcelas = "SELECT idParcela, full_name, email, telemovel, codigo, idCond, isAdmin, nifParcela, andar, comissaoMensal, organizacao
                        FROM parcelas
                        WHERE idCond = $idCond";

    $resultParcelas = mysqli_query($conn, $queryParcelas);
    
    if(mysqli_num_rows($resultParcelas) > 0){
                echo "<div class='table-responsive'><table class='table table-striped table-hover'><thead><tr style='background-color: #0071BC; color: #fff'><td>Nome</td><td>Email</td><td>Telemovel</td><td>Codigo*</td><td>Id Condominio</td><td>NIF</td><td>Andar</td><td>Comissão Mensal</td><td style='width: 80px;'></td></tr></thead><tbody>";
                while($row = mysqli_fetch_assoc($resultParcelas)){
                        echo "<tr><td>" . $row["full_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["telemovel"] . "</td><td>" . $row["codigo"] . "</td><td>" . $row["idCond"] . "</td><td>" . $row["nifParcela"] . "</td><td>" . $row["andar"] . " " . $row["organizacao"] . "</td><td>" . $row["comissaoMensal"] . "</td><td><button onclick='trashMojiClick(this.id)' id='bt". $n ."' ><span class='glyphicon glyphicon-trash'></span></button><div id='showconfirm".$n."' style='display: none;'><button style='color: #FC0707; height:26px; width:30px;' onclick='NOmojoClick(this.id)' id='btDel".$n."' class='glyphicon glyphicon-remove'></button><button style='color: #00D400; height:26px; width:30px;' value='". $row["idParcela"] ."' onclick='apagar(this.value, ". $idCond .")' class='glyphicon glyphicon-ok'></button></td></tr>";
                    $n = $n + 1;
                }
                echo "</tbody></table></div><br>*Os codigos apresentados são dados pelo administrador ao utilizador para se registarem.";
            }else{
                echo "<b>Nao há parcelas registadas. Algo correu mal.</b><br><br>";
                //O formulario só vai aparecer quando nao existe nada
                //vermelho: fc0707
                //verde : 00d400
            };?>              