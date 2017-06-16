<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Usuarios EasyRights</title>

    <!--<link href="../css/bootstrap.min.css" rel="stylesheet">-->
    
    <script src="../js/jquery-1.11.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> -->

	


  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

</head>
<body>
    <?php
       include 'menuSistema.html';
    ?>
	
	<article>
		<div class="container theme-showcase" role="main">
        	<h1>Usuários &nbsp <button id="botaoIncluir" class="btn btn-default btn-sm" type="submit" title="Adicionar usuário" data-toggle="modal" data-target="#modalInserir">adicionar</button></h1>
			<br>
				<div class="table-responsive">		
            		<table class="table table-hover">
                		<thead>
                    		<tr>
                      			<th>#</th>
                      			<th>nome</th>
                      			<th>cpf/cnpj</th>
                      			<th>e-mail</th>
                      			<th>instituição</th>
                      			<th>ações</th>
                    		</tr>
                		</thead>
                		<tbody>
                        	<tr>
                            	<th scope="row">1</th>
                        		<td>Vítor Godeiro</td>
                        		<td>074.467.314-35</td>
                        		<td>vitorgodeiro@live.com</td>
                        		<td>Escritório Justiça</td>			
	                            <td> 
	                            	<button id="botaoVisualizar" class="btn btn-default btn-sm glyphicon glyphicon-eye-open" title="Visualizar informações do usuário" aria-hidden="true" ></button>
                                	<button id="botaoEditar" class="btn btn-default btn-sm glyphicon glyphicon-pencil" type="submit" title="Editar usuário" aria-hidden="true" data-toggle="modal" data-target="#modalInserir" data-id='2'></button> 
                                		

                                	<button class="btn btn-default btn-sm glyphicon glyphicon-remove" type="submit" title="Remover usuário" aria-hidden="true" data-toggle="modal" data-target="#modalRemover" data-nome="teste" data-id='teste'></button>

                                	
                        		</td>
                    		</tr>
  
                </tbody>
            </table>  
        </div>
		
        <div class="modal fade" id="modalInserir" tabindex="-1" role="dialog" aria-labelledby="modalEditar" data-backdrop="static" aria-hidden="true">
          <div class="modal-dialog">
                <form id="formInserirUsuario" formmethod="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modalTitulo">Novo usuário</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nome" class="control-label">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome">
                            </div>
                            <div class="form-group">
                                <label for="instituicao" class="control-label">Instituição:</label>
                                <input type="text" class="form-control" id="instituicao" name="instituicao">
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="login" class="control-label">Cpf/Cnpj:</label>
                                <input type="text" class="form-control" id="login" name="login">
                            </div>
                            <div class="form-group">
                            	<label for="senha" class="control-label">Senha</label><br>
                                <input type="text" id="senha">
    
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id" id="id">
                            <button type="submit" class="btn btn-primary" formaction="Controle.php" name='action' id="salvar" value='inserirUsuario' formmethod="POST" form="formInserirUsuario">Salvar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </form>
          </div>
        </div>		

        <div class="modal fade bs-example-modal-sm" id="modalRemover" tabindex="-1" role="dialog" aria-labelledby="modalRemover" aria-hidden="true">
          	<div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <form id="formRemoverUsuario" formmethod="post">                                
                        <div class="modal-header alert-warning">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Remover usuário</h4>
                        </div>
                        <div class="modal-body" id="mensagemConfirmacaoRemover">
                            Realmente deseja remover o usuário XXXX ?					
                        </div>
                        <input type="hidden" name="id" id="idRemover">
                        <input type="hidden" name="retorno" id="retorno" value="<?php echo $retorno ?>">
                    </form>
                    <div class="modal-footer">
                        
                        <button type="submit" class="btn btn-warning" formaction="controleUsuario.php" name='action' id='removerUsuario' value='removerUsuario' formmethod="POST" form="formRemoverUsuario">Remover</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>                    
                </div>
          	</div>
        </div>
        
    </div>
    
	</article>		
	
    <?php
        include 'rodape.html';
    ?>
	
</body>


<script>
w3IncludeHTML();
</script>
<script type="text/javascript">
	       
        $('#modalInserir').on('show.bs.modal', function (event) {
            var botao = $(event.relatedTarget); // Button that triggered the modal
            
            var titulo = document.getElementById("modalTitulo");
            var identificador = document.getElementById("id");
            var nome = document.getElementById("nome");
            var instituicao = document.getElementById("instituicao");
            var email = document.getElementById("email");
            var login = document.getElementById("login");
            var senha = document.getElementById("senha");
            var salvar = document.getElementById("salvar");
            
            if (botao[0].id == "botaoIncluir")
            {
                titulo.innerHTML = "Novo usuário";
                identificador.value = "";
                nome.value = "";
                instituicao.value = "";
                email.value = "";
                login.value = "";
                senha.value = "";
                salvar.value = "inserirUsuario";
            }
            else // Botão Editar
            {
                var td = botao.parent().parent().children();
                
                titulo.innerHTML = "Editar usuário";
                identificador.value = botao.data('id');
                nome.value = td[1].innerText;
                login.value = td[2].innerText;
                email.value = td[3].innerText;
                instituicao.value = td[4].innerText;
                senha.value = "";
                salvar.value = "editarExemplar";
            }           
        });
        
      $('#modalRemover').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var idBotao = button.data('id'); // Extract info from data-* attributes
            var id = document.getElementById('idRemover');
            id.value = idBotao;
            var mensagem = document.getElementById('mensagemConfirmacaoRemover');
            mensagem.innerHTML = "Realmente deseja remover o usuário <strong>" + button.data('nome') + "</strong>?";
        })              
    </script>

</html>	
