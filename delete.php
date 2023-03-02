<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];
        $sqlSelect = "SELECT *  FROM formulario_bd WHERE id=$id";
        $select = $conexao->prepare($sqlSelect);
        $select->execute();
        $result = $select->fetchAll();

        if(count($result) > 0)
        {
            $sqlDelete = "DELETE FROM formulario_bd WHERE id=$id";
            $delete = $conexao->prepare($sqlDelete);
            $delete->execute();

        }
    }
    header('Location: sistema.php');
   
?>