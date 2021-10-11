<!DOCTYPE html>
<html>

<head>
    <title>Meet</title>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  	<style type="text/css">
  		.login{
  			position: absolute;
		    display: table;
		    width: 100%;
		    height: 100%;
  		}

  		.login-container{
  			display: table-cell;
		    vertical-align: middle;
		    text-align: center;
		    font-size: 22px;
		    letter-spacing: 1px;
  		}
  	</style>
</head>

<body>
    <div id="login-wrapper">
        <div class="login">
            <div class="login-container">
            Tticket Tracking System
                <form method="post" action="{{ route('login') }}">
                	@csrf
                	<div>
                		<label>
                			帳號
                		</label>
                		<input type="text" name="account" required="">
                	</div>
                	<div>
                		<label>
                			密碼
                		</label>
                		<input type="password" name="password" required="">
                	</div>
                	@include('common.message')
                	<button type="submit" class="btn btn-primary">登入</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>