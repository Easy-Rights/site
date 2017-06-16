<?php include('header.php');?>
        <!-- Corpo efetivo da página body -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Andamento Processual</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Número</label>
                    <input class="form-control" placeholder="11.11.1111.111.2.015.0001">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label>Assunto</label>
                    <input class="form-control" placeholder="Processo 01" type="text">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Situação</label>
                    <input class="form-control" placeholder="Ativo/Aguardando Julgamento" type="text">
                </div>
            </div>
            <!-- .col-lg-12-->
            <div class="col-lg-6">
                <label>Histórico</label>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Pesquisar:</label>
                    <input class="inputOnLine form-control " type="text">
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
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
