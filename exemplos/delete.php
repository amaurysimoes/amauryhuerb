<?php
// exclui arquivo tarefas.txt
if (file_exists("tarefas.txt")) {
    unlink('tarefas.txt');
}    

header('Location: index.php');
?>