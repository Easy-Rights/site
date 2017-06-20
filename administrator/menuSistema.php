
<nav class="navbar navbar-default navbar-static-top" style="min-height: 0px;">
    
        <div class="container">
            <ul class="nav nav-pills pull-left" >
                <li role="presentation" <?php if ($menu == 'Relatorio') echo "class='active'";?> ><a href="relatorios.php">Relatórios</a></li>
                <li role="presentation" <?php if ($menu == 'Precos') echo "class='active'";?> ><a href="precos.php">Preços</a></li>
                <li role="presentation" <?php if ($menu == 'Rendimentos') echo "class='active'";?> ><a href="rendimentos.php">Rendimentos</a></li>
                <li role="presentation" <?php if ($menu == 'Funcionarios') echo "class='active'";?> ><a href="funcionarios.php">Funcionários</a></li>
                <li role="presentation" <?php if ($menu == 'Usuarios') echo "class='active'";?> ><a href="usuarios.php">Usuários</a></li>
            </ul>
            <ul class="nav nav-pills pull-right" >
                <li class="dropdown " >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo "Olá, " . $_SESSION['usuarioNome']; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="logout.php">Sair</a></li>
                        <li><a href="#">Editar</a></li>
                    </ul>
                </li>
            </ul>
        
    </div>  
</nav>
 