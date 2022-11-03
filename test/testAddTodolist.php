<?php 

require_once(realpath(dirname(__FILE__) . '/../logic/addTodolist.php'));
require_once(realpath(dirname(__FILE__) . '/../model/todolist.php'));

addTodolist("Evan");
addTodolist("Nando");
addTodolist("Radoit");

var_dump($todolist)
?>