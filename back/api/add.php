<?php
/**
 * ADDS a hero by input.
 */
require 'connect.php';
    
$postdata = json_decode( file_get_contents( "php://input" ), true );


$sql = "INSERT INTO hero (`heroName`) VALUES ('".$postdata['name']."')";

print_r($postdata);

$result = mysqli_query($con,$sql)or die( mysqli_error($con) );
