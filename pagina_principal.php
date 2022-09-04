<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
        *{
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }
        
  body{
      background-image: url(https://static.wixstatic.com/media/71a6c2_fe91a0b1e9f749449fde890beed0025a~mv2.jpg/v1/fill/w_1184,h_1080,al_c,q_85,enc_auto/71a6c2_fe91a0b1e9f749449fde890beed0025a~mv2.jpg);
      
  }
 
#logo{
    width: 350px;
    height: 80px;
}
#divcab{
    text-align: center;
}
.dp_menu ul{
    list-style-type: none;
    background-color: black;
}
.dp_menu ul li{
    display: inline;
    position: relative;
}
.dp_menu ul li a{
    display: inline-block;
    color: white;
    text-decoration: none;
    padding: 10px;
    transition: background .3s;
}
.dp_menu ul li a:hover {
    color: red;
}
/*sub-menu*/
.dp_menu ul ul{
    display: none;
    left: 0;
    position: absolute;
}
.dp_menu ul li:hover ul{
    display: block;
}
.dp_menu ul ul{
    width: 150px;
}
.dp_menu ul ul li a{
    display: block;
}
#main{
    text-indent: 25px;
    text-align: center;
    padding-left: 20px;
    margin-left: 150px;
    margin-right: 250px;
}
#ofertas{
    text-align: center;
    color: white;
    height: 100px;
}
img{
  width: 180px;
  border: 0.5px solid black;
  position: sticky;
}
#main2{
    text-indent: 25px;
    text-align: center;
    padding-left: 20px;
    margin-left: 150px;
    margin-right: 250px;
}
@keyframes changeBackgroundColor {
  0% {
    color: red;
  }
  25%{
    color: red;
  }
  50% {
    color: green;
  }
  75%{
    color: green;
  }
  100% {
    color: blue;
  }
}
.container{
    animation: changeBackgroundColor 7s infinite;
    text-align: center;
    height: 100px;
}

    </style>
</head>
<body>
    
    <div id="divcab">
        <img id="logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMjstC27G3KFv2OWiBXu04C0se9-NQBxV477GLUEUSFwgHgcte" alt="redragon_logo">
    </div>

    <nav class="dp_menu">
    <ul>
    
        <li><a href="#">Periféricos</a>
            <ul>
                <li><a href="https://www.redragon.com.br/mouses">Mouses</a></li>
                <li><a href="https://www.redragon.com.br/mousepads">Mouse Pads</a></li>
                <li><a href="https://www.redragon.com.br/headsets">Headsets</a></li>
                <li><a href="https://www.redragon.com.br/teclados">Teclados</a></li>
                <li><a href="https://www.redragon.com.br/cadeiras">Cadeiras Gamer</a></li>
            </ul></li>
        <li><a href="#">Hardware</a>
            <ul>
                <li><a href="https://www.redragon.com.br/aircoolers">Cpu Coolers</a></li>
                <li><a href="https://www.redragon.com.br/fans">Fans</a></li>
                <li><a href="https://www.redragon.com.br/fontes">Fontes</a></li>
                <li><a href="https://www.redragon.com.br/watercoolers">Watercoolers</a></li>
            </ul></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="demes.html">Conteúdo Especial</a></li>
    </ul>
    </nav>

    <div class="container"><h1>Ofertas Especiais</h1></div>
    <div id="main">
    <a href="https://www.redragon.com.br/kingofwar">
        <img src="https://static.wixstatic.com/media/71a6c2_7dba5fd3bd6e46bfb7f047be10729636~mv2.png/v1/fill/w_315,h_388,al_c,q_85,enc_auto/King%20of%20War.png"></a>

        <a href="https://www.redragon.com.br/hero">
            <img src="https://static.wixstatic.com/media/71a6c2_658a1d2678ca48ed89cbb605f3ddcf75~mv2.png/v1/fill/w_315,h_388,al_c,q_85,enc_auto/Hero.png"></a>

            <a href="https://www.redragon.com.br/cobrav2">
                <img src="https://static.wixstatic.com/media/71a6c2_ad5a2c6923f5405da8f49813956a142b~mv2.png/v1/fill/w_315,h_388,al_c,q_85,enc_auto/Mouse.png"></a>

            <a href="https://www.redragon.com.br/shiva">
                <img src="https://static.wixstatic.com/media/71a6c2_d2bcbd7e162f4637bd1ea6081372cedd~mv2.png/v1/fill/w_315,h_388,al_c,q_85,enc_auto/plano%20de%20fundo.png"></a>
                </div>

                <div id="main2">
            <a href="https://www.redragon.com.br/crater">
                <img src="https://static.wixstatic.com/media/71a6c2_e6dab87f017c42e182f296b189a59654~mv2.png/v1/fill/w_315,h_388,al_c,q_85,enc_auto/mousepad.png"></a>

            <a href="https://www.redragon.com.br/f011">
                <img src="https://static.wixstatic.com/media/71a6c2_4d691063f2dc437696ae5c122c5fe1c7~mv2.png/v1/fill/w_315,h_388,al_c,q_85,enc_auto/011.png"></a>

            <a href="https://www.redragon.com.br/rgps700w">
                <img src="https://static.wixstatic.com/media/71a6c2_26cef78f8767442cbb955a3f7de8be6b~mv2.png/v1/fill/w_315,h_388,al_c,q_85,enc_auto/700.png"></a>

            <a href="https://www.redragon.com.br/odin">
                <img src="https://static.wixstatic.com/media/71a6c2_eed5a784c57649e0a5904e6a91bab14e~mv2.png/v1/fill/w_315,h_388,al_c,q_85,enc_auto/Odin.png"></a>
                </div>
    

</body>
</html>