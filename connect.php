<?php
$con = new mysqli("localhost:3307","root","","crudoperation");
if (!$con) {
    die(mysqli_error($con));
    # code...
}