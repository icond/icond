<?php
    include '../include/headeradmin.php';
    include '../include/connection.php';

    //Utilizador Logado
    if(isset($_SESSION["user"])=="") {
        header("Location: ../index.php");
    }

 ?>
 </head>
 <body>
     <div class="container">
         asdad
     </div>
 </body>