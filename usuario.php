<!DOCTYPE html>
<html lang="pt-BR">
<head>
     <meta charset="UTF-8">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <link rel="stylesheet" href="app/lib/app/css/app.css">
     <link rel="stylesheet" href="app/lib/app/css/cadastrar.css">

     <title>Cadastro/Login</title>
</head>
<body>


<?php

if ( isset ( $_GET [ 'v' ] ) )
{
     $nomeView = base64_decode ( $_GET [ 'v' ]  ) . '.php' ;
     $caminho ='mvc/views/principal/';

     if ( file_exists ($caminho . $nomeView  ) )
     {
          
          include_once  'mvc/views/principal/' . $nomeView ;
          
     }
     else 
     {
          echo '<h1>404 - Página não encontrada!</h1>' ;
     }
}
else 
{
     include_once  'mvc/views/principal/login.php';
}

?>


</body>
</html>