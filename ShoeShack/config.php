<?php

$conn=mysqli_connect('localhost' ,'root','','shoeshack');

if(!$conn){
    die ('No connection to the database'.mysqli_connect_error());
}