<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Cleaning | Bonfinitics Makos </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once 'top-scripts.php';?> 
</head>
<body>

    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.php"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <!-- <li>
                            <a class="has-arrow active" href="index.php">
                                    <span class="educate-icon educate-home icon-wrap"></span>
                                    <span class="mini-click-non">Dashboard</span>
                            </a>
                            <a title="Landing Page" href="index.php" aria-expanded="false"><span class="educate-icon educate-home icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                        </li> -->
                        <li>
                            <a title="Upcoming Events" href="index.php" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Events</span></a>
                        </li>
                        <li>
                            <a title="Attendance" href="attendance.php" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Attendance</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="department-list.php" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Departments</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Departments List" href="department-list.php"><span class="mini-sub-pro">Departments List</span></a></li>
                                <li><a title="Add Departments" href="add-department.php"><span class="mini-sub-pro">Add Departments</span></a></li>
                                <!-- <li><a title="Edit Departments" href="edit-department.php"><span class="mini-sub-pro">Edit Departments</span></a></li> -->
                            </ul>
                        </li>
                        <li> 
                            
                            <a class="has-arrow" href="professor-list.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professors</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="professor-list.php"><span class="mini-sub-pro">Professors List</span></a></li>
                                <li><a title="Add Professor" href="add-professor.php"><span class="mini-sub-pro">Add Professor</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="subject-list.php" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Subjects</span></a>
                            <!-- <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="subject-list.php"><span class="mini-sub-pro">Subjects List</span></a></li> 
                                <li><a title="Add Courses" href="add-subject.php"><span class="mini-sub-pro">Add Subject</span></a></li>
                            </ul>  -->
                        </li>
                        <li>
                            <a href="student-list.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Students</span></a>
                            <!-- <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="student-list.php"><span class="mini-sub-pro">Students List</span></a></li> 
                                <li><a title="Add Students" href="add-student.php"><span class="mini-sub-pro">Add Student</span></a></li> 
                            </ul> -->
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Library</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="library-assets.php"><span class="mini-sub-pro">Library Assets</span></a></li>
                                <li><a title="Add Library" href="add-library-assets.php"><span class="mini-sub-pro">Add Library Asset</span></a></li>
                                <!-- <li><a title="Edit Library" href="edit-library-assets.html"><span class="mini-sub-pro">Edit Library Asset</span></a></li> -->
                            </ul>
                        </li>
                        <li >
                            <a class="has-arrow" href="bus-route" aria-expanded="false"><i class="fa fa-bus"></i></span> <span class="mini-click-non">Transports</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Bus Route" href="bus-route.php"><span class="mini-sub-pro">Bus Route</span></a></li>
                                <li><a title="Hostel-out" href="hostel-out.php"><span class="mini-sub-pro">Hostel-out</span></a></li>
                                <!-- <li><a title="Request" href="request.php"><span class="mini-sub-pro">Request</span></a></li> -->
                                <li><a title="Driver DB" href="Driver-DB.php"><span class="mini-sub-pro">Driver-DB</span></a></li>

                            </ul>
                        </li>
                        <li >
                            <a class="has-arrow" href="bus-route" aria-expanded="false"><i class='fas fa-home'></i></span><span class="mini-click-non">Hostel</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Hostel View" href="hostel-view.php"><span class="mini-sub-pro">Hostel View</span></a></li>
                                <li><a title="Maintenance" href="Maintenance.php"><span class="mini-sub-pro">Maintenance</span></a></li>
                                <li class="active">
                                    <a class="has-arrow" href="house-keeping" aria-expanded="false"><span class="educate-icon educate-form icon-wrap"></span><span class="mini-click-non">House Keep</span></a>
                                    <ul class="submenu-angle" aria-expanded="false">
                                        <li><a title="Add Cleaning" href="add-cleaning.php"><span class="mini-sub-pro">Add Cleaning</span></a></li>
                                        <li><a title="View Cleaning" href="view-cleaning.php"><span class="mini-sub-pro">View Cleaning</span></a></li>
                                        <li><a title="Edit Cleaning" href="edit-cleaning.php"><span class="mini-sub-pro">Edit Cleaning</span></a></li>
                                    </ul>
                                </li>
                                <li><a title="Washing" href="washing.php"><span class="mini-sub-pro">Washing</span></a></li>
                                <!-- <li><a title="Students" href="students.php"><span class="mini-sub-pro">Students</span></a></li> -->
                                <li><a title="outing" href="outing.php"><span class="mini-sub-pro">Outing</span></a></li>
                                <li><a title="Mess" href="mess.php"><span class="mini-sub-pro">Mess</span></a></li>
                                <!-- <li><a title="Parents Profile" href="parents-profile.php"><span class="mini-sub-pro">Parents Profile</span></a></li>
                                <li><a title="Complaints" href="complaints.php"><span class="mini-sub-pro">Complaints</span></a></li> -->


                            </ul>
                        </li>
                        <!-- <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <li><a title="Login" href="login.php"><span class="mini-sub-pro">Login</span></a></li>
                                <li><a title="Register" href="register.php"><span class="mini-sub-pro">Register</span></a></li>
                                <li><a title="Lock" href="lock.php"><span class="mini-sub-pro">Lock</span></a></li>
                                <li><a title="Password Recovery" href="password-recovery.php"><span class="mini-sub-pro">Password Recovery</span></a></li>
                                <li><a title="404 Page" href="404.php"><span class="mini-sub-pro">404 Page</span></a></li>
                                <li><a title="500 Page" href="500.php"><span class="mini-sub-pro">500 Page</span></a></li>
                            </ul> -->
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <!-- logo area starts -->
            <?php require_once 'logo.php';?> 
        <!-- logo area ends  -->

        <div class="header-advance-area">
            <!-- header top area starts -->
                <?php require_once 'top-nav.php';?> 
            <!-- header top area ends --> 

            <!-- Mobile Menu start -->
                <?php require_once 'mobile-nav.php';?> 
            <!-- Mobile Menu end -->

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add Cleaning</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Old Breadcome
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <div class="row">
                                                    <div class="col-xs-11 col-sm-8 col-md-8 col-lg-8">
                                                        <input type="text" placeholder="Search..." class="search-int form-control" style="padding-right: 2px;
                                                            padding-left: 2px;
                                                            margin-right: 0px;
                                                            width: 156px;
                                                        ">
                                                        <a href="#"><i class="fa fa-search"></i></a>
                                                    </div><br class="hidden-sm hidden-md hidden-lg"><br class="hidden-sm hidden-md hidden-lg">
                                                    <div class=" col-sm-offset-2 col-md-offset-2 col-lg-offset-2 col-xs-10 col-sm-2 col-nd-2 col-lg-2" >
                                                        <input class="search-int form-control" type="submit" name="search">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add Library Assets</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
        <!-- Single pro tab review Start-->
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>House Keeping</h4>
                            <form>
                                <div class="asset-inner">
                                    <table>
                                        <tr>
                                            <th>Room No</th>
                                            <th>Status</th>
                                            <th>Name</th>
                                            <th>Rating</th>
                                                                                   
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="roomno"></td>
                                            <td><input type="text" name="status"></td>
                                            <td><input type="text" name="cleaning_name"></td>
                                            <td><input type="text" name="cleaning_rate"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"><a href="#" class="btn btn-primary waves-effect waves-light">Submit</a></td>
                                        </tr>                                        
                                    </table>
                                </div>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
        ============================================ -->
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/masking-active.js"></script>
    <!-- datepicker JS
        ============================================ -->
    <script src="js/datepicker/jquery-ui.min.js"></script>
    <script src="js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
        ============================================ -->
    <!-- <script src="js/form-validation/jquery.form.min.js"></script> -->
    <!-- <script src="js/form-validation/jquery.validate.min.js"></script> -->
    <!-- <script src="js/form-validation/form-active.js"></script> -->
    <!-- dropzone JS
        ============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!-- tab JS
        ============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main1.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <!-- <script src="js/tawk-chat.js"></script> -->
</body>

</html>