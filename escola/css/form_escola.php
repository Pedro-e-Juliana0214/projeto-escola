<?php

    include_once 'conectar.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Escolar de Turma</title>
</head>
<body>
    <form action="inserir.php" method="post" name="form-cad">        
    
    <div class="inp-form">
        <label for="nome">Matrícula</label>
        <input type="text" name="matricula" id="matricula">
    </div>
    <div class="inp-form">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
    </div>
    <div class="inp-form">
        <label for="nome">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div class="inp-form">
        <label for="nome">Celular</label>
        <input type="phone" name="celular" id="celular">
    </div>
    <input type="submit" name="btn" id="btn">
</form>
    
    
    
</body>
</html>