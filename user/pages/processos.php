<?php include('header.php');?>
        <!-- Corpo efetivo da página body -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Processos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        
            <div class="col-lg-12">
                <!-- <div class="panel panel-default"> -->
                    <div class="panel-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#cl-geral" data-toggle="tab">Geral</a>
                            </li>
                            <li><a href="#cl-advogados" data-toggle="tab">Advogados</a>
                            </li>
                            <li><a href="#cl-clientes" data-toggle="tab">Clientes</a>
                            </li>
                            <li><a href="#cl-apc" data-toggle="tab">Apensos - Conexos - Incidentes</a>
                            </li>
                            <li><a href="#cl-adicionais" data-toggle="tab">Adicionais</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
<!--********************************************************************************************************************** -->
                            <div class="tab-pane fade in active" id="cl-geral">
                                <br>

                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="label-cadastros">Número</label>
                                            <input class="form-control" placeholder="1.11.111.1111.111.11.1" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label class="label-cadastros">Assunto</label>
                                            <input class="form-control" placeholder="Processo 1" type="text">
                                        </div>
                                    </div>
                                </div>
                                <!--********************** -->

                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="label-cadastros">Tipo de ação</label>
                                            <div class="input-group">
                                                <span class="input-group-addon addon-background">3 </span>
                                                <span class="input-group-addon addon-background">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </span>
                                                <select class="form-control">
                                                    <option>Familiar</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="label-cadastros">Situação</label>
                                            <div class="input-group">
                                                <span class="input-group-addon addon-background">3 </span>
                                                <span class="input-group-addon addon-background">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </span>
                                                <select class="form-control">
                                                    <option>Ativo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Valor/Hora</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"> $ </span>
                                                <input class="form-control" placeholder="1000,00" type="number">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--********************** -->

                                <div class="col-lg-12">

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Pasta interna</label>
                                            <input class="form-control" placeholder="pasta 1" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Data de cadastro</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input class="form-control datepicker" placeholder="10/05/2012" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Data de distribuição</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input class="form-control datepicker" placeholder="01/11/2012" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Data de encerramento</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input class="form-control datepicker" placeholder="12/08/2013" type="date">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--********************** -->

                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label >Condição processual</label>
                                            <div class="input-group">
                                                <span class="input-group-addon addon-background">3 </span>
                                                <span class="input-group-addon addon-background">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </span>
                                                <select class="form-control">
                                                    <option>Réu</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Parte contrária</label>
                                            <div class="input-group">
                                                <span class="input-group-addon addon-background">3 </span>
                                                <span class="input-group-addon addon-background">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </span>
                                                <select class="form-control">
                                                    <option>Oposto Emp 1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Advogado contrário</label>
                                            <div class="input-group">
                                                <span class="input-group-addon addon-background">3 </span>
                                                <span class="input-group-addon addon-background">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </span>
                                                <select class="form-control">
                                                    <option>Advogado bad</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--********************** -->

                                <div class="col-lg-12">
                                    
                                </div>

                                <!--********************** -->

                                <div class="col-lg-12">
                                    
                                </div>

                                <!--********************** -->

                                <div class="col-lg-12">
                                    
                                </div>

                            </div>
<!--************************************************************************************************************** -->
                            <div class="tab-pane fade" id="cl-advogados">
                                <br>
                                <div class="col-lg-12">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label>CEP</label>
                                            <input class="form-control"> </input>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <br>
                                            <a href="#"> Não sei meu CEP </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Endereço</label>
                                            <input class="form-control"> </input>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Número</label>
                                            <input class="form-control"> </input>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Complemento</label>
                                            <input class="form-control"> </input>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Bairro</label>
                                            <input class="form-control"> </input>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <input class="form-control"> </input>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Cidade</label>
                                            <input class="form-control"> </input>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="cl-clientes">
                                <h4>cc</h4>
                                
                            </div>
                            <div class="tab-pane fade" id="cl-apc">
                                <h4>apc</h4>
                                
                            </div>

                            <div class="tab-pane fade" id="cl-dependentes">
                                <h4>de</h4>
                                
                            </div>
                            <div class="tab-pane fade" id="cl-adicionais">
                                <h4>ad</h4>
                                
                            </div>

                        </div>
                    </div>
                    <!-- /.panel-body -->
                <!-- </div> -->
                <!-- /.panel-->
            </div>
            <!-- .col-lg-12-->
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
