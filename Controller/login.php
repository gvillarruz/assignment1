<?php
session_start();
include 'functions.php';
$user_info = explode(':',file('../Model/data/admin_info')[0]);


if($user_info[0] == get('username') && $user_info[1] == md5(get('password')))
{
  $_SESSION['user_logged_in']=true;
  header('Location:../View/admin/index.php');
}
else
{
  $_SESSION['user_logged_in']=false;
  header('Location:../View/errors/wrongLogin.php');
}



