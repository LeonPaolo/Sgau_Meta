<div class="form">

     <form name="formularioDI" id="formDI" action="#" method="POST" class="flex" >

          <h1>Cadastro de Requerimento</h1>

          <div class="largura">
               <label>Tipo do requerimento: </label>
               <select name="opcoes" id="select">
                    <?php 
                         include_once "database/database.php";
$tipo = TipoRequerimento();
echo "<option value='2'>" . $tipo['1']['1'] . "</option>";
echo "<option value='1'>" . $tipo['0']['1'] . "</option>";

                     ?>
               </select>

          </div>

          <input type="text" name="nomeArvore" class="largura" placeholder="Nome da árvore">

          <input type="text" name="logradouro" class="largura" placeholder="Logradouro">

          <input type="text" name="Nreferencia" class="largura" placeholder="Número">

          <input type="text" name="bairro" class="largura" placeholder="Bairro">

          <div class="uniaoFlex">

          <label class="center" >Observações sobre a solicitação: </label><textarea name="observacao"></textarea>

          </div>

          <div class="botao">

               <input type="submit" name="Enviar" id="Enviar" class="btn bt01" value="Enviar">                    
               <input type="submit" name="Cancelar" id="Cancelar" class="btn" value="Cancelar">
               
          </div> 
                                    

     </form>

</div>
<?php 
 if(isset($_POST['Enviar']) && $_POST['Enviar'] === 'Enviar'){
     include_once ( "painelUsuario.php" );
     $tipoRequerimento = $_POST['opcoes'];
     $nomeArvoreRequeriemnto = $_POST['nomeArvore'];
     $logradouroRequerimento = $_POST['logradouro'];
     $numeroRequerimento = $_POST['Nreferencia'];
     $bairroRequerimento = $_POST['bairro'];
     $observacaoRequerimento = $_POST['observacao'];
     $idCidadao =  $id_usuario;
     include_once "database/database.php";
     Requerimento($tipoRequerimento, $nomeArvoreRequeriemnto, $logradouroRequerimento, $numeroRequerimento, $bairroRequerimento, $observacaoRequerimento, $idCidadao);
     //header("location: ../../painelUsuario.php");

 }

 ?>