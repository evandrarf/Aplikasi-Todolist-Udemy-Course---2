<?php 
function input(string $info) : string {
  echo "$info : "; 
  $result = readline();
  strval($result);
  return $result;
}



?>