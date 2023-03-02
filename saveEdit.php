<?php
    
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $sqlInsert = "UPDATE formulario_bd
        SET name='$nome',email='$email',senha='$senha';
        WHERE id=$id";
        $edit = $conexao->prepare($sqlInsert);
        $edit->execute();

    
    }
    header("Location: edit.php?id=$id");

?>