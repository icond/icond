<?php
    include '../include/headeradmin.php';
    include '../include/connection.php';

    //Utilizador Logado
    if(isset($_SESSION["user"])=="") {
        header("Location: ../index.php");
    }

    date_default_timezone_set('Europe/Lisbon');
    $date = date('Y/m/d H:i:s');
    echo $date;

 ?>
 </head>
 <body>
     <div class="container">
     </div>
 </body>