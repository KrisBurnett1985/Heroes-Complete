<?php
/**
 * ADDS a hero by input.
 */
require 'connect.php';
    

$sql = "DELETE FROM hero WHERE ID=".$_GET['id'];

print_r($postdata);

$result = mysqli_query($con,$sql)or die( mysqli_error($con) );