<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sign_up_db';

    $con = mysqli_connect($servername,$username,$password,$dbname);

        if(!$con){
            die("Connection failed:" . mysqil_connect_error());
        }