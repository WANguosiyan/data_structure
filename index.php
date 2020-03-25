<?php
    var_dump(memory_get_usage());
    $a = 1000;
    var_dump(memory_get_usage());
    $b = $a;
    var_dump(memory_get_usage());
   // echo phpinfo();
?>