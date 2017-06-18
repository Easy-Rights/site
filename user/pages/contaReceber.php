<?php include('header.php');?>
        <!-- Corpo efetivo da página body -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Contas a Receber</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="sel1">Conta Financeira</label>
                    <select class="form-control" id="sel1">
                        <option>Conta Empresa 01</option>
                        <option>Conta Empresa 02</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label>Data Inicial</label>
                    <input class="form-control" id='datetimepicker2' data-provide="datepicker"  data-date-format="dd/mm/yyyy">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Data Final</label>
                    <input class="form-control" id='datetimepicker2' data-provide="datepicker"  data-date-format="dd/mm/yyyy">
                </div>
            </div>
            <!-- .col-lg-12-->
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Histórico</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label>Mostrar <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> registros</label></div></div><div class="col-sm-6 text-right"><div id="dataTables-example_filter" class="dataTables_filter"><label>Pesquisar: <input class="form-control input-sm" placeholder="" aria-controls="dataTables-example" type="search"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;" width="100%">
                    <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-label="Browser: activate to sort column ascending">
                                Data
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Descrição
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Cliente
                            </th>                            
                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                Saldo Inicial
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                Crédito
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                Débito
                            </th>
                             <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-label="Platform(s): activate to sort column ascending">
                                Saldo Final
                            </th>
                             <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                Documento
                            </th>
                             <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-label="Platform(s): activate to sort column ascending">
                                Forma de Pagamento
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeA odd" role="row">
                            <td>16/12/2016</td>
                            <td>Honorários</td>
                            <td>Cliente 1</td>
                            <td>Saldo 1</td>
                            <td>Crédito 1</td>
                            <td>Débito 1</td>
                            <td>Saldo 2</td>
                            <td>XXXX</td>
                            <td>Dinheiro</td>
                        </tr>
                        <tr class="gradeA even" role="row">
                            <td>17/12/2016</td>
                            <td>Honorários</td>
                            <td>Cliente 2</td>
                            <td>Saldo 1</td>
                            <td>Crédito 1</td>
                            <td>Débito 1</td>
                            <td>Saldo 2</td>
                            <td>XXXX</td>
                            <td>Dinheiro</td>
                        </tr>
                        <tr class="gradeA odd" role="row">
                            <td>20/12/2016</td>
                            <td>Honorários</td>
                            <td>Cliente 3</td>
                            <td>Saldo 1</td>
                            <td>Crédito 1</td>
                            <td>Débito 1</td>
                            <td>Saldo 2</td>
                            <td>XXXX</td>
                            <td>Dinheiro</td>
                        </tr>
                    </tbody>
                </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Mostrando 3 de 3 dos 3 registros</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Anterior</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a><li class="paginate_button next disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Próximo</a></li></ul></div></div></div></div>
                <!-- /.table-responsive -->
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
            $( "#datetimepicker2" ).datepicker();
                locale: 'ru',
                startDate: '-3d'
        } );
    </script>


</body>

</html>
    