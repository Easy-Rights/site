<?php include('header.php');?>
        <!-- Corpo efetivo da página body -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de Contato</h1>
                </div>
            </div>

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Contato</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form name="formRegisterContato" method="post">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Nome">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="servico" id="servico" required class="form-control input-sm" placeholder="Serviço">
                            </div>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="telefone" id="telefone" class="form-control input-sm" placeholder="Telefone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email">
                            </div>
                        </div>
                    </div>
                
                    <button type="submit" id="btnAjax"  class="btn btn-primary"> Cadastrar</button>
                    <a class="btn btn-default" href="../index.php" >Cancelar</a>
                </form>










            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    </div>
    <!-- /.panel -->
                
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <script>
        $( function() {
            $( ".datepicker" ).datepicker();
        } );
    </script>

</body>

</html>
    