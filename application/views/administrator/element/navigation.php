<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="#" class="site_title"><span>Administrator</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a href="<?php echo base_url();?>index.php/c_utama/halaman_utama_administrator"><i class="fa fa-home"></i>Home</a></li>
                                <li><a><i class="fa fa-edit"></i>Data Kriteria<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo base_url();?>index.php/c_kriteria/data_kriteria">Data Kriteria</a>
                                        </li>
                                        <li><a href="<?php echo base_url();?>index.php/c_perbandingan_kriteria/perbandingan_kriteria">Data Perbandingan Kriteria</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i>Data Subkriteria<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo base_url();?>index.php/c_subkriteria/data_subkriteria/1">Data Subkriteria</a>
                                        </li>
                                        <li><a href="<?php echo base_url();?>index.php/c_perbandingan_subkriteria/perbandingan_subkriteria/1">Data Perbandingan Subkriteria</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i>Data Subkriteria 2<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo base_url();?>index.php/c_subkriteria_2/data_subkriteria/1">Data Subkriteria 2</a>
                                        </li>
                                        <li><a href="<?php echo base_url();?>index.php/c_perbandingan_subkriteria_2/perbandingan_subkriteria/1">Data Perbandingan Subkriteria 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url();?>index.php/c_utama/data_administrator"><i class="fa fa-user"></i>Data Administrator</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo base_url();?>assets/administrator/images/admin.png" alt="">Hi, admin
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="<?php echo base_url();?>index.php/c_utama/data_administrator">  Profile</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/c_login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->