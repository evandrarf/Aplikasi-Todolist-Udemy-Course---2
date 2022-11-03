<?php 

//menghapus todolist
function removeTodolist(int $number): bool {
  global $todolist;

  if(sizeof($todolist) < $number) {
    return false;
  }

  for($i = $number; $i < sizeof($todolist); $i++) {
    $todolist[$i] = $todolist[$i + 1];
  }

  unset($todolist[sizeof($todolist)]);

  return true;
}



?>