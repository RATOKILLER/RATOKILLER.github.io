<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

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
    
  if(isset($_POST["bt_retornar"])){
    header('Location: pagina_principal.php');
  }
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
    <title>Contato</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
        *{
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }
.erro{
    color: black;
}
body{
    background-image: url(https://redragon.es/content/uploads/2021/04/K1.jpg);
    background-position: top;
    background-size: 1800px;
    background-repeat: no-repeat;
}
.contato{
    text-align: center;
}
.contato h2{
    color: white;
}
form{
    background-color: #c70000;
    padding-top: 10px;
    padding-bottom: 10px;
    margin: 0 auto;
    width: 430px;
    border-radius: 5px;
    border-style: groove;
    border-color: black;
    text-align: center;
}
input{
      background-color: white;
      border-color: black;
      position: sticky;
      border-radius: 5px;
}
textarea{
    border-radius: 5px;
    border-style: groove;
    border-color: black;
}
select{
      border-color: black;
      border-radius: 5px;
}
.telefone{
  padding-right: 27px;
}
    </style>
</head>
<body>
    <div class="contato">
<h2>Contato</h2>

<form method="post" action="contato.php" name="frmcontato">  
  Nome:<input type="text" name="nome" value="<?php echo $name;?>">
  <span class="erro">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="erro">* <?php echo $emailErr;?></span>
  <br><br>
  <div class="telefone">Telefone:<input type="text" name="telefone"></div>
  <br><br>
 
  Gênero:<select id="genero" name="genero">
  <?php
    $genero=array("Masculino", "Feminino", "Outro");
    for( $i = 0 ; $i <= 2; $i++ ) {
      echo "<option value='$i'id='$i'>$genero[$i]</option>";
    }
    ?>
  </select>
  <br><br>
  Estado:<select id="estado" name="estado">
  <?php
    $estado=array("Acre", "Alagoas", "Amapá", "Amazonas", "Bahia", "Ceará", "Distrito Federal", "Espírito Santo", "Goiás", "Maranhão", "Mato Grosso", "Mato Grosso do Sul", "Minas Gerais", "Pará", "Paraíba", "Paraná", "Paraná", "Pernambuco", "Piauí", "Rio de Janeiro", "Rio Grande do Norte", "Rio Grande do Sul", "Rondônia", "Roraima", "Santa Catarina", "São Paulo", "Sergipe", "Tocantins");
    for( $i = 0 ; $i <= 27; $i++ ) {
      echo "<option value='$i'id='$i'>$estado[$i]</option>";
    }
    ?>
  </select>
<br><br>
  Cidade:<input type="text" name="cidade">
  <br><br>

  Comentario: <textarea name="comentario" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Enviar">
  <br>
  <input type="submit" name="bt_retornar" value="Retornar">
</form>

    </div>
</body>
</html>