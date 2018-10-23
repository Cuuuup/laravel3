@extends('adminlte::page')
@section('content')
<div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
    <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 217px;">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">管理员姓名</font>
                </font>
            </th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">管理员密码</font>
                </font>
            </th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">管理员邮箱</font>
                </font>
            </th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">管理员手机号</font>
                </font>
            </th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">管理员添加时间</font>
                </font>
            </th>
             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">冻结/解冻</font>
                            </font>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">操作</font>
                            </font>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($manage as $article)
                    <tr role="row" class="odd">
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$article->admin_name}}</font>
                            </font>
                        </td>
                  <td>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">{{$article->admin_password}}</font>
                    </font>
                  </td>
                  <td>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">{{$article->admin_email}}</font>
                    </font>
                  </td>
                  <td>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">{{$article->admin_phone}}</font>
                    </font>
                  </td>
                  <td>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">{{$article->admin_time}}</font>
                    </font>
                  </td>
                  <td>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            @if($article->is_freeze == 0)
                                <a href="{{url('FrontDesk/administrators/frozen?id=')}}{{$article->admin_id}}">解冻</a>
                            @endif
                            @if($article->is_freeze == 1)
                                <a href="{{url('FrontDesk/administrators/thaw?id=')}}{{$article->admin_id}}">冻结</a>
                            @endif
                        </font>
                    </font>
                  </td>
                  <td>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">
                        <a href="{{url('FrontDesk/administrators/delete?id=')}}{{$article->admin_id}}">删除</a>&nbsp;&nbsp;|&nbsp;
                        <a href="{{url('FrontDesk/administrators/modify?id=')}}{{$article->admin_id}}">修改</a>&nbsp;&nbsp;|&nbsp;
                        <a href="{{url('FrontDesk/administrators/add')}}">添加</a>
                      </font>
                    </font>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table></div>
@endsection