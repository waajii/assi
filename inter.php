<?php
$connection = mysqli_connect("localhost","root","","hello");
if(!$connection){
    echo "connect error";
}
else{
    echo "Connected";
}

?>