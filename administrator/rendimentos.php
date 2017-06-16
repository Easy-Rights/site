<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EasyRights Adiministração - Rendimentos</title>

    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <script src="../js/jquery-1.11.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

</head>
<body>
	<?php
       include 'menuSistema.html';
    ?>
	
	<article>
		<div class="container theme-showcase" role="main">
        	<h1>Rendimentos &nbsp </h1>
            <h3>+R$ XX - YY </h3>
			<br>
				<div class="table-responsive">		
            		<table class="table table-hover">
                		<thead>
                    		<tr>
                      			<th>#</th>
                      			<th>Tipos</th>
                                <th>Valor</th>
                      			<th>ações</th>
                    		</tr>
                		</thead>
                		<tbody>
                        	<tr>
                            	<th scope="row">1</th>
                        		<td>Faturamento</td>   
                                <td>XX</td>                      					
	                            <td> 
                                	<button id="botaoEditar" class="btn btn-default btn-sm glyphicon glyphicon-eye-open" type="submit" title="Visualizar faturamento" aria-hidden="true" data-toggle="modal" data-target="#modalInserir"></button> 
                               
                        		</td>
                    		</tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Despesas</td>
                                <td>YY</td> 
                                <td> 
                                    <button id="botaoEditar" class="btn btn-default btn-sm glyphicon glyphicon-eye-open" type="submit" title="Visualizar despesas" aria-hidden="true" data-toggle="modal" ></button> 
                             
                                </td>
                            </tr>
  
                </tbody>
            </table>  
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
</html>	