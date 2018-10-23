@extends('adminlte::page')
@section('content')

<form action="{{url('FrontDesk/role/add_to')}}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label>
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">角色名称</font>
      </font>
    </label>
    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 400px;">
      <span class="selection">
        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
          <ul class="select2-selection__rendered">
            <li class="select2-search select2-search--inline">
              <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" style="width:400px;" name="role_name">
            </li>
          </ul>
        </span>
      </span>
    </span>
  </div>
  <div class="form-group">
    <label>
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">角色权限</font>
      </font>
    </label>
    
    @foreach($manage as $article)
    <div class="checkbox">
      <label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="{{$article->menu_id}}" name="menu_id[]">
        {{$article->menu_name}}
      </label>
    </div>
    @endforeach
  </div>
  
  <button class="btn btn-block btn-primary btn-lg" style="width:80px;height:40px;">添加</button>
</form>
@endsection