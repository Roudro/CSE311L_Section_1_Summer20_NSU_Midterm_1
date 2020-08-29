<?php


$link = mysqli_connect('localhost','root','');


$sql = "CREATE DATABASE Mid_Term_Su";


mysqli_query($link,$sql);

mysqli_close($link);


?>