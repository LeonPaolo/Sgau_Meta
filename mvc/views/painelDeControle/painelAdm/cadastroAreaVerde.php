<div class="form">

     <form name="formularioCAV" id="formCAV" action="#" method="POST" class="flex" >

          <h1>Cadastro de Áreas Verdes</h1>

          <div class="">
                tipo de area verde: <select name="tipo" id="select" class="largura" >

                 <?php
include_once "database/database.php";
$la = tipoArea();
foreach ($la as list($a, $b)) {
	echo "<option name='local' value='$a' > $b</option>";
}
?>
                 </select>
          </div>

          <input type="text" name="logradouro" class="largura" placeholder="Logradouro">
          <input type="text" name="NumeroCasa"  class="largura"  placeholder="Nº de Referência">

          <input type="text" name="Bairro"   class="largura" placeholder="Bairro">

          <input type="text" name="Area"  class="largura"  placeholder="Áreas em Metros">

          <div class="botao ">
               <input type="submit" name="Enviar" id="Enviar" class="btn bt01" value="Enviar">
               <input type="submit" name="Cancelar" id="Cancelar" class="btn" value="Cancelar">
          </div>

     </form>

</div>
<?php
if (isset($_POST['Enviar']) && $_POST['Enviar'] === 'Enviar') {
	$tipoArea = $_POST['tipo'];
	$logradouroAreaVerde = $_POST['logradouro'];
	$NumeroAreaVerde = $_POST['NumeroCasa'];
	$BairroVerde = $_POST['Bairro'];
	$MetrosAreaVerde = $_POST['Area'];
	include_once "painelAdm.php";
	$IdColaborador = $IdColaboradorLogado;
	include_once "database/database.php";
	AreaVerde($tipoArea, $logradouroAreaVerde, $NumeroAreaVerde, $BairroVerde, $MetrosAreaVerde, $IdColaborador);

}

?>
