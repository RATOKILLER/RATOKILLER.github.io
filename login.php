<?php

$email_bd = "demesdestroyer@gmail.com";
$senha_bd = "demesgay";

if(isset($_POST['bt_login'])){
  $email = $_POST['email'];
  $senha = $_POST['senha'];

    if($email == $email_bd && $senha == $senha_bd){
      header('Location: pagina_principal.php');
    }else{
      echo "<div class=\"login\"><p>E-mail ou senha incorretos</p></div>";
    }
}
if(isset($_POST["bt_cadastrar"])){
  header('Location: cadastro.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cadastro.php" type="text/css" />
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
        *{
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }
    h2{
        text-align: center;
        color: white;
    }
    form{
        background-color: #c70000;
        text-align: center;
        margin: 0 auto;
        width: 300px;
        border-style: groove;
        border-color: black;
        border-radius: 5px;
        display: block;
        padding-top: 10px;
        padding-bottom: 10px;
  }
  
  input{
      background-color: white;
      border-radius: 5px;
      border-style: groove;
      border-color: black;
      position: sticky;
  }
  body{
      background-image: url(http://solidpower.cloudstorage.pw/Assets/Wallpapers/Red/Wallpaper%20Redragon%20-%20BL%20Grey.png);
      background-position: top;
  }
  div{
    text-align: center;
    color: white;
  }
  
 
</style>
<body>

    <h2>Login</h2>

  <form action="login.php" method="POST">
    <br>

    <label for="email">E-mail: </label>
    <input type="text" name="email"><br><br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha"><br><br>

      <input type="submit" value="Login" name="bt_login"><br>
    
    <input type="submit" value="Cadastrar-se" name="bt_cadastrar">
  </form>
</body>
</html>