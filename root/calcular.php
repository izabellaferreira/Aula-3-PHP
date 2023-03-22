<style type="text/css">
    body {
        
        color: white;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        align-items: center;
        background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(189,88,204,1) 0%, rgba(180,46,237,1) 52%, rgba(251,49,219,1) 100%, rgba(0,212,255,1) 100%);
    }
    
    </style>
    <h1 align="center"> Resultado </h1>
    <center>
<?php

$nome = $_POST['nome'];
$numero1 = $_POST ['numero1'];
$numero2 = $_POST ['numero2'];

$soma = $numero1 + $numero2;
$multiplicacao = $numero1  * $numero2;
$divisao= $numero1  / $numero2;

 echo "✅ O nome é: $nome <br>";
 echo "✅ O primeiro numero: $numero1 <br>";
 echo "✅ O segundo numero é: $numero2 <br>";
 echo "✅ O resultado é : $soma <br>";
 echo" ✅O resultado é :  $divisao <br>";
 echo" ✅O resultado é :  $multiplicacao <br>";

?>
    </center>