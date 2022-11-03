<?php 

require_once(realpath(dirname(__FILE__)) . "/../model/todolist.php");
require_once(realpath(dirname(__FILE__)) . "/../logic/showTodolist.php");
require_once(realpath(dirname(__FILE__)) . "/../helper/input.php");
require_once(realpath(dirname(__FILE__)) . "/viewAddTodolist.php");
require_once(realpath(dirname(__FILE__)) . "/viewRemoveTodolist.php");

function viewShowTodolist() {
  while(true){
    showTodolist();

    echo "MENU" . PHP_EOL;
    echo "1. Tambah Todolist" . PHP_EOL;
    echo "2. Hapus Todolist" . PHP_EOL;
    echo "x. Keluar" . PHP_EOL;

    $pilihan = input("Pilih");

    if($pilihan == "1") {
      viewAddTodolist();
    } else if($pilihan == "2") {
      viewRemoveTodolist();
    } else if($pilihan == "x" || $pilihan == "X") {
      break;
    } else {
      echo "Pilihan tidak dimengerti" . PHP_EOL; 
    }
  }

  echo "Sampai jumpa lagi" . PHP_EOL;
}

?>