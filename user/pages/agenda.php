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
        YUI({ filter: 'raw' }).use('aui-scheduler', function(Y) {

            var items = [
                {
                    content: 'Review or (even better) Rewrite Your Goals',
                    startDate: new Date(2013, 1, 4, 12),
                    endDate: new Date(2013, 1, 4, 16)
                },
                {   
                    content: 'Event 1',
                    startDate: new Date(2014, 6, 4),
                    endDate: new Date(2014, 6, 20),
                    allDay: true
                },
                {
                    content: 'Event 2',
                    startDate: new Date(2014, 6, 4),
                    endDate: new Date(2014, 6, 20),
                    allDay: true
                },
                {
                    content: 'Event 3',
                    startDate: new Date(2014, 6, 4),
                    endDate: new Date(2014, 6, 20),
                    allDay: true
                },
                {
                    content: 'Other event',
                    startDate: new Date(2014, 6, 20),
                    endDate: new Date(2014, 6, 22),
                    allDay: true
                },
                {
                    content: 'Other event 2',
                    startDate: new Date(2014, 6, 23),
                    endDate: new Date(2014, 6, 28),
                    allDay: true
                }
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <script>
        $( function() {
            $( ".datepicker" ).datepicker();
        } );
    </script>

</body>

</html>