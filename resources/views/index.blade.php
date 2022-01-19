<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .container{
            display: flex;
        }
        .container a div{
            width: 200px;
            height: 190px;
            background-color: #aaa;
            margin: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            border-radius: 10px;
        }
        .container a div img{
            width: 150px;
        }
        .container a{
            text-decoration: none;
            color: #333;
        }
      
    </style>
</head>
<body>
    <h1>Escolha uma classe:</h1>
        <div class="container">
            <a href="/classes/Guerreiro">
               <div>
                  <img src="https://images.vexels.com/media/users/3/234375/isolated/preview/8f52cae05221eb0bbd97e04afa19764e-ilustracao-de-espada-de-ouro.png" alt="espada"> 
                  Guerreiro
                </div> 
            </a>
            <a href="/classes/Arqueiro">
               <div>
               <img src="https://pt.runescape.wiki/images/Arco_magicida_detalhe.png?2d5b9" alt="arco">    
                Arqueiro
                </div> 
            </a>
            <a href="/classes/Mago">
               <div>
                   <img src="https://mlohrktvfr9b.i.optimole.com/scftOdE.BaVg~16a4d/w:auto/h:auto/q:90/https://www.nerdstickers.com.br/wp-content/uploads/2020/11/adesivo-00-DeC-Mage-Clau-Akemi.png" alt="mage">
                   Mago
                </div> 
            </a>
        </div>
</body>
</html>