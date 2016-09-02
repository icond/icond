<?php
  session_start();
  
  //User só para debug
  $_SESSION["user"] = "debug";
  $_SESSION["idCond"] = "5";
  $idCond = $_SESSION["idCond"];

  if($_SESSION["user"] != "") {
    include '../include/headeradmin.php';
    include '../include/connection.php';
    include '../code_generator.php';

    if(isset($_POST['submeter'])){
        @$andares = $_POST['andares'];
        @$parcelas = $_POST['parcelas'];
        @$orientacao = $_POST['orientacao'];

        for($x=1;$x<=$andares;$x++){
            for($y=1;$y<=$parcelas;$y++){

                if($orientacao==0){
                    if($y==1)
                        $z="Esquerdo";
                    if($y==2)
                        $z="Direito";
                    if($y==3)
                        $z="Frente";
                }else{
                    if($y==1)
                        $z="A";
                    if($y==2)
                        $z="B";
                    if($y==3)
                        $z="C";
                    if($y==4)
                        $z="D";
                    if($y==5)
                        $z="E";
                    if($y==6)
                        $z="F";
                }

                $codigo = generateRandomString(5);
                echo $codigo;

                $query = "INSERT INTO parcelas(codigo, andar, organizacao, idCond) 
                  VALUES('$codigo', '$x', '$z', '$idCond')"; //TEM DE SE FAZER QUERY COM O SESSION USER PARA IR BUSCAR O ID COND
                  mysqli_query($conn, $query);


            echo $x . $z . " ";

            }
            echo "<br>";
        }
    }

?>
    <body>
        <div class="container">
            

            <?php 

            $queryParcelas = "SELECT email, password, codigo, idCond, nifParcela, andar, comissaoMensal, organizacao
                                FROM parcelas
                                WHERE idCond = $idCond";
            //echo $queryParcelas . "<br>";

            $resultParcelas = mysqli_query($conn, $queryParcelas);

            if(mysqli_num_rows($resultParcelas) > 0){
                echo "<table border='1'><tr><td>Email</td><td>Password</td><td>Codigo</td><td>Id Condominio</td><td>NIF</td><td>Andar</td><td>Comissão Mensal</td><td>Apagar</td></tr>";
                while($row = mysqli_fetch_assoc($resultParcelas)){
                    echo "<tr><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td><td>" . $row["codigo"] . "</td><td>" . $row["idCond"] . "</td><td>" . $row["nifParcela"] . "</td><td>" . $row["andar"] . " " . $row["organizacao"] . "</td><td>" . $row["comissaoMensal"] . "</td><td>X</td></tr>";
                }
                echo "</table>";
            }else{
                echo "<b>Nao há parcelas registadas.</b><br><br>";
                //O formulario só vai aparecer quando nao existe nada
            ?>

                <form method="post">
                    Nº de Andares <input type="text" name="andares"> <br>
                    Nº de Parcelas por Andar <input type="text" name="parcelas"> <br>
                    Orientação das parcelas 
                    <select name="orientacao">
                        <option value="0">Direções</option>
                        <option value="1">Letras</option>
                    </select>

                    <input type="submit" name="submeter">
                </form>

            <?php
            }

            ?>              

        </div>
    </body>
</html>
<?php

  }else{
    header("Location: ../login.php");
  }


 ?>
    
