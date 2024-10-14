<?php
    $tmp = basename($_SERVER['SCRIPT_NAME']);
    $tmp = ucfirst($tmp);
    $pageName = str_replace(".php", "", $tmp);

    if($pageName == "Index") {
        $pageName = "Home";
    }
?> 