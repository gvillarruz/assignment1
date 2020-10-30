<?php
function get($name,$def='')
{
    return $_REQUEST[$name] ?? $def;
}

function check_access(){
    if(!isset($_SESSION['user_logged_in']) || !$_SESSION['user_logged_in'])
    header('Location:../errors/loginError.php?error=you must login first');
}

function alert($msg){
    echo "<script type'text/javascript'>alert('$msg');</script>";
}
  