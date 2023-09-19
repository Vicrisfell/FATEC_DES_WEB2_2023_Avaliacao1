<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start(); //Inicializar a Session  
        if($_POST['username'] == 'Portaria' and $_POST['password'] == 'FatecAraras'){ // Se o usuario e senha forem válidos...
            $_SESSION['loggedin'] = TRUE; // A Session loggedin é VERDADEIRA
            $_SESSION["username"] = 'Portaria';
            header("location: inicio.php"); // Redireciona para o Inico.PHP
        } else {
            $_SESSION['loggedin'] = FALSE; // se não seta no session loggedin como FALSO!!!
          
        }
    }
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Entra</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .title{text-align: center; margin-top:30px;}
        .wrapper{ width: 350px; padding: 20px; margin: auto; margin-top: 50px;}
    </style>
</head>
<body>
    <h1 class="title">Area de acesso de usario -Portaria FATEC</h1>
    <div class="wrapper">
        <h2>Bem vindo</h2>
        <p>Inserir login e senha</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="username" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>    
</body>
</html>