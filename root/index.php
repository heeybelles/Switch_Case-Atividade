<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title> Card-teste</title>
   
    <link rel="stylesheet" href="style.css">
</head>
<body>   

<div class="wrapper">
    <div class="single-card">
        <div class="front"></div>


        <div class="back">
            <div class="content">
               <div class="form1">
               <form action="index.php" method="post">
               <h2>Exercício 1</h2>
               <center><br><br>
               <select name="codigo">
     <option value="100"> 100</option>
     <option value="101"> 101</option>
     <option value="102"> 102</option>
     <option value="103"> 103</option>
     <option value="104"> 104</option>
     <option value="105"> 105</option>
    
               </select></center><br>
               <input type="number" name="quantidade" placeholder="Digite o código:"><br><br>
               <input type="submit" class="btn2"  value="Enviar"></input></center>
               <div class="php">
               <?php


$codigo= $_POST['codigo'];
$quantidade= $_POST['quantidade'];
$vltotal=0;

switch ($codigo){
    case 100:
    $vlunitario = 1.70;
    $vltotal = $vlunitario * $quantidade;
    echo "<h5>Cachorro Quente</h5>";
    break;
     case 101:
    $vlunitario = 2.30;
    $vltotal = $vlunitario * $quantidade;
    echo "<h5>Bauru Simples</h5>";
    break; 
    case 102:
    $vlunitario = 2.60;
    $vltotal = $vlunitario * $quantidade;
    echo "<h5>Bauru com ovo</h5>";
    break;
     case 103:
    $vlunitario = 2.40;
    $vltotal = $vlunitario * $quantidade;
    echo "<h5>Hamburguer</h5>";
    break;
     case 104:
    $vlunitario = 2.50;
    $vltotal = $vlunitario * $quantidade;
    echo "<h5>Cheeseburguer</h5>";
    break;
     case 105:
    $vlunitario = 1.00;
    $vltotal = $vlunitario * $quantidade;
    echo "<h5>Refrigerante</h5>";
    break;

    default;
    $vlunitario = 0;
    break;
    }
    
    if ($vltotal > 0){
        echo "Valor total a pagar: R$ " .number_format($vltotal, 2, ',' ,',');
    }
   
?>
</form>
               </div>
               </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="single-card">
        <div class="front2"></div>


        <div class="back">
            <div class="content">
               <div class="form1">
    
               <form action="index.php" method="post">
                
               <img src="tbExer2.png"> 
               <div class="campo">
                <center>
               <input type="text" name="nome" placeholder="Digite o nome:"><br><br>
               <input type="number" name="idade" placeholder="Digite a idade:"><br><br>
                <input type="submit" class="btn2" value="Enviar"></input>
                </center>
               </div>
               <div class="php">
<?php
               $nome = $_POST['nome'];
               $idade = $_POST['idade'];
            
                echo "<h5><b>Nome:</b>$nome</h><br>";
                echo "<h5><b>Idade:</b>$idade</h5>";
                
                switch($idade){
                    case 5:
                         echo "<h5>Infantil!</h5>";
                         break;

                          case 6:
                         echo "<h5>Infantil</h5>";
                         break;
                          case 7:
                         echo "<h5>Infantil</h5>";
                         break;
                          case 8:
                         echo "<h5>Infantil</h5>";
                         break;
                          case 9:
                         echo "<h5>Infantil</h5>";
                         break;
                          case 10:
                         echo "<h5>Infantil</h5>";
                         break;

                          case 11:
                         echo "<h5>Juvenil</h5>";
                         break;
                          case 12:
                         echo "<h5>Juvenil</h5>";
                         break;
                          case 13:
                         echo "<h5>Juvenil</h5>";
                         break;
                          case 14:
                         echo "<h5>Juvenil</h5>";
                         break;
                          case 15:
                         echo "<h5>Juvenil</h5>";
                         break;

                          case 16:
                         echo "<h5>Junior</h5>";
                         break;
                          case 17:
                         echo "<h5>Junior</h5>";
                         break;
                          case 18:
                         echo "<h5>Junior</h5>";
                         break;
                          case 19:
                         echo "<h5>Junior</h5>";
                         break;
                          case 20:
                         echo "<h5>Junior</h5>";
                         break;

                          case 21:
                         echo "<h5>Profissional</h5>";
                         break;
                          case 22:
                         echo "<h5>Profissional</h5>";
                         break;
                         case 23:
                         echo "<h5>Profissional</h5>";
                         break;
                         case 24:
                         echo "<h5>Profissional</h5>";
                         break;
                         case 25:
                         echo "<h5>Profissional</h5>";
                         break;


                         
                         default;
                }
                if($idade>=26){
                    echo "Inválido!";
                }
               





               ?>
</div>

               </form>
            
               </div>
            </div>
        </div>
    </div>
</div>




<div class="wrapper">
    <div class="single-card">
        <div class="front3"></div>


        <div class="back">
            <div class="content">
               <div class="form1">
              
              
               <form action="index.php" method="post">
               <h2>Exercício 3</h2><br><br>
               <center>
               <p>Escolha um código:</p>
     <select name="codigo">
     <option value="1"> 1</option>
     <option value="2"> 2</option>
     <option value="3"> 3</option>
     <option value="4"> 4</option>
     <option value="5"> 5</option>
     <option value="6"> 6</option>
     <option value="7"> 7</option>
     <option value="8"> 8</option>
     <option value="9"> 9</option>
     <option value="10"> 10</option>
     <option value="11"> 11</option>
     <option value="12"> 12</option>
     <option value="13"> 13</option>
     <option value="14"> 14</option>
     <option value="15"> 15</option>
     </select><br><br></center>
     <center>
     <input type="number" name="codigo" placeholder="Digite o código:"><br><br>
               <a href="index.php"> <input type="submit" class="btn2"  value="Enviar"></input></a></center>
               </div>

               <div class="php">
                <?php


error_reporting(0);
$codigo = $_POST['codigo'];


switch ($codigo){
    case 1:
    echo "<h5>Alimento não-perecivel</h5>";
    break;
    case 2:
    echo "<h5>Alimento perecivel</h5>";
    break;
    case 4:
    echo "<h5>Alimento perecivel</h5>";
    break;
    case 5:
    echo "<h5>Vestuário</h5>";
    break;
    case 6:
    echo "<h5>Vestuário</h5>";
    break;
    case 8:
    echo "<h5>Limpeza e Utensilios Domesticos</h5>";
    break;
    case 9:
    echo "<h5>Limpeza e Utensilios Domesticos</h5>";
    break;
    case 10:
    echo "<h5>Limpeza e Utensilios Domesticos</h5>";
    break;
    case 11:
    echo "<h5>Limpeza e Utensilios Domesticos</h5>";
    break;
    case 12:
    echo "<h5>Limpeza e Utensilios Domesticos</h5>";
    break;
    case 13:
    echo "<h5>Limpeza e Utensilios Domesticos</h5>";
    break;
    case 14:
    echo "<h5>Limpeza e Utensilios Domesticos</h5>";
    break;
    case 15:
    echo "<h5>Limpeza e Utensilios Domesticos</h5>";
    break;

   default;
}
    if ($codigo>=16){
        echo "<br>Código invalido ";
    }
   
?>

               </div>
</form>
            </div>
        </div>
    </div>
</div>



</body>
</html>
