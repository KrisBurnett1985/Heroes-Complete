<?php
/**
 * Search function .
 */
require 'connect.php';
    
$heros = [];
$sql = "SELECT ID as id, heroName as name FROM hero WHERE heroName LIKE '%".$_GET['term']."%'";

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