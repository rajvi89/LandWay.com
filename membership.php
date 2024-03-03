<?php
    include("db/session.php");
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.startbootstrap.com/flex-admin-v1.2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jan 2016 18:21:46 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flex Admin - Responsive Admin Theme</title>

    
    <link href="css/plugins/pace/pace.css" rel="stylesheet">
    <script src="js/plugins/pace/pace.js"></script>

    
    <link href="css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    
    <link href="css/plugins/messenger/messenger.css" rel="stylesheet">
    <link href="css/plugins/messenger/messenger-theme-flat.css" rel="stylesheet">
    <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="css/plugins/morris/morris.css" rel="stylesheet">
    <link href="css/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="css/plugins/datatables/datatables.css" rel="stylesheet">

    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins.css" rel="stylesheet">

   
    <link href="css/demo.css" rel="stylesheet">

   

</head>

<body>

    <div id="wrapper">

        <!-- begin TOP NAVIGATION -->
        <nav class="navbar-top" role="navigation">

            <!-- begin BRAND HEADING -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".sidebar-collapse">
                    <i class="fa fa-bars"></i> Menu
                </button>
                <div class="navbar-brand">
                    <!-- <a href="#">
                        <img src="img/admin_logo.jpg" data-1x="img/flex-admin-logo@1x.png" data-2x="img/flex-admin-logo@2x.png" class="hisrc img-responsive" alt="">
                    </a> -->
                </div>
            </div>
            <!-- end BRAND HEADING -->

            <div class="nav-top">

                <!-- begin LEFT SIDE WIDGETS -->
                <ul class="nav navbar-left">
                    <li class="tooltip-sidebar-toggle">
                        <a href="#" id="sidebar-toggle" data-toggle="tooltip" data-placement="right" title="Sidebar Toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <!-- You may add more widgets here using <li> -->
                </ul>
                <!-- end LEFT SIDE WIDGETS -->

                <!-- begin MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->
                <ul class="nav navbar-right">

                           

                <!-- begin USER ACTIONS DROPDOWN --> 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="#">
                                        <?php echo "Welcome".$name; ?>
                                </a>
                            </li>

                                <a href="index.php">
                                    <i class="fa fa-sign-out"></i> Logout
                                    
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- end USER ACTIONS DROPDOWN -->

                </ul>
                <!-- /.nav -->
                <!-- end MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->

            </div>
            <!-- /.nav-top -->
        </nav>
        <!-- /.navbar-top -->
        <!-- end TOP NAVIGATION -->

        <!-- begin SIDE NAVIGATION -->
        <nav class="navbar-side" role="navigation">
            <div class="navbar-collapse sidebar-collapse collapse">
                <ul id="side" class="nav navbar-nav side-nav">
                    <!-- begin SIDE NAV USER PANEL -->
                    <li class="side-user hidden-xs">
                        <img class="img-circle" src="img/admin_logo.jpg" alt="">
                        <!-- <p class="welcome">
                            <i class="fa fa-key"></i> Logged in as
                        </p>
                        <p class="name tooltip-sidebar-logout">
                            John
                            <span class="last-name">Smith</span> <a style="color: inherit" class="logout_open" href="#logout" data-toggle="tooltip" data-placement="top" title="Logout"><i class="fa fa-sign-out"></i></a>
                        </p> -->
                        <div class="clearfix"></div>
                    </li>
                    
                    <li>
                        <a class="active" href="#"><!--index.html-->
                            <i class="fa fa-dashboard"></i> Dashboard
                        </a>
                    </li>
                    
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms">
                            <i class="fa fa-edit"></i> Forms <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="forms">
                            <li>
                                <a href="User_Registration_Form.php"><!--basic-form-elements.html-->
                                    <i class="fa fa-angle-double-right"></i> Registration
                                </a>
                            </li>
                            <li>
                                <a href="city_From.php"><!--advanced-form-elements.html -->
                                    <i class="fa fa-angle-double-right"></i> City From
                                </a>
                            </li>
                            <li>
                                <a href="location.php"><!--validation.html -->
                                    <i class="fa fa-angle-double-right"></i> Location
                                </a>
                            </li>
                            <li>
                                <a href="state.php"><!--wysiwyg-editor.html -->
                                    <i class="fa fa-angle-double-right"></i> State From
                                </a>
                            </li>
                            <li>
                                <a href="service.php"><!--dropzone-uploader.html -->
                                    <i class="fa fa-angle-double-right"></i> Service From
                                </a>
                            </li>
                            <li>
                                <a href="membership.php"><!--dropzone-uploader.html -->
                                    <i class="fa fa-angle-double-right"></i> Membership From
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#tables">
                            <i class="fa fa-table"></i> Tables <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="tables">
                            <li>
                                <a href="reg_table.php"> <!--basic-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Registration
                                </a>
                            </li>
                            <li>
                                <a href="search_bus.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Searchbus
                                </a>
                            </li>
                            <li>
                                <a href="search_hotel.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Searchhotel
                                </a>
                            </li>
                            <li>
                                <a href="master_tourgallary.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Tourgallary
                                </a>
                            </li>
                            <li>
                                <a href="master_coatchgallary.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Coatchgallary
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- end PAGES DROPDOWN -->
                </ul>
                <!-- /.side-nav -->
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <!-- /.navbar-side -->
        <!-- end SIDE NAVIGATION -->

        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                                


                <div class="row">
                    <div class="well">
                        <h1>User Registration Form</h1>
                    </div>
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                            <form class="form-horizontal" action="">
                                  <div class="form-group">
                                    <label class="control-label col-sm-4" for="email">Membership ID:</label>
                                    <div class="col-sm-8">
                                      <input type="email" class="form-control" id="email" placeholder="Membership_id">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-sm-4" for="pwd">Membership Name:</label>
                                    <div class="col-sm-8"> 
                                      <select class="sel" required="">
                                        <option value="silver">Silver</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Platinium">Platinium</option> 
                                    </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-sm-4" for="email">Price:</label>
                                    <div class="col-sm-8">
                                      <input type="email" class="form-control" id="email" placeholder="price">
                                    </div>
                                  </div>
                                 
                                  <div class="form-group"> 
                                    <div class="col-sm-offset-4 col-sm-10">
                                      <div class="checkbox">
                                        <label><input type="checkbox"> Remember me</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group"> 
                                    <div class="col-sm-offset-4 col-sm-10">
                                      <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                  </div>
                                </form>    
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE AREA -->

                <!-- begin DASHBOARD CIRCLE TILES -->
                <div class="row">
                    <div class="col-lg-2 col-sm-6">
                                            </div>
                    <div class="col-lg-2 col-sm-6">
                        
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        
                    </div>
                    <div class="col-lg-2 col-sm-6">
                    
                    </div>
                </div>
                <!-- end DASHBOARD CIRCLE TILES -->

                <div class="row">

                    <div class="col-lg-3">
                         
                    </div>

                    <div class="col-lg-9">
                        <div class="row">
                            
                            <div class="col-lg-3">
                                
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                
                            </div>
                        </div>
                        <div class="col-lg-12">
                                
                            
                        </div>
                            <!-- /.col-lg-12 -->

                    </div>
                </div>
            

            </div>
            <!-- /.page-content -->

        </div>
        <!-- /#page-wrapper -->
        <!-- end MAIN PAGE CONTENT -->

    </div>
    <!-- /#wrapper -->

    <!-- GLOBAL SCRIPTS -->
    <script src="js/jjquery.min.js"></script>
    <script src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/popupoverlay/jquery.popupoverlay.js"></script>
    <script src="js/plugins/popupoverlay/defaults.js"></script>
    <!-- Logout Notification Box -->
    <div id="logout">
        <div class="logout-message">
            <img class="img-circle img-logout" src="img/profile-pic.jpg" alt="">
            <!-- <h3>
                <i class="fa fa-sign-out text-green"></i> 
            </h3> -->
           <!--  <p>Select "Logout" below if you are ready<br> to end your current session.</p> -->
            <ul class="list-inline">
              
                <!-- <li>
                    <button class="logout_close btn btn-green">Cancel</button>
                </li> -->
            </ul>
        </div>
    </div>
    <!-- /#logout -->
    <!-- Logout Notification jQuery -->
    <script src="js/plugins/popupoverlay/logout.js"></script>
    <!-- HISRC Retina Images -->
    <script src="js/plugins/hisrc/hisrc.js"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->
    <!-- HubSpot Messenger -->
    <script src="js/plugins/messenger/messenger.min.js"></script>
    <script src="js/plugins/messenger/messenger-theme-flat.js"></script>
    <!-- Date Range Picker -->
    <script src="js/plugins/daterangepicker/moment.js"></script>
    <script src="js/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Morris Charts -->
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>
    <!-- Flot Charts -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <!-- Sparkline Charts -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- Moment.js -->
    <script src="js/plugins/moment/moment.min.js"></script>
    <!-- jQuery Vector Map -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/demo/map-demo-data.js"></script>
    <!-- Easy Pie Chart -->
    <script src="js/plugins/easypiechart/jquery.easypiechart.min.js"></script>
    <!-- DataTables -->
    <script src="js/plugins/datatables/jquery.dataTables.js"></script>
    <script src="js/plugins/datatables/datatables-bs3.js"></script>

    <!-- THEME SCRIPTS -->
    <script src="js/flex.js"></script>
    <script src="js/demo/dashboard-demo.js"></script>

</body>


<!-- Mirrored from themes.startbootstrap.com/flex-admin-v1.2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jan 2016 18:22:25 GMT -->
</html>
