<?php
// pega dados do formulário ($tarefa)
$tarefa = filter_input(INPUT_POST, 'tarefa', FILTER_SANITIZE_SPECIAL_CHARS);

// escreve dados $tarefa no final do arquivo tarefas.txt (FILE_APPEND)
if ($tarefa) {
   file_exists("tarefas.txt") ? $text =  "\n".$tarefa : $text = $tarefa;
   file_put_contents('tarefas.txt', $text, FILE_APPEND);      
}

header('Location: index.php');
?>