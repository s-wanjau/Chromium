<?php

$conn = mysqli_connect("localhost","root","","schoolwebsite");

if ($conn == true){
    echo "SERVER CONNECTED SUCCESSFULLY";
}else{
    echo "error connecting to the server".mysqli_connect_error($conn);
}