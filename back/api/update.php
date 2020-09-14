<?php
/**
 * Returns a hero by input.
 */
require 'connect.php';
$updatedata = json_decode( file_get_contents( "php://input" ), true );


$heros = [];
$sql = "UPDATE hero SET heroName = '".$updatedata['name']."' WHERE ID = ".$updatedata['id']; 
//$sql = "SELECT ID as id, heroName as name FROM hero WHERE ID=".$_GET['id'];

$result = mysqli_query($con,$sql)or die( mysqli_error($con) );