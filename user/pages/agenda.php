<?php include('header.php');?>
    
    <script src="../../css/build/aui/aui.js"></script>
    
    <div class="col-lg-12">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Agenda de compromissos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        <div id="scheduler"></div>
    
        <script>
        YUI({ 
            lang:'pt-BR',
            filter: 'raw' }).use('aui-scheduler', 'translator', function(Y) {

                
                
            var items = [
                {
                    content: 'III Escola Regional de Informática do Piauí – ERIPI',
                    startDate: new Date(2017, 5, 12),
                    endDate: new Date(2017, 5, 14),
                    allDay: true
                },
                {   
                    content: '10ª Semana Acadêmica de Computação - SEACOMP 2017',
                    startDate: new Date(2017, 5, 19),
                    endDate: new Date(2017, 5, 23),
                    allDay: true
                },
                {
                    content: 'XXXVII Congresso da Sociedade Brasileira de Computação - CSBC',
                    startDate: new Date(2017, 6, 2),
                    endDate: new Date(2017, 6, 6),
                    allDay: true
                },
                {
                    content: 'IEEE International Summer School on Smart Cities - S3C 2017',
                    startDate: new Date(2017, 7, 6),
                    endDate: new Date(2017, 7, 11),
                    allDay: true
                },
            ];

            
            var schedulerViews = [
                new Y.SchedulerWeekView(),
                new Y.SchedulerDayView(),
                new Y.SchedulerMonthView(),
                new Y.SchedulerAgendaView()
            ];

            new Y.Scheduler({
                boundingBox: '#scheduler',
                items: items,
                views: schedulerViews,
                activeView: schedulerViews[2],
                eventRecorder: new Y.SchedulerEventRecorder()
                // firstDayOfWeek: 1,
                // activeView: weekView,
                // views: [dayView, weekView, monthView, agendaView]
            }).render();

        });
        </script>
        </div>
    </div>


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
    
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>-->
    

    <script>
        $( function() {
            $( ".datepicker" ).datepicker({});
        } );
    </script>

</body>

</html>