@extends('adminlte::page')
@section('content')

<form action="{{url('FrontDesk/menu/modify_to')}}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="id" value="{{$id}}">
    @foreach($manage as $article)
  <div class="form-group">
    <label>
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">权限名称</font>
      </font>
    </label>
    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
      <span class="selection">
        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
          <ul class="select2-selection__rendered">
            <li class="select2-search select2-search--inline">
              <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" style="width: 602.2px;" style="width:100px;" name="menu_name" value="{{$article->menu_name}}">
            </li>
          </ul>
        </span>
      </span>
    </span>
  </div>
  <div class="form-group">
    <label>
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">权限</font>
      </font>
    </label>
    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;">
      <span class="selection">
        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
          <ul class="select2-selection__rendered">
            <li class="select2-search select2-search--inline">
              <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" style="width: 602.2px;" style="width:100px;" name="menu_url" value="{{$article->menu_url}}">
            </li>
          </ul>
        </span>
      </span>
    </span>
  </div>
  @endforeach
  <button class="btn btn-block btn-primary btn-lg" style="width:100px;">修改</button>
</form>
@endsection