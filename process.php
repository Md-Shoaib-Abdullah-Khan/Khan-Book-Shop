<?php

$json_file_info = file_get_contents('info.json');
$users = json_decode($json_file_info,true);

$user = $_REQUEST['fname'];
$password = $_REQUEST['lpass'];
print_r($users);

if(array_key_exists($user, $users) && $users[$user] == $password){
    echo "Welcome $user";

}else echo "Ivalid username or password";
?>