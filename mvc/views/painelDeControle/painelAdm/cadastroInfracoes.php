<div class="form">

     <form name="formularioDI" id="formDI" action="#" method="POST" class="flex" >

          <h1>Cadastro de Infrações</h1>

          <input type="text" name="NomeCompleto" class="largura" placeholder="Nome Completo">

          <input type="text" name="Cpf" class="largura" placeholder="CPF/CNPJ">

          <input type="email" name="email" class="largura" placeholder="E-mail">

          <input type="tel" name="Telefone" class="largura" placeholder="Telefone">

          <input type="text" name="logradouro" class="largura" placeholder="Logradouro">

          <input type="text" name="Numero" class="largura" placeholder="Número">

          <input type="text" name="bairro" class="largura" placeholder="Bairro">
          <div class="uniaoFlex">
               
          <label>Infração cometida</label>
          <textarea name="infracao"></textarea>
          </div>
          
          
          <div class="uniaoFlex">
               <label>Data da infração: </label>
               <input type="date" name="DtInfracao" class="largura ultimaLargura" placeholder="Data da Infração">   
          </div>
          <div class="botao">

               <input type="submit" name="Enviar" id="Enviar" class="btn bt01" value="Enviar">                    
               <input type="reset" name="Cancelar" id="Cancelar" class="btn" value="Cancelar">
               
          </div>                           

     </form>

</div>
<?php 
 if(isset($_POST['Enviar']) && $_POST['Enviar'] === 'Enviar'){
     $nomeInfracao = $_POST['NomeCompleto'];
     $CpfCnpj = $_POST['Cpf'];
     $emailInfracao = $_POST['email'];
     $FoneInfra = $_POST['Telefone'];
     $LograInfracao = $_POST['logradouro'];
     $NumInfracao = $_POST['Numero'];
     $BairroInfracao = $_POST['bairro'];
     $infracao = $_POST['infracao'];
     $DataInfracao = $_POST['DtInfracao'];
     include_once ( "painelAdm.php" );
     $IdClbrador = $IdColaboradorLogado;
     include_once ( "database/database.php");
     CadastraInfracao($nomeInfracao, $CpfCnpj, $emailInfracao, $FoneInfra, $LograInfracao, $NumInfracao, $BairroInfracao, $infracao, $DataInfracao, $IdClbrador);
 }
 ?>