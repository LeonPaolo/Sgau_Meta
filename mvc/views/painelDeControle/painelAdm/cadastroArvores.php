<div class="form">

     <form name="formularioCA" id="formCA" action="#" method="POST" class="flex" >

          <h1>Cadastro de Árvores</h1>
          <input type="text" name="NomeCientifico" class="largura" placeholder="Nome Científico">
          <input type="text" name="NomePopular" class="largura" placeholder="Nome Popular">  
          

          
          Local: <select name="local" id="select" class="largura" > 
                 <option value="">Selecione o local...</option>
                 <?php 
                 include_once ("database/database.php");
                 $localArvoreFK = LocalArvore();
                 foreach ($localArvoreFK as list($a, $b, $c, $d)) {
                    echo "<option name='local' value='$a' > $b - $c, $d </option>";
                    }                 
                  ?>          
                 </select>
                 <div class="largura">
                      Data do Plantio: <input type="date" name="DataDoPlantio" class="largura" placeholder="">
                 </div>
         
          <div class="">
               <div class="">
                    Nativa:<select name="nativa" id="select" >
                          <option  name="nativa" value="sim">Sim </option>
                          <option  name="nativa" value="nao">Nao </option>
                    </select>
                   
                     Frutífera:<select name="frutifera" id="select" >
                          <option  name="frutifera" value="sim">Sim </option>
                          <option  name="frutifera" value="nao">Nao </option>
                    </select>
                        
                        Matriz:<select name="Matriz" id="select" >
                          <option  name="Matriz" value="s">Sim </option>
                          <option  name="Matriz" value="n">Nao </option>
                    </select>        
                                            
                    
               </div>
               
               <div class="largura">
                    Tipo de raiz: <select name="raiz" id="select" class="largura" > 
                         <option name="raiz" value="Axial">Axial</option>
                         <option name="raiz" value="Ramificada">Ramificada</option>
                         <option name="raiz" value="Fasciculada">Fasciculada</option>
                         <option name="raiz" value="Tuberosa">Tuberosa</option>
                         <option name="raiz" value="Estranguladora">Estranguladora</option>
                         <option name="raiz" value="Grampiforme">Grampiforme</option>
                         <option name="raiz" value="Respiratória">Respiratória</option>
                         <option name="raiz" value="Suporte">Suporte</option>
                         <option name="raiz" value="Tubular">Tubular</option>
                         <option name="raiz" value="Sugadora">Sugadora</option>
                         <option name="raiz" value="Aquática">Aquática</option>                         
                    </select>

                    
               </div>
          </div>
         
          <input type="number" name="idade" class="largura"placeholder="Idade">                   
          <input type="text" name="Altura" class="largura"placeholder="Altura">                   

          <input type="text" name="LarguraCOpa" class="largura" placeholder="Largura da Copa">

          <div class="uniaoFlex">
               <label > Data da ultima poda:</label><input type="date" name="UltimaPoda" class="largura ultimaLargura" placeholder="Data da última Poda">
          </div>
          <div class="">
                    <label>Eliminação:</label>

                    <input type="radio" name="Opcao04" class="Op" value="s">Sim

                    <input type="radio" name="Opcao04" class="Op" value="n" checked="">Não
               </div>
          <div class="largura">
               <label>Fitossanidade:</label>
               <textarea name="fitossanidade"></textarea>
          </div>
          <div class="largura">
               <label>Observações:</label>
               <textarea name="observacoes"></textarea>
          </div>

          <div class="botao">
               <input type="submit" name="Enviar" id="Enviar" class="btn bt01" value="Enviar">                    

               <input type="reset" name="Cancelar" id="Cancelar" class="btn" value="Cancelar">
          </div>                       
     </form>

</div>
<?php 
     if(isset($_POST['Enviar']) && $_POST['Enviar'] === 'Enviar'){
          $CientificoArvore = $_POST['NomeCientifico'];
          $PopularArvore = $_POST['NomePopular'];
          $localArvore = $_POST['local'];
          $dataPlatio = $_POST['DataDoPlantio'];
          $NativaArvore = $_POST['nativa'];
          $Frutifera = $_POST['frutifera'];
          $MatrizArvore = $_POST['Matriz'];
          $RaizArvore = $_POST['raiz'];
          $idedeArvore = $_POST['idade'];
          $alturaArvore = $_POST['Altura'];
          $laguraArvore = $_POST['LarguraCOpa'];
          $dataPoda = $_POST['UltimaPoda'];
          $EliminacaoArvore = $_POST['Opcao04'];
          $fitossanidade = $_POST['fitossanidade'];
          $observacaoArvore = $_POST['observacoes'];
          include_once ( "painelAdm.php" );
          $logadorAdm = $IdColaboradorLogado;
         // include_once ( "database/database.php" );
          CadastrarArvore($CientificoArvore, $PopularArvore, $localArvore, $dataPlatio, $NativaArvore, $Frutifera, $MatrizArvore,  $RaizArvore, $idedeArvore, $alturaArvore, $laguraArvore, $dataPoda, $EliminacaoArvore, $fitossanidade, $observacaoArvore, $logadorAdm);

     }
 ?>