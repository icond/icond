<?php
    include '/security/functions.php';
    echo textCrypt("Hello world", 3, 5);
    echo "<br>" . passwordHash(textCrypt("Hello world", 3, 5), 5);



?>