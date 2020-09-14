<?php
/**
 * Returns the list of heros not including me.
 */
require 'connect.php';
    
$heros = [];
$sql = "SELECT ID as id, heroName as name FROM hero";

if($result = mysqli_query($con,$sql))
{
  $cr = 0;
  while($row = mysqli_fetch_assoc($result))
  {
    $heros[$cr]['id']    = $row['id'];
    $heros[$cr]['name']    = $row['name'];
    $cr++;
  }
    
  echo json_encode ($heros);
}
else
{
  http_response_code(404);
}