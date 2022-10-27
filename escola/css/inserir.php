<?php

    // criação de db
    include_once 'conectar.php';

    // criação de variáveis 
    $matricula = isset($_POST['matricula']) == true ?$_POST['matricula']:"";
    $nome = isset($_POST['nome']) == true ?$_POST['nome']:"";
    $email = isset($_POST['email']) == true ?$_POST['email']:"";
    $celular = isset($_POST['celular']) == true ?$_POST['celular']:"";

    // inserir dados do formulario para o banco de dados
    $sql = "INSERT INTO turma2a (matrícula, nome, email, celular) VALUE ('$matricula', '$nome', '$email', '$celular')";

    if ($conn->query($sql) == TRUE) {

        header('Location: form_escola.php');

    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
        $conn->close();