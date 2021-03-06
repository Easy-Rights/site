<?php
  include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
  protegePagina(); // Chama a função que protege a página
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyRights Adiministração - Funcionários</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <header>
        <?php
            $menu = "Funcionarios";
            include 'menuSistema.php';
        ?>
    </header>
    
    <article>
        <div class="container theme-showcase" role="main">
            <h1>Funcionários &nbsp <button id="botaoIncluir" class="btn btn-default btn-sm" type="submit" title="Adicionar funcionário" data-toggle="modal" data-target="#modalInserir">adicionar</button></h1>
            <br>
                <div class="table-responsive">      
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>nome</th>
                                <th>cpf/cnpj</th>
                                <th>e-mail</th>
                                <th>Cargo</th>
                                <th>ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Vítor Godeiro</td>
                                <td>074.467.314-35</td>
                                <td>vitorgodeiro@live.com</td>
                                <td>Desenvolvedor</td>         
                                <td> 
                                    <button id="botaoEditar" class="btn btn-default btn-sm glyphicon glyphicon-pencil" type="submit" title="Editar funcionário" aria-hidden="true" data-toggle="modal" data-target="#modalInserir"></button> 
                                    <button class="btn btn-default btn-sm glyphicon glyphicon-remove" type="submit" title="Remover funcionário" aria-hidden="true" data-toggle="modal" data-target="#modalRemover" data-nome="Vítor Godeiro" data-id=""></button>
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
                                    <input type="text" required class="form-control" id="nome" name="nome">
                                </div>
                                <div class="form-group">
                                    <label for="cpf" class="control-label">CPF:</label>
                                    <input type="text" required class="form-control" id="cpf" name="cpf">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">E-mail:</label>
                                    <input type="email" required class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="cargo" class="control-label">Cargo:</label>
                                    <select  required class="form-control" id="cargo" name="cargo">
                                        <option value="Estagiário">Estagiário</option>
                                        <option value="Desenvolvedor">Desenvolvedor</option>
                                        <option value="UX">UX</option>
                                        <option value="UX">Gerente</option>
                                  </select>
                                </div>
                             </div>
                            <div class="modal-footer">
                                <input type="hidden" name="id" id="id" >                          
                                <input type="hidden" name="retorno" id="retorno" value="<?php echo $retorno ?>">
                                <button type="submit" class="btn btn-primary" formaction="controleUsuario.php" name='action' id="salvar" value='inserirUsuario' formmethod="POST" form="formInserirUsuario">Salvar</button>
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
                            <h4 class="modal-title">Remover funcionário</h4>
                        </div>
                        <div class="modal-body" id="mensagemConfirmacaoRemover">
                            Realmente deseja remover o funcionário XXXX ?                   
                        </div>
                    </form>
                    <div class="modal-footer">
                        <input type="hidden" name="id" id="id">
                        <button type="submit" class="btn btn-warning" formaction="controle.php" name='action' id='removerUsuario' value='removerUsuario' formmethod="POST" form="formRemoverUsuario">Remover</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>                    
                </div>
          </div>
        </div>
        
    </div>
    
    </article>      
    
    <footer>
        <?php
            include 'rodape.php';
        ?>
    </footer>
    
</body>

<!-- SCRIPT -->
<script src="https://code.jquery.com/jquery-1.11.2.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
           
        $('#modalInserir').on('show.bs.modal', function (event) {
            var botao = $(event.relatedTarget); // Button that triggered the modal
            
            var titulo = document.getElementById("modalTitulo");
            var identificador = document.getElementById("id");
            var nome = document.getElementById("nome");
            var cpf = document.getElementById("cpf");
            var email = document.getElementById("email");
            var cargo = document.getElementById("cargo");
            var salvar = document.getElementById("salvar");
            
            if (botao[0].id == "botaoIncluir")
            {
                titulo.innerHTML = "Novo funcionário";
                identificador.value = "";
                nome.value = "";
                cpf.value = "";
                email.value = "";
                cargo.value = "Estagiário";
                salvar.value = "inserirUsuario";
            }
            else // Botão Editar
            {
                var td = botao.parent().parent().children();
                
                titulo.innerHTML = "Editar funcionário";
                identificador.value = botao.data('id');
                nome.value = td[1].innerText;
                cpf.value = td[2].innerText;
                email.value = td[3].innerText;
                cargo.value = td[4].innerText;
                salvar.value = "editarExemplar";
            }           
        });
        
        $('#modalRemover').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var idBotao = button.data('id'); // Extract info from data-* attributes
            var id = document.getElementById('id');
            id.value = idBotao;
            
            var mensagem = document.getElementById('mensagemConfirmacaoRemover');
            mensagem.innerHTML = "Realmente deseja remover o funcionário <strong>" + button.data('nome') + "</strong>?";
        });
    </script>

</html> 
