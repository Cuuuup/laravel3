@extends('adminlte::page')
@section('content')

<form action="{{url('FrontDesk/administrators/modify_to')}}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
    @foreach($manage as $article)
    <input type="hidden" name="id" value="{{$article->admin_id}}">
  <div class="form-group">
    <label>
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">管理员名称</font>
      </font>
    </label>
    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
      <span class="selection">
        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
          <ul class="select2-selection__rendered">
            <li class="select2-search select2-search--inline">
              <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" style="width: 602.2px;" style="width:100px;" name="admin_name" value="{{$article->admin_name}}">
            </li>
          </ul>
        </span>
      </span>
    </span>
  </div>
  <div class="form-group">
    <label>
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">管理员密码</font>
      </font>
    </label>
    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
      <span class="selection">
        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
          <ul class="select2-selection__rendered">
            <li class="select2-search select2-search--inline">
              <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" style="width: 602.2px;" style="width:100px;" name="admin_password" value="{{$article->admin_password}}">
            </li>
          </ul>
        </span>
      </span>
    </span>
  </div>
  <div class="form-group">
    <label>
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">管理员邮箱</font>
      </font>
    </label>
    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
      <span class="selection">
        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
          <ul class="select2-selection__rendered">
            <li class="select2-search select2-search--inline">
              <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" style="width: 602.2px;" style="width:100px;" name="admin_email" value="{{$article->admin_email}}">
            </li>
          </ul>
        </span>
      </span>
    </span>
  </div>
  <div class="form-group">
    <label>
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">管理员电话</font>
      </font>
    </label>
    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
      <span class="selection">
        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
          <ul class="select2-selection__rendered">
            <li class="select2-search select2-search--inline">
              <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" style="width: 602.2px;" style="width:100px;" name="admin_phone" value="{{$article->admin_phone}}">
            </li>
          </ul>
        </span>
      </span>
    </span>
  </div>
  @endforeach
  <div class="form-group">
    <label>
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">管理员角色</font>
      </font>
    </label>
    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
      <span class="selection">
        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
          <ul class="select2-selection__rendered">
            <li class="select2-search select2-search--inline">
             <select class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" style="width: 602.2px;" style="width:100px;" name="role_id">
                    <option value="default">&ndash; 选择角色 &ndash;</option>
                    @foreach($role as $article)
                    <option value="{{$article->role_id}}">{{$article->role_name}}</option>
                    @endforeach
            </select>

            </li>
          </ul>
        </span>
      </span>
    </span>
  </div>
  <button class="btn btn-block btn-primary btn-lg" style="width:100px;">修改</button>
</form>
@endsection