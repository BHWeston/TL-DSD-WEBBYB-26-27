<?php

    // strpos()
    // strlen()
    // strtoupper()
    // chop()
    // explode()

    $myName = "Halloween Duck";
    echo(strpos($myName, "Duck"));
    echo(strlen($myName));
    echo(strtoupper($myName));
    echo(chop($myName, "Duck"));

    print_r(explode(" ", $myName));
?>