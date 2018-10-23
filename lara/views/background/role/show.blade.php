<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>登陆 2</title>
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
    
        <link rel="stylesheet" href="http://www.item.com/vendor/adminlte/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="http://www.item.com/vendor/adminlte/css/auth.css">
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">



<div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="dataTables_length" id="example1_length">
                      <label>
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">节目 </font>
                        </font>
                        <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                          <option value="10">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">10</font>
                            </font>
                          </option>
                          <option value="25">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">25</font>
                            </font>
                          </option>
                          <option value="50">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">50</font>
                            </font>
                          </option>
                          <option value="100">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">100</font>
                            </font>
                          </option>
                        </select>
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"> 项</font>
                        </font>
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div id="example1_filter" class="dataTables_filter">
                      <label>
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">搜索：</font>
                        </font>
                        <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 217px;">
                      <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">权限ID</font>
                      </font>
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">权限名称</font>
                      </font>
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">权限操作</font>
                      </font>
                    </th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach($manage as $article)
                <tr role="row" class="odd">
                  <td class="sorting_1">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">{{$article->role_id}}</font>
                    </font>
                  </td>
                  <td>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">{{$article->role_name}}</font>
                    </font>
                  </td>
                  <td>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">
                        <a href="{{url('FrontDesk/role/delete?id=')}}{{$article->role_id}}">删除</a>|
                        <a href="{{url('FrontDesk/role/modify?id=')}}{{$article->role_id}}">修改</a>
                      </font>
                    </font>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table></div></div>
              <div class="row">
                <div class="col-sm-5">
                  <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                  </div>
                </div>
                <div class="col-sm-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                      <ul class="pagination">
                        <li class="paginate_button previous disabled" id="example1_previous">
                          <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">以前</font>
                            </font>
                          </a>
                        </li>
                        <li class="paginate_button active">
                          <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">1</font>
                            </font>
                          </a>
                        </li>
                        <li class="paginate_button ">
                          <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">2</font>
                            </font>
                          </a>
                        </li>
                        <li class="paginate_button ">
                          <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">3</font>
                            </font>
                          </a>
                        </li>
                        <li class="paginate_button ">
                          <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">4</font>
                            </font>
                          </a>
                        </li>
                        <li class="paginate_button ">
                          <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">五</font>
                            </font>
                          </a>
                        </li>
                        <li class="paginate_button ">
                          <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">6</font>
                            </font>
                          </a>
                        </li>
                        <li class="paginate_button next" id="example1_next">
                          <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">下一个</font>
                            </font>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>



<script src="http://www.item.com/vendor/adminlte/vendor/jquery/dist/jquery.min.js"></script>
<script src="http://www.item.com/vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js"></script>
<script src="http://www.item.com/vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Select2 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <!-- DataTables with bootstrap 3 renderer -->
    <script src="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>

    <!-- ChartJS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>

    <script src="http://www.item.com/vendor/adminlte/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    
</body>
</html>