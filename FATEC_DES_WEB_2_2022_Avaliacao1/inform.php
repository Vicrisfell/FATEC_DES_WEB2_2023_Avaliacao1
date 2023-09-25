<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ 
        header("location: index.php");
        exit;
    }
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center;}
        .text-black{ color: black !important; font-weight: bold; margin-bottom: 15px;}
        .btn-right{ float: right !important; margin-right: 10px; margin-top: 12px;}
        .wrapper{ width: 650px; padding: 20px;  margin: auto; margin-top: 20px;}

        .alunos {display: block; width: 100%; overflow-x: auto;}
        .data-table {width: 100%; }
        table thead th {padding: 1rem 2rem; text-align: left;}
        table tbody td {padding: 1rem 2rem;}
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <h3 class=" text-black">
            </div>
            <div class="btn-right ">
                <a href="logout.php" class="btn btn-danger">Sair</a>
                <a href="inicio.php" class="btn btn-primary">voltar</a>
            </div>
           
        </div>
    </nav>
    <h2>Cadastrados de Usuario do estacionamento</h2>
    <div class="wrapper">
        <section class="aluno">
            <table class="data-table">
                <thead>
                    <tr>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Ra</th>
                        <th class="text-center">Placa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(file_exists("inform.txt")){ 
                            $file = file("inform.txt"); 
                            foreach($file as $line){ 
                                $line = trim($line);
                                $livro = explode("|",$line);
                                echo "<tr><td> $livro[0]</td><td>$livro[1]</td><td>$livro[2]</td></tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
   
</body>
</html>
