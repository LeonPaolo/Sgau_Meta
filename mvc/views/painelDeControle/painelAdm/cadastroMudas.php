<div class="form">

     <form name="formularioCM" id="formCM" action="#" method="POST"  class="flex">

          <h1>Cadastro de Mudas</h1>

          <input type="text" name="Popular" class="largura" placeholder="Nome Popular">

          <input type="text" name="Cientifico" class="largura" placeholder="Nome Científico">

          <div class="">

               <label>Nativa:</label>

               <input type="radio" name="Op03" class="Op" value="Sim">Sim 
               
               <input type="radio" name="Op03" class="Op" value="Nao" >Não 
          
          </div>

          <div class="">

               <label>Frutífera:</label>

               <input type="radio" name="Op04" class="Op" value="Sim">Sim 
               
               <input type="radio" name="Op04" class="Op" value="Nao" >Não 
          
               <input type="radio" name="Op04" class="Op" value="Sim">Sim

               <input type="radio" name="Op04" class="Op" value="Nao" >Não

          </div>

          <input type="text" name="Quanti" class="largura" placeholder="Quantidade">

          <div class="botao">

               <input type="submit" name="Enviar" id="Enviar" class="btn bt01" value="Enviar">
               <input type="submit" name="Cancelar" id="Cancelar" class="btn" value="Cancelar">

          </div>
     </form>

</div>
<?php
if (isset($_POST['Enviar']) && $_POST['Enviar'] === 'Enviar') {
	$NomePopularMuda = $_POST['Popular'];
	$NomeCientificoMuda = $_POST['Cientifico'];
	$NativaMuda = $_POST['Op03'];
	$FrutiferaMuda = $_POST['Op04'];
	$QuantidadeMuda = $_POST['Quanti'];
	include_once "painelAdm.php";
	$CadastrouMuda = $IdColaboradorLogado;
	include_once "database/database.php";
	CadastrarMuda($NomePopularMuda, $NomeCientificoMuda, $NativaMuda, $FrutiferaMuda, $QuantidadeMuda, $CadastrouMuda);

}

?>