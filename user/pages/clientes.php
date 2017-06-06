<?php include('header.php');?>
        <!-- Corpo efetivo da página body -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Clientes</h1>
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
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Assunto</label>
                    <input class="form-control" placeholder="Processo 01" type="text">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <!-- TODO não seria melhor um choose box aqui? -->
                    <label>Situação</label>
                    <input class="form-control" placeholder="Ativo/Aguardando Julgamento" type="text">
                </div>
            </div>
        
            <div class="col-lg-12">
                <!-- <div class="panel panel-default"> -->
                    <div class="panel-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#cl-geral" data-toggle="tab">Geral</a>
                            </li>
                            <li><a href="#cl-enderecos" data-toggle="tab">Endereços</a>
                            </li>
                            <li><a href="#cl-telefones" data-toggle="tab">Telefones</a>
                            </li>
                            <li><a href="#cl-dados" data-toggle="tab">Dados Profissionais</a>
                            </li>
                            <li><a href="#cl-dependentes" data-toggle="tab">Dependentes</a>
                            </li>
                            <li><a href="#cl-adicionais" data-toggle="tab">Adicionais</a>
                            </li>
                            <li><a href="#cl-fotos" data-toggle="tab">Fotos</a>
                            </li>
                            <li><a href="#cl-documentos" data-toggle="tab">Documentos</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
<!--********************************************************************************************************************** -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="cl-geral">
                                <br>
                                <div class="col-lg-12">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label class="label-cadastros">Pessoa</label>
                                            <select class="form-control">
                                                <option>Física</option>
                                                <option>Jurídica</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="label-cadastros">Nome</label>
                                            <input class="form-control" placeholder="Nome do cliente" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label>Apelido</label>
                                            <input class="form-control" placeholder="Apelido" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label class="label-cadastros">CPF</label>
                                            <input class="form-control" placeholder="000.000.000-00" type="tel">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>RG</label>
                                            <input class="form-control" placeholder="RG" type="number">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Título de eleitor</label>
                                            <input class="form-control" placeholder="Título de eleitor" type="number">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="fa fa-envelope"></span>
                                                </span>
                                                <input class="form-control" placeholder="cliente@clientemail.com" type="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Data de nascimento</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input class="form-control datepicker" placeholder="16/12/1980" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Sexo</label>
                                            <select class="form-control">
                                                <option>Feminino</option>
                                                <option>Masculino</option>
                                                <option>Não informado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Estado civil</label>
                                            <div class="input-group">
                                                <!-- <span class="input-group-addon addon-background"> -->
                                                    <span class="input-group-addon addon-background">
                                                        <span class="fa fa-heart"></span>
                                                    </span>
                                                    <span class="input-group-addon addon-background">
                                                        <span class="fa fa-plus"></span>
                                                    </span>
                                                <!-- </span> -->
                                                <select class="form-control">
                                                    <option>Amancebado</option>
                                                    <option>Casado</option>
                                                    <option>Divorciado</option>
                                                    <option>Solteiro</option>
                                                    <option>Viúvo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>País (nacionalidade) </label>
                                            <div class="input-group">
                                                <span class="input-group-addon addon-background">
                                                <span class="fa fa-globe"></span>
                                                </span>
                                                <span class="input-group-addon addon-background">
                                                    <span class="fa fa-plus"></span>
                                                </span>
                                                <select class="form-control">
                                                    <option>Brasil</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Estado (naturalidade)</label>
                                            <div class="input-group">
                                                <span class="input-group-addon addon-background">E </span>
                                                <span class="input-group-addon addon-background">
                                                    <span class="fa fa-plus"></span>
                                                </span>
                                                <select class="form-control">
                                                    <option>Piauí, terra querida</option>
                                                    <option>Filha do sol do equador</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Cidade (naturalidade)</label>
                                            <div class="input-group">
                                                <span class="input-group-addon addon-background">3 </span>
                                                <span class="input-group-addon addon-background">
                                                    <span class="fa fa-plus"></span>
                                                </span>
                                                <select class="form-control">
                                                    <option>Teresina</option>
                                                    <option>Cidade verde</option>
                                                    <option>Picos</option>
                                                    <option>Cidade modelo</option>
                                                    <option>Campo grande</option>
                                                    <option>Terra do caju</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Observações</label>
                                            <textarea class="form-control" rows="3"> </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!--********************************************************************************************************************** -->

                            <div class="tab-pane fade" id="cl-enderecos">
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

<!--********************************************************************************************************************** -->

                            <div class="tab-pane fade" id="cl-telefones">
                                <h4>Telefones</h4>
                                
                            </div>

<!--********************************************************************************************************************** -->

                            <div class="tab-pane fade" id="cl-dados">
                                <h4>Dados</h4>
                                
                            </div>

<!--********************************************************************************************************************** -->

                            <div class="tab-pane fade" id="cl-dependentes">
                                <h4>de</h4>
                                
                            </div>

<!--********************************************************************************************************************** -->

                            <div class="tab-pane fade" id="cl-adicionais">
                                <h4>ad</h4>
                                
                            </div>

<!--********************************************************************************************************************** -->

                            <div class="tab-pane fade" id="cl-fotos">
                                <h4>f</h4>
                                
                            </div>

<!--********************************************************************************************************************** -->

                            <div class="tab-pane fade" id="cl-documentos">
                                <h4>do</h4>
                                
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
