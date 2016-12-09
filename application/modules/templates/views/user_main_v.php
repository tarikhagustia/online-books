<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | The Ultimate Multi-purpose Bootstrap Admin Dashboard Theme | Theme #3 | Blank Page</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="#1 selling multi-purpose bootstrap admin theme sold in themeforest marketplace packed with angularjs, material design, rtl support with over thausands of templates and ui elements and plugins to power any type of web applications including saas and admin dashboards. Preview page of Theme #3 for "
            name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/vendors/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/vendors/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url() ?>assets/vendors/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url() ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url() ?>assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url() ?>assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-md">
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        <div class="page-header-top">
                            <div class="container">
                                <!-- BEGIN LOGO -->
                                <div class="page-logo">
                                    <a href="index.html">
                                        <img src="<?php echo base_url() ?>assets/layouts/layout3/img/logo-default.jpg" alt="logo" class="logo-default">
                                    </a>
                                </div>
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                    <ul class="nav navbar-nav pull-right">
                                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                                        <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                                        <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->

                                        <!-- END NOTIFICATION DROPDOWN -->
                                        <!-- BEGIN TODO DROPDOWN -->


                                        <!-- END INBOX DROPDOWN -->
                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                        <li class="dropdown dropdown-user dropdown-dark">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <img alt="" class="img-circle" src="<?php echo base_url() ?>assets/layouts/layout3/img/avatar9.jpg">
                                                <span class="username username-hide-mobile"><?php echo $this->session->full_name; ?></span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="<?php echo base_url('logout') ?>">
                                                        <i class="icon-key"></i> Log Out </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- END USER LOGIN DROPDOWN -->
                                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                        <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                            <span class="sr-only">Toggle Quick Sidebar</span>
                                            <i class="icon-logout"></i>
                                        </li>
                                        <!-- END QUICK SIDEBAR TOGGLER -->
                                    </ul>
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu">
                            <div class="container">
                                <!-- BEGIN HEADER SEARCH BOX -->
                                <form class="search-form" action="page_general_search.html" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="query">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END HEADER SEARCH BOX -->
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                <div class="hor-menu  ">
                                    <ul class="nav navbar-nav">
                                        <li class="menu-dropdown classic-menu-dropdown ">
                                            <a href="javascript:;"> Home
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li class=" ">
                                                    <a href="index.html" class="nav-link  ">
                                                        <i class="icon-bar-chart"></i> Default Dashboard
                                                        <span class="badge badge-success">1</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="dashboard_2.html" class="nav-link  ">
                                                        <i class="icon-bulb"></i> Dashboard 2 </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="dashboard_3.html" class="nav-link  ">
                                                        <i class="icon-graph"></i> Dashboard 3
                                                        <span class="badge badge-danger">3</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-dropdown mega-menu-dropdown  ">
                                            <a href="javascript:;"> Kategori Buku
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu" style="min-width: 710px">
                                                <li>
                                                    <div class="mega-menu-content">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <ul class="mega-menu-submenu">
                                                                    <li>
                                                                        <a href="ui_colors.html"> Color Library </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_general.html"> General Components </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_buttons.html"> Buttons </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_buttons_spinner.html"> Spinner Buttons </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_confirmations.html"> Popover Confirmations </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_sweetalert.html"> Bootstrap Sweet Alerts </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_icons.html"> Font Icons </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_socicons.html"> Social Icons </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_typography.html"> Typography </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_tabs_accordions_navs.html"> Tabs, Accordions & Navs </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_tree.html"> Tree View </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="maps_google.html"> Google Maps </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <ul class="mega-menu-submenu">
                                                                    <li>
                                                                        <a href="maps_vector.html"> Vector Maps </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_timeline.html"> Timeline 1 </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_timeline_2.html"> Timeline 2 </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_timeline_horizontal.html"> Horizontal Timeline </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_page_progress_style_1.html"> Page Progress Bar - Flash </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_page_progress_style_2.html"> Page Progress Bar - Big Counter </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_blockui.html"> Block UI </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_bootstrap_growl.html"> Bootstrap Growl Notifications </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_notific8.html"> Notific8 Notifications </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_toastr.html"> Toastr Notifications </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_bootbox.html"> Bootbox Dialogs </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <ul class="mega-menu-submenu">
                                                                    <li>
                                                                        <a href="ui_alerts_api.html"> Metronic Alerts API </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_session_timeout.html"> Session Timeout </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_idle_timeout.html"> User Idle Timeout </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_modals.html"> Modals </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_extended_modals.html"> Extended Modals </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_tiles.html"> Tiles </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_datepaginator.html"> Date Paginator </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ui_nestable.html"> Nestable List </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-dropdown classic-menu-dropdown ">
                                            <a href="javascript:;"> Upload
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li class=" ">
                                                    <a href="dashboard_3.html" class="nav-link  ">
                                                        <i class="icon-graph"></i> Upload Buku
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                            <!-- BEGIN PAGE HEAD-->
                            <div class="page-head">
                                <div class="container">
                                    <!-- BEGIN PAGE TITLE -->
                                    <div class="page-title">
                                        <h1><?php echo $page_title ?></h1>
                                    </div>
                                    <!-- END PAGE TITLE -->
                                    <!-- BEGIN PAGE TOOLBAR -->
                                    <div class="page-toolbar">
                                        <!-- BEGIN THEME PANEL -->
                                        <div class="btn-group btn-theme-panel">
                                            <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-settings"></i>
                                            </a>
                                            <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <h3>THEME COLORS</h3>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <ul class="theme-colors">
                                                                    <li class="theme-color theme-color-default" data-theme="default">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Default</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-blue-hoki" data-theme="blue-hoki">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Blue Hoki</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-blue-steel" data-theme="blue-steel">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Blue Steel</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-yellow-orange" data-theme="yellow-orange">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Orange</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-yellow-crusta" data-theme="yellow-crusta">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Yellow Crusta</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <ul class="theme-colors">
                                                                    <li class="theme-color theme-color-green-haze" data-theme="green-haze">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Green Haze</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-red-sunglo" data-theme="red-sunglo">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Red Sunglo</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-red-intense" data-theme="red-intense">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Red Intense</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-purple-plum" data-theme="purple-plum">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Purple Plum</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-purple-studio" data-theme="purple-studio">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Purple Studio</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 seperator">
                                                        <h3>LAYOUT</h3>
                                                        <ul class="theme-settings">
                                                            <li> Layout
                                                                <select class="theme-setting theme-setting-layout form-control input-sm input-small input-inline tooltips" data-original-title="Change layout type" data-container="body" data-placement="left">
                                                                    <option value="boxed" selected="selected">Boxed</option>
                                                                    <option value="fluid">Fluid</option>
                                                                </select>
                                                            </li>
                                                            <li> Top Menu Style
                                                                <select class="theme-setting theme-setting-top-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change top menu dropdowns style" data-container="body"
                                                                    data-placement="left">
                                                                    <option value="dark" selected="selected">Dark</option>
                                                                    <option value="light">Light</option>
                                                                </select>
                                                            </li>
                                                            <li> Top Menu Mode
                                                                <select class="theme-setting theme-setting-top-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) top menu" data-container="body"
                                                                    data-placement="left">
                                                                    <option value="fixed">Fixed</option>
                                                                    <option value="not-fixed" selected="selected">Not Fixed</option>
                                                                </select>
                                                            </li>
                                                            <li> Mega Menu Style
                                                                <select class="theme-setting theme-setting-mega-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change mega menu dropdowns style" data-container="body"
                                                                    data-placement="left">
                                                                    <option value="dark" selected="selected">Dark</option>
                                                                    <option value="light">Light</option>
                                                                </select>
                                                            </li>
                                                            <li> Mega Menu Mode
                                                                <select class="theme-setting theme-setting-mega-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) mega menu" data-container="body"
                                                                    data-placement="left">
                                                                    <option value="fixed" selected="selected">Fixed</option>
                                                                    <option value="not-fixed">Not Fixed</option>
                                                                </select>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END THEME PANEL -->
                                    </div>
                                    <!-- END PAGE TOOLBAR -->
                                </div>
                            </div>
                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                    <!-- BEGIN PAGE BREADCRUMBS -->
                                    <ul class="page-breadcrumb breadcrumb">
                                        <li>
                                            <a href="index.html">Home</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <span>Layouts</span>
                                        </li>
                                    </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <?php echo $this->load->view($content); ?>
                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                        <!-- BEGIN QUICK SIDEBAR -->
                        <a href="javascript:;" class="page-quick-sidebar-toggler">
                            <i class="icon-login"></i>
                        </a>
                        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                            <div class="page-quick-sidebar">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                            <span class="badge badge-danger">2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                                            <span class="badge badge-success">7</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-bell"></i> Alerts </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-info"></i> Notifications </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-speech"></i> Activities </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-settings"></i> Settings </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                                            <h3 class="list-heading">Staff</h3>
                                            <ul class="media-list list-items">
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-success">8</span>
                                                    </div>
                                                    <img class="media-object" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar3.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Bob Nilson</h4>
                                                        <div class="media-heading-sub"> Project Manager </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar1.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Nick Larson</h4>
                                                        <div class="media-heading-sub"> Art Director </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-danger">3</span>
                                                    </div>
                                                    <img class="media-object" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar4.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Deon Hubert</h4>
                                                        <div class="media-heading-sub"> CTO </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar2.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Ella Wong</h4>
                                                        <div class="media-heading-sub"> CEO </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <h3 class="list-heading">Customers</h3>
                                            <ul class="media-list list-items">
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-warning">2</span>
                                                    </div>
                                                    <img class="media-object" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar6.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Lara Kunis</h4>
                                                        <div class="media-heading-sub"> CEO, Loop Inc </div>
                                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="label label-sm label-success">new</span>
                                                    </div>
                                                    <img class="media-object" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar7.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Ernie Kyllonen</h4>
                                                        <div class="media-heading-sub"> Project Manager,
                                                            <br> SmartBizz PTL </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar8.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Lisa Stone</h4>
                                                        <div class="media-heading-sub"> CTO, Keort Inc </div>
                                                        <div class="media-heading-small"> Last seen 13:10 PM </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-success">7</span>
                                                    </div>
                                                    <img class="media-object" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar9.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Deon Portalatin</h4>
                                                        <div class="media-heading-sub"> CFO, H&D LTD </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar10.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Irina Savikova</h4>
                                                        <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-danger">4</span>
                                                    </div>
                                                    <img class="media-object" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar11.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Maria Gomez</h4>
                                                        <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="page-quick-sidebar-item">
                                            <div class="page-quick-sidebar-chat-user">
                                                <div class="page-quick-sidebar-nav">
                                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                                        <i class="icon-arrow-left"></i>Back</a>
                                                </div>
                                                <div class="page-quick-sidebar-chat-user-messages">
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:15</span>
                                                            <span class="body"> When could you send me the report ? </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:15</span>
                                                            <span class="body"> Its almost done. I will be sending it shortly </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:15</span>
                                                            <span class="body"> Alright. Thanks! :) </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:16</span>
                                                            <span class="body"> You are most welcome. Sorry for the delay. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:17</span>
                                                            <span class="body"> No probs. Just take your time :) </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:40</span>
                                                            <span class="body"> Alright. I just emailed it to you. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:17</span>
                                                            <span class="body"> Great! Thanks. Will check it right away. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:40</span>
                                                            <span class="body"> Please let me know if you have any comment. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="<?php echo base_url() ?>assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:17</span>
                                                            <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-quick-sidebar-chat-user-form">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                                        <div class="input-group-btn">
                                                            <button type="button" class="btn green">
                                                                <i class="icon-paper-clip"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                                        <div class="page-quick-sidebar-alerts-list">
                                            <h3 class="list-heading">General</h3>
                                            <ul class="feeds list-items">
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 4 pending tasks.
                                                                    <span class="label label-sm label-warning "> Take action
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> Just now </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bar-chart-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-danger">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> New order received with
                                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 30 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                                    <span class="label label-sm label-warning"> Overdue </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 2 hours </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-default">
                                                                        <i class="fa fa-briefcase"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <h3 class="list-heading">System</h3>
                                            <ul class="feeds list-items">
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 4 pending tasks.
                                                                    <span class="label label-sm label-warning "> Take action
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> Just now </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-danger">
                                                                        <i class="fa fa-bar-chart-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-default">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> New order received with
                                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 30 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-warning">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                                    <span class="label label-sm label-default "> Overdue </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 2 hours </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-info">
                                                                        <i class="fa fa-briefcase"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                                        <div class="page-quick-sidebar-settings-list">
                                            <h3 class="list-heading">General Settings</h3>
                                            <ul class="list-items borderless">
                                                <li> Enable Notifications
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Allow Tracking
                                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Log Errors
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Auto Sumbit Issues
                                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Enable SMS Alerts
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                            </ul>
                                            <h3 class="list-heading">System Settings</h3>
                                            <ul class="list-items borderless">
                                                <li> Security Level
                                                    <select class="form-control input-inline input-sm input-small">
                                                        <option value="1">Normal</option>
                                                        <option value="2" selected>Medium</option>
                                                        <option value="e">High</option>
                                                    </select>
                                                </li>
                                                <li> Failed Email Attempts
                                                    <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                                <li> Secondary SMTP Port
                                                    <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                                <li> Notify On System Error
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Notify On SMTP Error
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                            </ul>
                                            <div class="inner-content">
                                                <button class="btn btn-success">
                                                    <i class="icon-settings"></i> Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END QUICK SIDEBAR -->
                    </div>
                    <!-- END CONTAINER -->
                </div>
            </div>
            <div class="page-wrapper-row">
                <div class="page-wrapper-bottom">
                    <!-- BEGIN FOOTER -->
                    <!-- BEGIN PRE-FOOTER -->
                    <!-- END PRE-FOOTER -->
                    <!-- BEGIN INNER FOOTER -->
                    <div class="page-footer">
                        <div class="container"> 2016 &copy; Metronic Theme By
                            <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                        </div>
                    </div>
                    <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
                    </div>
                    <!-- END INNER FOOTER -->
                    <!-- END FOOTER -->
                </div>
            </div>
        </div>
        <!-- BEGIN QUICK NAV -->
        <nav class="quick-nav">
            <a class="quick-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul>
                <li>
                    <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank" class="active">
                        <span>Purchase Metronic</span>
                        <i class="icon-basket"></i>
                    </a>
                </li>
                <li>
                    <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes" target="_blank">
                        <span>Customer Reviews</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href="http://keenthemes.com/showcast/" target="_blank">
                        <span>Showcase</span>
                        <i class="icon-user"></i>
                    </a>
                </li>
                <li>
                    <a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">
                        <span>Changelog</span>
                        <i class="icon-graph"></i>
                    </a>
                </li>
            </ul>
            <span aria-hidden="true" class="quick-nav-bg"></span>
        </nav>
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="<?php echo base_url() ?>assets/vendors/respond.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/excanvas.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/ie8.fix.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url() ?>assets/vendors/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/vendors/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/vendors/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/vendors/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/vendors/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/vendors//bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
