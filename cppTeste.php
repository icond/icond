<?php
    include 'security/functions.php';
    echo textCrypt("password") . "";
    echo "<br /><br />" . passwordHash(textCrypt("password"));

?>