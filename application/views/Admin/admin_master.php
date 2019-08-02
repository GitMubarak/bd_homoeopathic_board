<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $title; ?></title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>admin_asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url(); ?>admin_asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo base_url(); ?>admin_asset/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo base_url(); ?>admin_asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="<?php echo base_url(); ?>admin_asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="<?php echo base_url(); ?>admin_asset/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

        <!-- Custom Theme Style -->
        <link href="<?php echo base_url(); ?>admin_asset/build/css/custom.min.css" rel="stylesheet">
		
		<!-- jQuery -->
        <script src="<?php echo base_url(); ?>admin_asset/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>admin_asset/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?php echo base_url(); ?>Super_admin/index" class="site_title"><i class="fa fa-paw"></i> <span>Bd Homoeopathic</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="<?php echo base_url(); ?>admin_asset/production/images/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2><?php echo $this->session->userdata('college_name'); ?></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>Super_admin/index"><i class="fa fa-home"></i> Home <span class=""></span></a>                                        
                                    </li>
                                    <li>
                                        <a><i class="fa fa-edit"></i> New Student Admission <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo base_url(); ?>Super_Admin/student_admission">Student Admission</a></li>
											<li><a href="<?php echo base_url(); ?>Super_Admin/student_registration_approve">Student Registration Approve</a></li>
                                            <li><a href="<?php echo base_url(); ?>Super_Admin/first_year_student_topsheet">First Year Student Top Sheet</a></li>                                            
                                        </ul>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-table"></i> Student Management <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo base_url(); ?>Super_Admin/list_of_student_year_wise">List Of Student(Year Wise)</a></li>
                                            <li><a href="<?php echo base_url(); ?>Super_Admin/student_registration_card">Student Registration Card</a></li>
											
                                        </ul>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-clone"></i> Manage Examination <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo base_url(); ?>Super_Admin/student_form_fillup">Student Form Fill Up</a></li>
                                            <li><a href="<?php echo base_url(); ?>Super_Admin/form_fillup_top_sheet">Form Fill Up Top Sheet</a></li>
                                            <li><a href="<?php echo base_url(); ?>Super_Admin/Student_admit_card">Student Admit Card</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="<?php echo base_url(); ?>admin_asset/production/images/img.jpg" alt="">
                                        <?php echo $this->session->userdata('college_name'); ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="<?php echo base_url(); ?>Super_Admin/profile/<?php echo $this->session->userdata('id'); ?>"> Profile</a></li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="badge bg-red pull-right">50%</span>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;">Help</a></li>
                                        <li><a href="<?php echo base_url(); ?>College/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                            <a>
                                                <span class="image"><img src="<?php echo base_url(); ?>admin_asset/production/images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="<?php echo base_url(); ?>admin_asset/production/images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="<?php echo base_url(); ?>admin_asset/production/images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="<?php echo base_url(); ?>admin_asset/production/images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="text-center">
                                                <a>
                                                    <strong>See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->



                <!-- page content -->
                <div class="right_col" role="main">
                    <?php
                    $message = $this->session->userdata('message');
                    if ($message) {
                        ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong></strong> 
                            <?php
                            echo $message;
                            $this->session->unset_userdata('message');
                            ?>
                        </div>
                    <?php } ?>

                    <?php echo $admin_home; ?>
                </div>  
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Developed by <a href="http://www.amarsoftbd.com/" target="_blank">AmarSoft Solution Ltd</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>admin_asset/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo base_url(); ?>admin_asset/vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="<?php echo base_url(); ?>admin_asset/vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- gauge.js -->
        <script src="<?php echo base_url(); ?>admin_asset/vendors/gauge.js/dist/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="<?php echo base_url(); ?>admin_asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>admin_asset/vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="<?php echo base_url(); ?>admin_asset/vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <script src="<?php echo base_url(); ?>admin_asset/vendors/Flot/jquery.flot.js"></script>
        <script src="<?php echo base_url(); ?>admin_asset/vendors/Flot/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url(); ?>admin_asset/vendors/Flot/jquery.flot.time.js"></script>
        <script src="<?php echo base_url(); ?>admin_asset/vendors/Flot/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url(); ?>admin_asset/vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="<?php echo base_url(); ?>admin_asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="<?php echo base_url(); ?>admin_asset/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="<?php echo base_url(); ?>admin_asset/vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="<?php echo base_url(); ?>admin_asset/vendors/DateJS/build/date.js"></script>
        <!-- JQVMap -->
        <script src="<?php echo base_url(); ?>admin_asset/vendors/jqvmap/dist/jquery.vmap.js"></script>
        <script src="<?php echo base_url(); ?>admin_asset/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="<?php echo base_url(); ?>admin_asset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="<?php echo base_url(); ?>admin_asset/production/js/moment/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>admin_asset/production/js/datepicker/daterangepicker.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="<?php echo base_url(); ?>admin_asset/build/js/custom.min.js"></script>

        <!-- Flot -->
        <script>
            $(document).ready(function () {
                var data1 = [
                    [gd(2012, 1, 1), 17],
                    [gd(2012, 1, 2), 74],
                    [gd(2012, 1, 3), 6],
                    [gd(2012, 1, 4), 39],
                    [gd(2012, 1, 5), 20],
                    [gd(2012, 1, 6), 85],
                    [gd(2012, 1, 7), 7]
                ];

                var data2 = [
                    [gd(2012, 1, 1), 82],
                    [gd(2012, 1, 2), 23],
                    [gd(2012, 1, 3), 66],
                    [gd(2012, 1, 4), 9],
                    [gd(2012, 1, 5), 119],
                    [gd(2012, 1, 6), 6],
                    [gd(2012, 1, 7), 9]
                ];
                $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
                    data1, data2
                ], {
                    series: {
                        lines: {
                            show: false,
                            fill: true
                        },
                        splines: {
                            show: true,
                            tension: 0.4,
                            lineWidth: 1,
                            fill: 0.4
                        },
                        points: {
                            radius: 0,
                            show: true
                        },
                        shadowSize: 2
                    },
                    grid: {
                        verticalLines: true,
                        hoverable: true,
                        clickable: true,
                        tickColor: "#d5d5d5",
                        borderWidth: 1,
                        color: '#fff'
                    },
                    colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
                    xaxis: {
                        tickColor: "rgba(51, 51, 51, 0.06)",
                        mode: "time",
                        tickSize: [1, "day"],
                        //tickLength: 10,
                        axisLabel: "Date",
                        axisLabelUseCanvas: true,
                        axisLabelFontSizePixels: 12,
                        axisLabelFontFamily: 'Verdana, Arial',
                        axisLabelPadding: 10
                    },
                    yaxis: {
                        ticks: 8,
                        tickColor: "rgba(51, 51, 51, 0.06)",
                    },
                    tooltip: false
                });

                function gd(year, month, day) {
                    return new Date(year, month - 1, day).getTime();
                }
            });
        </script>
        <!-- /Flot -->

        <!-- JQVMap -->
        <script>
            $(document).ready(function () {
                $('#world-map-gdp').vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#666666',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: ['#E6F2F0', '#149B7E'],
                    normalizeFunction: 'polynomial'
                });
            });
        </script>
        <!-- /JQVMap -->

        <!-- Skycons -->
        <script>
            $(document).ready(function () {
                var icons = new Skycons({
                    "color": "#73879C"
                }),
                        list = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;

                for (i = list.length; i--; )
                    icons.set(list[i], list[i]);

                icons.play();
            });
        </script>
        <!-- /Skycons -->

        <!-- Doughnut Chart -->
        <script>
            $(document).ready(function () {
                var options = {
                    legend: false,
                    responsive: false
                };

                new Chart(document.getElementById("canvas1"), {
                    type: 'doughnut',
                    tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                    data: {
                        labels: [
                            "Symbian",
                            "Blackberry",
                            "Other",
                            "Android",
                            "IOS"
                        ],
                        datasets: [{
                                data: [15, 20, 30, 10, 30],
                                backgroundColor: [
                                    "#BDC3C7",
                                    "#9B59B6",
                                    "#E74C3C",
                                    "#26B99A",
                                    "#3498DB"
                                ],
                                hoverBackgroundColor: [
                                    "#CFD4D8",
                                    "#B370CF",
                                    "#E95E4F",
                                    "#36CAAB",
                                    "#49A9EA"
                                ]
                            }]
                    },
                    options: options
                });
            });
        </script>
        <!-- /Doughnut Chart -->

        <!-- /for profile page graph -->
        <script>
            $(function () {
                Morris.Bar({
                    element: 'graph_bar',
                    data: [
                        {"period": "Jan", "Hours worked": 80},
                        {"period": "Feb", "Hours worked": 125},
                        {"period": "Mar", "Hours worked": 176},
                        {"period": "Apr", "Hours worked": 224},
                        {"period": "May", "Hours worked": 265},
                        {"period": "Jun", "Hours worked": 314},
                        {"period": "Jul", "Hours worked": 347},
                        {"period": "Aug", "Hours worked": 287},
                        {"period": "Sep", "Hours worked": 240},
                        {"period": "Oct", "Hours worked": 211}
                    ],
                    xkey: 'period',
                    hideHover: 'auto',
                    barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
                    ykeys: ['Hours worked', 'sorned'],
                    labels: ['Hours worked', 'SORN'],
                    xLabelAngle: 60,
                    resize: true
                });

                $MENU_TOGGLE.on('click', function () {
                    $(window).resize();
                });
            });
        </script>
        <!-- bootstrap-daterangepicker -->
        <script>
            $(document).ready(function () {

                var cb = function (start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                };

                var optionSet1 = {
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment(),
                    minDate: '01/01/2012',
                    maxDate: '12/31/2015',
                    dateLimit: {
                        days: 60
                    },
                    showDropdowns: true,
                    showWeekNumbers: true,
                    timePicker: false,
                    timePickerIncrement: 1,
                    timePicker12Hour: true,
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    opens: 'left',
                    buttonClasses: ['btn btn-default'],
                    applyClass: 'btn-small btn-primary',
                    cancelClass: 'btn-small',
                    format: 'MM/DD/YYYY',
                    separator: ' to ',
                    locale: {
                        applyLabel: 'Submit',
                        cancelLabel: 'Clear',
                        fromLabel: 'From',
                        toLabel: 'To',
                        customRangeLabel: 'Custom',
                        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        firstDay: 1
                    }
                };
                $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
                $('#reportrange').daterangepicker(optionSet1, cb);
                $('#reportrange').on('show.daterangepicker', function () {
                    console.log("show event fired");
                });
                $('#reportrange').on('hide.daterangepicker', function () {
                    console.log("hide event fired");
                });
                $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                    console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
                });
                $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                    console.log("cancel event fired");
                });
                $('#options1').click(function () {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
                });
                $('#options2').click(function () {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
                });
                $('#destroy').click(function () {
                    $('#reportrange').data('daterangepicker').remove();
                });
            });
        </script>
        <!-- /bootstrap-daterangepicker -->

        <!-- gauge.js -->
        <script>
            var opts = {
                lines: 12,
                angle: 0,
                lineWidth: 0.4,
                pointer: {
                    length: 0.75,
                    strokeWidth: 0.042,
                    color: '#1D212A'
                },
                limitMax: 'false',
                colorStart: '#1ABC9C',
                colorStop: '#1ABC9C',
                strokeColor: '#F0F3F3',
                generateGradient: true
            };
            var target = document.getElementById('foo'),
                    gauge = new Gauge(target).setOptions(opts);

            gauge.maxValue = 6000;
            gauge.animationSpeed = 32;
            gauge.set(3200);
            gauge.setTextField(document.getElementById("gauge-text"));
        </script>
        <!-- /gauge.js -->
    </body>
</html>

