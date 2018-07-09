<?php
/**
 * Created by PhpStorm.
 * User: redArcherr
 * Date: 2018/7/9
 * Time: 10:17
 */
$username="root";
$password="roll";
if(!isset($_SERVER['PHP_AUTH_USER'])||!isset($_SERVER['PHP_AUTH_PW'])||
    $_SERVER['PHP_AUTH_USER']!=$username||$_SERVER['PHP_AUTH_PW']!=$password){
    header("HTTP/1.1 401 Unauthorized");
    header('WWW-Authenticate:Basic realm="localhost"');
    exit('<h1>Sorry</h1>');
}else{
    echo '<h1>welcome to your world</h1>';
}