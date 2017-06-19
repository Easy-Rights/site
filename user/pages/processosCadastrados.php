<?php include('header.php');?>
        <!-- Corpo efetivo da página body -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Processos Cadastrados</h1>
                </div>  
            </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Contatos</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label>Mostrar <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> registros</label></div></div><div class="col-sm-6 text-right"><div id="dataTables-example_filter" class="dataTables_filter"><label>Pesquisar: <input class="form-control input-sm" placeholder="" aria-controls="dataTables-example" type="search"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;" width="100%">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 125px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Número
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 100px;" aria-label="Browser: activate to sort column ascending">
                                Cliente
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 100px;" aria-label="Platform(s): activate to sort column ascending">
                                Juiz
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 100px;" aria-label="Platform(s): activate to sort column ascending">
                                Vara
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 80px;" aria-label="Platform(s): activate to sort column ascending">
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeA even" role="row">
                            <td class="sorting_1">XXXXXXXX</td>
                            <td >Cliente 01</td>
                            <td>Juiz 01</td>
                            <td>Vara 01</td>
                            <td>
                                <button id="botaoEditar" class="btn btn-default btn-sm glyphicon glyphicon-search" type="submit" title="Visualizar processo" aria-hidden="true" data-toggle="modal" data-target="#modalInserir" data-id='22'></button> 
                                <button id="botaoEditar" class="btn btn-default btn-sm glyphicon glyphicon-pencil" type="submit" title="Editar processo" aria-hidden="true" data-toggle="modal" data-target="#modalInserir" data-id='22'></button> 
                                <button class="btn btn-default btn-sm glyphicon glyphicon-remove" type="submit" title="Remover processo" aria-hidden="true" data-toggle="modal" data-target="#modalRemover" data-nome="Vítor Godeiro" data-id='22'></button>
                            </td>
                        </tr>
                        <tr class="gradeA odd" role="row">
                            <td class="sorting_1">XXXXXXXX</td>
                            <td >Cliente 02</td>
                            <td>Juiz 02</td>
                            <td>Vara 02</td>
                            <td>
                                <button id="botaoEditar" class="btn btn-default btn-sm glyphicon glyphicon-search" type="submit" title="Visualizar processo" aria-hidden="true" data-toggle="modal" data-target="#modalInserir" data-id='22'></button> 
                                <button id="botaoEditar" class="btn btn-default btn-sm glyphicon glyphicon-pencil" type="submit" title="Editar processo" aria-hidden="true" data-toggle="modal" data-target="#modalInserir" data-id='22'></button> 
                                <button class="btn btn-default btn-sm glyphicon glyphicon-remove" type="submit" title="Remover processo" aria-hidden="true" data-toggle="modal" data-target="#modalRemover" data-nome="Vítor Godeiro" data-id='22'></button>
                            </td>
                        </tr>
                        <tr class="gradeA odd" role="row">
                            <td class="sorting_1">XXXXXXXX</td>
                            <td >Cliente 03</td>
                            <td>Juiz 01</td>
                            <td>Vara 01</td>
                            <td>
                                <button id="botaoEditar" class="btn btn-default btn-sm glyphicon glyphicon-search" type="submit" title="Visualizar processo" aria-hidden="true" data-toggle="modal" data-target="#modalInserir" data-id='22'></button> 
                                <button id="botaoEditar" class="btn btn-default btn-sm glyphicon glyphicon-pencil" type="submit" title="Editar processo" aria-hidden="true" data-toggle="modal" data-target="#modalInserir" data-id='22'></button> 
                                <button class="btn btn-default btn-sm glyphicon glyphicon-remove" type="submit" title="Remover processo" aria-hidden="true" data-toggle="modal" data-target="#modalRemover" data-nome="Vítor Godeiro" data-id='22'></button>
                            </td>
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
            $( ".datepicker" ).datepicker();
        } );
    </script>

</body>

</html>
    