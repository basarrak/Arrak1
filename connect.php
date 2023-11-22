<?php

$con=new mysqli('localhost',
'crudoperation');

if($con) {
    echo "Connection successfull";
}else{
    die(mysqli_errno($con));


}






?>