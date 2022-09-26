<?php
$id =$_GET['id'];
$func = file("funcionarios/$id");
foreach($func as $b){
    echo "$b <br>";
}