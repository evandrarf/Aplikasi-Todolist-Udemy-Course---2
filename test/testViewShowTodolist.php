<?php 

require_once(realpath(dirname(__FILE__) . '/../view/viewShowTodolist.php'));
require_once(realpath(dirname(__FILE__) . '/../logic/addTodolist.php'));

addTodolist("Evandra");
addTodolist("Raditya");
addTodolist("Fauzan");
addTodolist("Sebelas");
addTodolist("Sija");
addTodolist("Satu");

viewShowTodolist();

?>