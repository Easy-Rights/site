<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EasyRights Adiministração - Relatórios</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <header>
        <?php
            $menu = 'Relatorio';
            include 'menuSistema.php';
        ?>
    </header>
	
	<article>
		<div class="container theme-showcase" role="main">
        	<h1>Relatórios &nbsp </h1>
			<br>
			<div class="table-responsive">		
            	<table class="table table-hover">
               		<thead>
                   		<tr>
                   			<th>#</th>
                   			<th>Tipos</th>
                   			<th>ações</th>
                  		</tr>
               		</thead>
               		<tbody>
                       	<tr>
                           	<th scope="row">1</th>
                       		<td>Finanças</td>                        					
	                        <td> 
                               	<button id="botaoEditar" class="btn btn-default btn-sm glyphicon glyphicon-download" type="submit" title="Gerar relatório das Finanças em PDF" aria-hidden="true" data-toggle="modal" data-target="#modalInserir"></button>                   
                        	</td>
                    	</tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Funcionários</td>
                            <td> 
                                <button id="botaoEditar" class="btn btn-default btn-sm glyphicon glyphicon-download" type="submit" title="Gerar relatório dos Funcionários em PDF" aria-hidden="true" data-toggle="modal" ></button> 
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Clientes</td>  
                            <td> 
                                <button id="botaoEditar" class="btn btn-default btn-sm glyphicon glyphicon-download" type="submit" title="Gerar relatório dos Clientes em PDF" aria-hidden="true" data-toggle="modal" ></button> 
                            </td>
                        </tr>
                    </tbody>
                </table>  
            </div>
		</div>
    <article>		
	
    <footer>
        <?php
            include 'rodape.php';
        ?>
    </footer>

    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</body>
</html>	
