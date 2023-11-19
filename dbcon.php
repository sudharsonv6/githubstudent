<?php

$con = mysqli_connect("mysql.selfmade.ninja:3306", "loginphp", "9994599890su", "loginphp_stud");

if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}
