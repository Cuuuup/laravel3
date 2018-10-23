<!DOCTYPE html>
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>登陆 2</title>

<!-- {{ URL::asset('/backstage/css/login.css') }} -->
<!--[if lt IE 9]>
<script src="{{ URL::asset('/backstage/js/html5shiv.js') }}"></script>
<![endif]-->

<link href="{{ URL::asset('/backstage/css/normalize.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('/backstage/css/jquery-ui.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('/backstage/css/jquery.idealforms.min.css') }}" rel="stylesheet" media="screen"/>

<style type="text/css">
body{font:normal 15px/1.5 Arial, Helvetica, Free Sans, sans-serif;color: #222;background:url(pattern.png);overflow-y:scroll;padding:60px 0 0 0;}
#my-form{width:755px;margin:0 auto;border:1px solid #ccc;padding:3em;border-radius:3px;box-shadow:0 0 2px rgba(0,0,0,.2);}
#comments{width:350px;height:100px;}
</style>

</head>
<body>


<div class="row">

  <div class="eightcol last">

    <!-- Begin Form -->

    <form id="my-form" action="{{url('FrontDesk/administrators/modify_to')}}" method="post">

                    {{ csrf_field() }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="hidden" name="id" value="{{$id}}">

          @foreach($manage as $article)
          <div><label>用户名:</label><input id="username" name="admin_name" type="text" value="{{$article->admin_name}}" /></div>
          <div><label>密码:</label><input id="pass" name="admin_password" type="password" value="{{$article->admin_password}}" /></div>
          <div><label>邮箱:</label><input id="email" name="admin_email" data-ideal="required email" type="email" value="{{$article->admin_email}}" /></div>
          <div><label>电话:</label><input id="pass" name="admin_phone" type="password" value="{{$article->admin_phone}}" /></div>
          <div><label>权限:</label>
                  <select id="states" name="role_id">
                    <!-- <option value="default">&ndash; 选择权限 &ndash;</option> -->
                    <option value="2">管理员</option>
                    <option value="1">超级管理员</option>
                  </select>
        </div>
        @endforeach
          <div><hr/></div>
          <div>
              <button type="submit">提交</button>
              <button id="reset" type="button">重置</button>
          </div>
    </form>

    <!-- End Form -->

  </div>

</div>


<script type="text/javascript" src="{{ URL::asset('/backstage/js/jquery-1.8.2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/backstage/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/backstage/js/jquery.idealforms.js') }}"></script>
<script type="text/javascript">
var options = {

	onFail: function(){
		alert( $myform.getInvalid().length +' invalid fields.' )
	},

	inputs: {
		'password': {
			filters: 'required pass',
		},
		
		
		
	}
	
};

var $myform = $('#my-form').idealforms(options).data('idealforms');

$('#reset').click(function(){
	$myform.reset().fresh().focusFirst()
});

$myform.focusFirst();
</script>
<div style="text-align:center;">

</div>
</body>
</html>