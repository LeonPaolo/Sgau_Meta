<div class="form">

     <form name="formularioCA" id="formCA" action="#" method="POST" class="flex" >

          <h1>Cadastro de Árvores</h1>

          <input type="text" name="NomePopular" class="largura" placeholder="Nome Popular">

          <input type="text" name="NomeCientifico" class="largura" placeholder="Nome Científico">

          <input type="text" name="DataDoPlantio" class="largura" placeholder="Data do Plantio">

          <div class="">
               <div class="">
                    <label>Nativa:</label>

                    <input type="radio" name="Opcao01" class="Op" value="Sim">Sim

                    <input type="Radio" name="Opcao01" class="Op" value="Nao">Não
               </div>

               <div class="">
                    <label>Frutífera:</label>

                    <input type="radio" name="Opcao02" class="Op" value="sim">Sim

                    <input type="radio" name="Opcao02" class="Op" value="nao">Não
               </div>
               
               <div class="">
                    <label>Tipo da Raíz: </label>

                    <input type="radio" name="Opcao03" class="Op" value="axial">Axial

                    <input type="radio" name="Opcao03" class="Op" value="ramificada">Ramificada

                    <input type="radio" name="Opcao03" class="Op" value="fasciculada">Fasciculada

                    <input type="radio" name="Opcao03" class="Op" value="tuberosa">Tuberosa

                    <input type="radio" name="Opcao03" class="Op" value="estranguladora">Estranguladora

                    <input type="radio" name="Opcao03" class="Op" value="grampiforme">Grampiforme

                    <input type="radio" name="Opcao03" class="Op" value="respiratoria">Respiratória

                    <input type="radio" name="Opcao03" class="Op" value="suporte">Suporte

                    <input type="radio" name="Opcao03" class="Op" value="sugadora">Sugadora

                    <input type="radio" name="Opcao03" class="Op" value="tubular">Tubular

                    <input type="radio" name="Opcao03" class="Op" value="Aquatica">Aquática
               </div>
          </div>
         
          <input type="text" name="Altura" class="largura"placeholder="Altura">                   

          <input type="text" name="LarguraCOpa" class="largura" placeholder="Largura da Copa">

          <div class="uniaoFlex">
               <label > Data da ultima polda:</label><input type="date" name="UltimaPoda" class="largura ultimaLargura" placeholder="Data da última Poda">
          </div>
          <input type="text" name="Eliminacao" class="largura" placeholder="Eliminação">

          <div class="botao">
               <input type="submit" name="Enviar" id="Enviar" class="btn bt01" value="Enviar">                    

               <input type="submit" name="Cancelar" id="Cancelar" class="btn" value="Cancelar">
          </div>                       
     </form>

</div>