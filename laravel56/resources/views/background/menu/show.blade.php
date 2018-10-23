@extends('adminlte::page')
@section('content')

<div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
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
                                <font style="vertical-align: inherit;">权限路径</font>
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
                    @foreach($menu as $article)
                    <tr role="row" class="odd">
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$article->menu_id}}</font>
                            </font>
                        </td>
	                  <td>
	                    <font style="vertical-align: inherit;">
	                      <font style="vertical-align: inherit;">{{$article->menu_name}}</font>
	                    </font>
	                  </td>
	                  <td>
	                    <font style="vertical-align: inherit;">
	                      <font style="vertical-align: inherit;">{{$article->menu_url}}</font>
	                    </font>
	                  </td>
                  <td>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">
                        <a href="{{url('FrontDesk/menu/delete?id=')}}{{$article->menu_id}}">删除</a>&nbsp;&nbsp;|&nbsp;
                        <a href="{{url('FrontDesk/menu/modify?id=')}}{{$article->menu_id}}">修改</a>&nbsp;&nbsp;|&nbsp;
                        <a href="{{url('FrontDesk/menu/add')}}">添加</a>
                      </font>
                    </font>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table></div>

@endsection