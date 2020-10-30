<?php
session_start();
include 'functions.php';
$user_info = explode(':',file('../Model/data/admin_info')[0]);

file_put_contents($user_info[1],md5(get('newPassword')));

?>