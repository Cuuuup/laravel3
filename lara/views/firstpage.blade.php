
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>仪表板</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="http://www.item.com/vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://www.item.com/vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="http://www.item.com/vendor/adminlte/vendor/Ionicons/css/ionicons.min.css">

            <!-- Select2 -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="http://www.item.com/vendor/adminlte/dist/css/AdminLTE.min.css">

            <!-- DataTables with bootstrap 3 style -->
        <link rel="stylesheet" href="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css">
    
        <link rel="stylesheet"
          href="http://www.item.com/vendor/adminlte/dist/css/skins/skin-blue.min.css ">
            <link rel="stylesheet" href="/css/admin_custom.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini ">

    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
                        <!-- Logo -->
            <a href="http://www.item.com/home" class="logo">
                <!-- 小图标的工具条迷你50x50像素 -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- 普通状态和移动设备的标识 -->
                <span class="logo-lg"><b>管理</b>LTE</span>
            </a>

            <!-- 头部导航 -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">切换导航</span>
                </a>
                            <!-- 正确导航菜单 -->
                <div class="navbar-custom-menu">

                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{url('FrontDesk/show/unset')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-power-off"></i> 退出登陆
                            </a>
                            <form id="logout-form" action="{{url('FrontDesk/show/unset')}}" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

                <!-- 左列。包含标志和侧栏 -->
        <aside class="main-sidebar">

            <!-- 边栏:风格可以在sidebar.less中找到 -->
            <section class="sidebar">

                <!-- 侧边栏菜单 -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">主要导航</li>
                    <li class="">
                        <a href="http://www.item.com/admin/pages">
                            <i class="fa fa-fw fa-file "></i>
                            <span>Pages</span>
                            <span class="pull-right-container">
                                <span class="label label-success pull-right">4</span> 
                            </span>
                        </a>
                    </li>
                    <!-- @foreach($arr as $key => $val)
                    <li class="">
                        <a href="http://www.item.com/admin/pages">
                            <i class="fa fa-fw fa-file "></i>
                            <span>{{$val->menu_name}}</span>
                            <span class="pull-right-container">
                                <span class="label label-success pull-right">4</span> 
                            </span>
                        </a>
                    </li>
                    @endforeach -->
                            @foreach($arr as $key => $val)
                            <li class="">
                                <a href="#">
                                    <i class="fa fa-fw fa-circle-o text-aqua"></i>
                                    <span>{{$val->menu_name}}</span>
                                </a>
                            </li>
                            @endforeach
                    <li class="header">账号设定</li>
                    <li class="">
                        <a href="http://www.item.com/admin/settings">
                            <i class="fa fa-fw fa-user "></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="http://www.item.com/admin/settings">
                            <i class="fa fa-fw fa-lock "></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-fw fa-share "></i>
                            <span>Multilevel</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="#">
                                    <i class="fa fa-fw fa-circle-o "></i>
                                    <span>Level One</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-fw fa-circle-o "></i>
                                    <span>Level One</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="">
                                        <a href="#">
                                            <i class="fa fa-fw fa-circle-o "></i>
                                            <span>Level Two</span>
                                        </a>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="fa fa-fw fa-circle-o "></i>
                                            <span>Level Two</span>
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-left pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li class="">
                                                <a href="#">
                                                    <i class="fa fa-fw fa-circle-o "></i>
                                                    <span>Level Three</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <i class="fa fa-fw fa-circle-o "></i>
                                                    <span>Level Three</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#">
                                    <i class="fa fa-fw fa-circle-o "></i>
                                        <span>Level One</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="header">标签</li>
                    <li class="">
                        <a href="#">
                            <i class="fa fa-fw fa-circle-o text-red"></i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <i class="fa fa-fw fa-circle-o text-yellow"></i>
                            <span>Warning</span>
                         </a>
                   </li>
                    <li class="">
                        <a href="#">
                            <i class="fa fa-fw fa-circle-o text-aqua"></i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        
        <!-- 内容包装器。包含页面内容 -->
        <div class="content-wrapper">
            
            <!-- 内容页眉(页眉) -->
            <section class="content-header">
                    <h1>仪表板</h1>
            </section>

            <!-- 主要内容 -->
            <section class="content">

                    <p>欢迎来到这个美丽的管理面板。</p>

            </section>
            <!-- /.content -->
                    </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->

<script src="http://www.item.com/vendor/adminlte/vendor/jquery/dist/jquery.min.js"></script>
<script src="http://www.item.com/vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js"></script>
<script src="http://www.item.com/vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Select2 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <!-- 带引导程序3呈现程序的数据表 -->
    <script src="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>

    <!-- ChartJS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>

    <script src="http://www.item.com/vendor/adminlte/dist/js/adminlte.min.js"></script>
            <script> console.log('Hi!'); </script>

</body>
</html>
