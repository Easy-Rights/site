<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro EasyRights</title>

  <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="../css/jumbotron-narrow.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

  <header>
    <?php 
        include 'menuLogin.php';
    ?> 
    
  </header>
  
  <article >
    <?php 
      session_start();
      if(isset($_SESSION['alert'])){
        echo $_SESSION["alert"];
        unset ($_SESSION["alert"]);
      }
  ?>

    <div class="container">
      <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Cadastre-se no EasyRights</h3>
            </div>
            <div class="panel-body">
              <form name="formRegister" method="post">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Nome">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Sobrenome">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <input type="text" oninput="validateLogin()" name="login" id="login" required class="form-control input-sm" placeholder="Login">
                  <span id="loginlocation" style="color:red"></span>
                </div>
                
                <!--<div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <select class="form-control input-sm" id="sel1" required>
                        <option value="" disabled selected>Selecione seu plano</option>
                        <option>Básica - R$9.99</option>
                        <option>Intermediária - R$29.99</option>
                        <option>Profissional - R$49.99</option>
                        <option>Especial - R$99.99</option>
                      </select>
                    </div>
                  </div>
                </div> -->
    
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email">
                </div>

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" oninput="validateSenha()" name="senha" id="senha" class="form-control input-sm" placeholder="Senha">
                      <span id="passwordlocation" style="color:red"></span>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" oninput="validateSenha2()"name="senhaConfirmar" id="senhaConfirmar" class="form-control input-sm" placeholder="Confirme Senha">
                      <span id="passwordlocation2" style="color:red"></span>
                    </div>
                  </div>
                </div>
                
                <button type="submit" id="btnAjax"  class="btn btn-primary"> Cadastro</button>
                <a class="btn btn-default" href="../index.php" >Cancelar</a>
              
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



  <!-- SCRIPTS -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
  <script src="../js/bootstrap.min.js"></script>


  <script>
  function validateLogin(){  
    var name = document.formRegister.login.value;  
    var status = false;  
    if(name == ""){  
      document.getElementById("loginlocation").innerHTML = " <img src='img/unchecked.gif'/> Por favor entre com o seu login";  
      status=false;
    }else{  
      document.getElementById("loginlocation").innerHTML = " <img src='img/checked.gif'/>";  
      status=true;
    }  
    return status; 
  }
  function validateSenha(){ 
    var passwordlength = document.formRegister.senha.value.length;  
    var password = document.formRegister.senha.value;  
    var password2 = document.formRegister.senhaConfirmar.value;  
    var status=false;  
    
    if(passwordlength < 6){  
      document.getElementById("passwordlocation").innerHTML = " <img src='img/unchecked.gif'/> Senha deve ser maior ou igual a 6";  
      status=false; 
    }else{  
      document.getElementById("passwordlocation").innerHTML = " <img src='img/checked.gif'/>";  
    }  

    if(password2.length > 1){
      if(password != password2){  
        document.getElementById("passwordlocation2").innerHTML = " <img src='img/unchecked.gif'/> Senhas devem ser iguais";  
        status=false; 
      }else{  
        document.getElementById("passwordlocation2").innerHTML = " <img src='img/checked.gif'/>";  
      }  
    }
    return status;  
  }  
  function validateSenha2(){ 
    var password = document.formRegister.senha.value;  
    var password2 = document.formRegister.senhaConfirmar.value;  
    var passwordlength = document.formRegister.senhaConfirmar.value.length;  
    var status=false;  
    if(passwordlength < 6){  
      document.getElementById("passwordlocation2").innerHTML = " <img src='img/unchecked.gif'/> Senha deve ser maior ou igual a 6";  
      status=false; 
    }else{
      if(password != password2){  
        document.getElementById("passwordlocation2").innerHTML = " <img src='img/unchecked.gif'/> Senhas devem ser iguais";  
        status=false; 
      }else{  
      document.getElementById("passwordlocation2").innerHTML=" <img src='img/checked.gif'/>";  
      }
    }     
    return status;  
  }  
  $(document).ready(function(){
      $("#btnAjax").click(function(e){
        e.preventDefault();
      var password = document.formRegister.senha.value;  
      var password2 = document.formRegister.senhaConfirmar.value;  
      var passwordlength = document.formRegister.senhaConfirmar.value.length; 
      var name = document.formRegister.login.value;  
      
      if(name !="" && password == password2 &&  passwordlength > 5){  
        //document.formRegister.action="../controle.php?action=cadastrarUsuario";
            //document.formRegister.submit();
            var dataString = 'login='+ name + '&password='+ password;
            
        $.ajax({
          type: "POST",
          url: "controleCadastro.php",
          data: dataString,
           
          async: false,
          success: function(result){
          alert(result);
          window.location.href = "../index.php"
          },
              error: function(jqXHR, textStatus, errorThrown) {
                  console.log(textStatus, errorThrown);
                  alert(err.Message);
               }
          });
      }
      else{  
        alert("Dados inválidos. Por favor tente novamente!"); 
        }

          
      });
  });
  function placeOrder(){
    e.preventDefault();
    var password = document.formRegister.senha.value;  
    var password2 = document.formRegister.senhaConfirmar.value;  
    var passwordlength = document.formRegister.senhaConfirmar.value.length; 
    var login = document.formRegister.login.value;  
    
    if(login !="" && password == password2 &&  passwordlength > 5){  
      //document.formRegister.action="../controle.php?action=cadastrarUsuario";
          //document.formRegister.submit();
          var dataString = 'login='+ login + '&password='+ password;
          
      $.ajax({
        type: "POST",
        url: "controleCadastro.php",
        data: dataString,
         
        async: false,
        success: function(result){
        alert(result);
        window.location.href = "google.com"
        },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                alert(err.Message);
             }
        });
    }
    else{  
      alert("Dados inválidos. Por favor tente novamente!"); 
      }

    
    
  }
  </script>
  
</body>

</html> 