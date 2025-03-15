<?php
define("USERNAME", "admin");
define("PASSWORD", "7896");
echo "Enter username:";
$inUsename = readline();
echo "Enter password:";
$inPassword = readline();

if($inUsename === USERNAME && $inPassword === PASSWORD){
    echo "Login Success";
}else{
    echo "Username or Password wrong";
}

?>