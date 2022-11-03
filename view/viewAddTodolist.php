<?php 

require_once(realpath(dirname(__FILE__)) . "/../model/todolist.php");
require_once(realpath(dirname(__FILE__)) . "/../logic/addTodolist.php");
require_once(realpath(dirname(__FILE__)) . "/../helper/input.php");
require_once(realpath(dirname(__FILE__)) . "/viewShowTodolist.php");

function viewAddTodolist() {
  echo "Menambah Todolist" . PHP_EOL;
  $todo = input("Todo");

  echo "Konfirmasi (y/n)";
  $confirm = input("");

  if($confirm == "y" || $confirm == "Y") {
    addTodolist($todo);
    echo "Berhasil menambahkan todo" . PHP_EOL;
  } else if($confirm == "n" || $confirm == "N") {
    echo "Batal menambahkan todo" . PHP_EOL;
  } else {
    echo "Perintah tidak valid" . PHP_EOL;
    viewAddTodolist();
  }
}


?>