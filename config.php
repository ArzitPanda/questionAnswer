<?php 
session_start();
define('USER', 'root');
define('PASSWORD', 'Panda@2001');
define('HOST', 'localhost');
define('DATABASE', 'question_answer');


$data =mysqli_connect(HOST, USER, PASSWORD, DATABASE,3306) ;


if ($data->connect_error) {
    die("Connection failed: " . $data->connect_error);
}





?>