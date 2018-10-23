
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>管理 2</title>
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
    
        <link rel="stylesheet" href="http://www.item.com/vendor/adminlte/css/auth.css">
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">

    <div class="register-box">
        <div class="register-logo">
            <a href="http://www.item.com/home"><b>管理</b>LTE</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">注册新会员</p>
            <form action="{{url('FrontDesk/log/registrationOperation')}}" method="post">


                    {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group has-feedback ">
                    <input type="text" name="admin_name" class="form-control" value=""
                           placeholder="全名">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback ">
                    <input type="email" name="admin_email" class="form-control" value="" placeholder="邮箱">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback ">
                    <input type="number" name="admin_phone" class="form-control" value="" placeholder="手机号">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback ">
                    <input type="password" name="admin_password" class="form-control" placeholder="密码">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback ">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="重新输入密码">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-flat">寄存器</button>
            </form>
            <div class="auth-links">
                <a href="{{url('FrontDesk/log/login')}}" class="text-center">我已经有会员资格了</a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->

<script src="http://www.item.com/vendor/adminlte/vendor/jquery/dist/jquery.min.js"></script>
<script src="http://www.item.com/vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js"></script>
<script src="http://www.item.com/vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Select2 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <!-- DataTables with bootstrap 3 renderer -->
    <script src="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>

    <!-- ChartJS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>

    
</body>
</html>
