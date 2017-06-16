<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Easy Rights - Sistema Jurídico</title>

    <!-- Bootstrap Core CSS -->
    <link href="user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="user/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="user/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="user/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 

</head>

<body>

    <header>
    <?php 
    if(session_status() != PHP_SESSION_ACTIVE) session_start();
        include 'administrator/menuLogin.html';
    ?> 
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Entrar no EasyRights Sistemas Jurídicos</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" name="formRegister">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuário" name="login" id="login" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="senha" id="senha" type="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Lembrar-me
                                    </label>
                                </div>
                                <div id="div1"></div><br>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" id="btnAjax"  class="btn btn-primary"> Login</button>
                                <a href="index.php" class="btn btn-default">Cancelar</a>
                                <a href="administrator/cadastro.php" class="btn btn-lg btn-block">Assine Agora</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#btnAjax").click(function(e){
                e.preventDefault();

                var password = document.formRegister.senha.value;  
                var name = document.formRegister.login.value;  
                var dataString = 'login='+ name + '&password='+ password;
                    
                $.ajax({
                    type: "POST",
                    url: "controle/controleLogin.php",
                    data: dataString,
                    async: false,
                        
                    success: function(result){
                        
                        if(result == "Usuário logado com sucesso."){
                            alert(result);
                            window.location.href = "user/pages/index.php";
                        }
                        else
                            $("#div1").html(result);
                    },
                    error : function(jqXHR, textStatus, errorThrown) { 
                        if(jqXHR.status == 404 || errorThrown == 'Not Found') 
                        { 
                            $("#div1").html('Erro 404: Documento não encontrado.'); 
                        }
                        if(xhr.status==403) {
                            $("#div1").html('Erro 403: Arquivo proibido.'); 
                        }
                    }
                });
            });
        });

        function placeOrder(){
            var password = document.formRegister.senha.value;  
            var name = document.formRegister.login.value;  
            var dataString = 'login='+ name + '&password='+ password;
                    
            $.ajax({
                type: "POST",
                url: "controle/controleLogin.php",
                data: dataString,
                        
                success: function(result){
                    $("#div1").html(result);
                },
                error: function(result){
                    $("#div1").html(result);
                },
            });    
        }
    </script>
   
</body>

</html>
