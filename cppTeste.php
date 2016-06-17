<?php
    include dirname(__FILE__) . '/security/functions.php';
    echo textCrypt("password") . "";
    echo "<br /><br />" . passwordHash(textCrypt("password"));

?>