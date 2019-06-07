<div class="form">

     <form name="formularioDI" id="formDI" action="#" method="POST" class="flex" >

          <h1>Cadastro de Requerimento</h1>

          <div class="largura">
               <label>Tipo do requerimento: </label>
               <select name="opcoes" id="select">
                    <option value="Poda">Poda</option>
                    <option value="Eliminação">Eliminação</option>
               </select>

          </div>

          <input type="text" name="nomeArvore" class="largura" placeholder="Nome da árvore">

          <input type="text" name="logradouro" class="largura" placeholder="Logradouro">

          <input type="text" name="Nreferencia" class="largura" placeholder="Número">

          <input type="text" name="bairro" class="largura" placeholder="Bairro">

          <div class="uniaoFlex">

          <label class="center" >Observações sobre a solicitação: </label><textarea></textarea>

          </div>

          <div class="botao">

               <input type="submit" name="Enviar" id="Enviar" class="btn bt01" value="Enviar">                    
               <input type="submit" name="Cancelar" id="Cancelar" class="btn" value="Cancelar">
               
          </div>                           

     </form>

</div>