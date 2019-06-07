<main class="formularioLogin">

<form action="mvc/controllers/cadastrar.php" method="POST" name="formLogin" id="formLogin" class="formLogin" >
<!--  ############### Links de Entrar e Cadastrar ######################### -->
<div class="menuLogin">  
               <ul>

                    <li  class="entrar" >
                         <a href="?v=<?php echo base64_encode ( 'login' ) ?> " ><i class="fas fa-user user"></i>Entrar</a>
                    </li>

                    <li  class="registrar cadastro loginCadastro loginEntrar">     
                         <a href=" ?v=<?php echo base64_encode ( 'cadastrar' ) ?> "  class="click"> <i class="fas fa-user-plus  user"></i>Cadastrar</a>
                    </li>
               
               </ul>
          </div>
          <div class="form formCadastro">
               
               <div class="NomesCadastro">

                    <input type="text" name="nome" class=" Campos margin " placeholder="Nome">
                    <input type="text" name="sobrenome" class=" Campos " placeholder="Sobrenome">    

               </div>

               <input type="text" name="cpf" class="Campos campo02" placeholder="CPF" >

               <input type="text" name="telefone" class="Campos campo02" placeholder="Telefone celular" >

               <input type="email"  name="emailCadastrar" id="EmailLogin" class="Campos campo02" placeholder="E-mail">
                    
               <input type="password" name="senhaCadastrar" id="senhaLogin" class="Campos campo03" placeholder="Senha">
               <input type="password" name="repSenhaCadastrar" id="senhaLogin" class="Campos campo03" placeholder="Repita a senha">
                    
               <input type="submit" value="Enviar" class=" BotaoLogin Campos " name="Cadastrar">

               <div class="color"> <?php include_once 'mvc/controllers/cadastrar.php';?></div>

          </div>

          </form>

          <div class="copyright">

               <div class="textoCopy">
                    <p>
                         <span class=" textoApagado "> &copy; 2019  Copyright:</span> SGAU               
                    </p>
               </div>

               </div>


</div>

</main>
