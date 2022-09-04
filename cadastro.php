<?php

$nameErr = $emailErr = $genderErr = $senhaErr = $frmErr = "";
$name = $email = $gender = $senha = $frmcadastro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nome"])) {
    $nameErr = "Nome obrigatório";
  } else {
    $name = test_input($_POST["nome"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Apenas letras e espaços em branco são permitidos";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email obrigatório";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato de email inválido";
    }
  }
    
  if (empty($_POST["senha"])) {
    $senhaErr = "Senha é obrigatória";
  } else {
    $senha = test_input($_POST["senha"]);
  }

  if (empty($_POST["genero"])) {
    $genderErr = "Genero é obrigatório";
  } else {
    $gender = test_input($_POST["genero"]);
  }
  if(empty($_POST["frmcadastro"])){
    $frmErr = "Cadastro inválido";
}else {
    $frmcadastro = test_input($_POST["frmcadastro"]);
}
}
if(isset($_POST["bt_cadastro"])){
    header('Location: login.php');
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
        *{
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }
        .contato{
            text-align: center;
        }
        h2{
        text-align: center;
        color: white;
    }
    form{
        background-color: #c70000;
    padding-top: 10px;
    padding-bottom: 10px;
    margin: 0 auto;
    width: 300px;
    border-radius: 5px;
    border-style: groove;
    border-color: black;
    text-align: center;
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
    </style>
</head>
<body>
<div class="contato">
<h2>Cadastro</h2>

<form method="post" action="cadastro.php" name="frmcadastro">  
  Nome:<input type="text" name="nome" value="<?php echo $name;?>" required>
  <span class="erro">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="email" name="email" value="<?php echo $email;?>" required>
  <span class="erro">* <?php echo $emailErr;?></span>
  <br><br>
  Senha:<input type="password" name="senha" value="<?php echo $senha;?>" required>
  <span class="erro">* <?php echo $senhaErr;?></span>
  <br><br>
  Gênero:<select id="genero" name="genero">
  <?php
    $genero=array("Masculino", "Feminino", "Trator", "Samambaia", "Honda_civiic");
    for( $i = 0 ; $i <= 4; $i++ ) {
      echo "<option value='$i'id='$i'>$genero[$i]</option>";
    }
    ?>
  </select>
  <input type="submit" name="bt_cadastro" value="Cadastrar">
  <br>
</form>

    </div>
</body>
</html>