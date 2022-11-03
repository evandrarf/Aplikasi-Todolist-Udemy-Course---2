<?php 

require_once(realpath(dirname(__FILE__)) . "/../model/todolist.php");
require_once(realpath(dirname(__FILE__)) . "/../logic/removeTodolist.php");
require_once(realpath(dirname(__FILE__)) . "/../helper/input.php");
require_once(realpath(dirname(__FILE__)) . "/viewShowTodolist.php");

function viewRemoveTodolist() {
  echo "Menghapus Todolist" . PHP_EOL;
  $pilihan = (int) input("Todo nomor");

  echo "Konfirmasi (y/n)";
  $confirm = input("");

  if($confirm == "y" || $confirm == "Y") {
    $success = removeTodolist($pilihan);
    if($success) {
      echo "Berhasil menghapus todo nomor $pilihan" . PHP_EOL;
    } else {
      echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
    }
  } else if($confirm == "n" || $confirm == "N") {
    echo "Batal menghapus todo nomor $pilihan" . PHP_EOL;
  } else {
    echo "Perintah tidak valid" . PHP_EOL;
    viewRemoveTodolist();
  }
}


?>