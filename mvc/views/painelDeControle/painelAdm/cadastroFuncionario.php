<div class="form">

<form name="formularioCF" id="formCF" action="#" method="POST" class="flex" >

<h1>Cadastro de Funcionários</h1>

<div class="uniaoFlex">
     <input type="text" name="nomeColaborador" class="largura uniaoLargura" placeholder="Digite o nome">                                     
     <input type="text" name="sobrenomeColaborador"  class="largura"  placeholder="Digite o sobrenome">
</div>

<div class="">
     <label class="font">Cargo:</label>

     <input type="radio" name="tipo" class="tipo font" value="Secretario">Secretário 
          
     <input type="radio" name="tipo" class="tipo font" value="Assistente" >Assistente 
          
     <input type="radio" name="tipo" class="tipo font" value="Engenheiro">Engenheiro 
          
     <input type="radio" name="tipo" class="tipo font" value="Estagiario">Estagiário
</div>


<input type="email" name="emailColaborador"   class="largura" placeholder="Digite o e-mail">

<input type="password" name="senhaColaborador"  class="largura"  placeholder="Digite a senha">

<input type="password" name="Area"  class="largura"  placeholder="Repita a senha">


<div class="botao ">

     <input type="submit" name="Enviar" id="Enviar" class="btn bt01" value="Enviar">      

     <input type="reset" name="Cancelar" id="Cancelar" class="btn" value="Cancelar"
     >
</div>
     
</div>
<?php 
     if(isset($_POST['Enviar']) && $_POST['Enviar'] === 'Enviar'){
          $nomeColaborador = $_POST['nomeColaborador'];
          $sobrenomeColaborador = $_POST['sobrenomeColaborador'];
          $Cargo = $_POST['tipo'];
          $emailColaborador = $_POST['emailColaborador'];
          $senhaColaborador = md5($_POST['senhaColaborador']);
          include_once "database/database.php";
          CadastrarColaborador($nomeColaborador, $sobrenomeColaborador, $Cargo, $emailColaborador, $senhaColaborador);
     }
 ?>
