<?php 

require_once(realpath(dirname(__FILE__) . '/../logic/removeTodolist.php'));
require_once(realpath(dirname(__FILE__) . '/../model/todolist.php'));
require_once(realpath(dirname(__FILE__) . '/../logic/addTodolist.php'));
require_once(realpath(dirname(__FILE__) . '/../logic/showTodolist.php'));

addTodolist("Evan");
addTodolist("Rendi");
addTodolist("Rehan");

showTodolist();

removeTodolist(2);

showTodolist();


?>