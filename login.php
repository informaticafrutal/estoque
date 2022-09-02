<?php
    require_once "config.php";
    global $db;
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    $sql = "SELECT * FROM usuarios WHERE usuario = $usuario AND senha = $senha";
    $sql = $db->prepare($sql);
    /*$sql->bindValue(":usuario", $usuario);
    $sql->bindValue(":senha", $senha);*/
    $sql->execute();
    var_dump($sql);exit;
    if ($sql->rowCount() > 0){
        echo "Acertou a senha";
    }else{
        echo "Usuario ou senha incorretos";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <div class="container">
            <form method="POST">
                <input type="text" name="usuario" />
                <input type="password" name="senha" />
                <button>Logar</button>
            </form>
        </div>
    </form>
</body>
</html>