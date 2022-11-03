<?php 
 
 //menampilkan todolist
function showTodolist() {
  global $todolist;

  echo "TODOLIST" . PHP_EOL;

  foreach($todolist as $number => $value) {
    echo "$number. $value" . PHP_EOL;
  }
}







?>