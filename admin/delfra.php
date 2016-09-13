<?php 
    include '../include/connection.php';
    $id = $_GET['I'] ;
    $idCond = $_GET['C'];
    $n = 0;
    $queryApagar = "DELETE FROM parcelas wHERE idParcela = '$id'";
    mysqli_query($conn, $queryApagar);
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
            //O formulario só vai aparecer quando nao existe nada
}?>              