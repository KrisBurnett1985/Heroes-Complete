<?php
/**
 * Returns a hero by input.
 */
require 'connect.php';


$heros = [];
$sql = "SELECT ID as id, heroName as name FROM hero WHERE ID=".$_GET['id'];

if($result = mysqli_query($con,$sql))
{
  while($row = mysqli_fetch_assoc($result))

  {
    $heros['id']    = $row['id'];
    $heros['name']    = $row['name'];

  }
    
  echo json_encode ($heros);
}
else
{
  http_response_code(404);
}