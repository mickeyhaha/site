<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>登录 | 汉富通后台</title>
	<link href="__PUBLIC__/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="__PUBLIC__/vendor/metronic-bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="__PUBLIC__/vendor/metronic-bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="__PUBLIC__/vendor/metronic-bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="__PUBLIC__/vendor/metronic-bootstrap/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="__PUBLIC__/vendor/metronic-bootstrap/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="__PUBLIC__/vendor/metronic-bootstrap/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="__PUBLIC__/vendor/metronic-bootstrap/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="__PUBLIC__/vendor/metronic-bootstrap/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="__PUBLIC__/vendor/metronic-bootstrap/css/login-soft.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="__PUBLIC__/vendor/metronic-bootstrap/image/favicon.ico" />
	
	<style type="text/css">
		#username{
			height: 34px;
			width: 230px;
		}
		#password{
			height: 34px;
			width: 230px;
		}
		#main-content{
			background-color: gray;
			margin-top: 140px;
			opacity: 0.6;
			position: relative;
			left: 355px;
			padding-bottom: 0px;
		}
		.checkbox{
			margin-left: 20px;
			padding-top: 2px;
		}
		body{
			width: 100%;
			height: 100%;
			background-color: gray;
			background-image: url('__PUBLIC__/Images/login-bg.jpg');
			background-repeat: no-repeat;
			background-position: center;
		}
		#coperight-div{
			position: fixed;
			bottom: 8px;
			width: 100%;
			text-align: center;
		}
		.form-actions{
			margin-top: 40px;
		}
	</style>
</head>
<body class="login">
	<div class="content" id="main-content">
	  	<!-- BEGIN LOGIN FORM -->
	  	<form class="form-vertical login-form" method="post" action="__APP__/Index/login">
	  		<h3 class="form-title">系统登录</h3>
	  		<div class="alert alert-error hide">
	  			<button class="close" data-dismiss="alert"></button>
	  			<span></span>
	  		</div>
	  		<div class="control-group">
	  			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
	  			<label class="control-label visible-ie8 visible-ie9">Username</label>
	  			<div class="controls">
	  				<div class="input-icon left">
	  					<i class="icon-user"></i>
	  					<input class="m-wrap placeholder-no-fix" id="username" type="text" placeholder="Username" name="username" value="<?php echo ($remember); ?>"/>
	  				</div>
	  			</div>
	  		</div>
	  		<div class="control-group">
	  			<label class="control-label visible-ie8 visible-ie9">Password</label>
	  			<div class="controls">
	  				<div class="input-icon left">
	  					<i class="icon-lock"></i>
	  					<input class="m-wrap placeholder-no-fix" id="password" type="password" placeholder="Password" name="password"/>
	  				</div>
	  			</div>
	  		</div>
	  		<div class="form-actions">
	  			<label class="checkbox">
	  				<input type="checkbox" name="remember" value="1" <?php echo ($remember_me); ?>/> 记住我哦
	  			</label>
	  			<button type="submit" class="btn blue pull-right">
	  			Login <i class="m-icon-swapright m-icon-white"></i>
	  			</button>            
	  		</div>
	  	</form>
	  	<!-- END LOGIN FORM -->  
  	</div>

  	<div id="coperight-div" class="copyright">
		<p>2013 &copy; Metronic - Admin Dashboard Template.</p>
	</div>







	<!-- BEGIN CORE PLUGINS -->
	<script src="__PUBLIC__/vendor/metronic-bootstrap/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="__PUBLIC__/vendor/metronic-bootstrap/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<!--[if lt IE 9]>
	<script src="__PUBLIC__/vendor/metronic-bootstrap/js/excanvas.min.js"></script>
	<script src="__PUBLIC__/vendor/metronic-bootstrap/js/respond.min.js"></script>  
	<![endif]-->   
	<script src="__PUBLIC__/vendor/metronic-bootstrap/js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="__PUBLIC__/vendor/metronic-bootstrap/js/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="__PUBLIC__/vendor/metronic-bootstrap/js/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="__PUBLIC__/vendor/metronic-bootstrap/js/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="__PUBLIC__/vendor/metronic-bootstrap/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="__PUBLIC__/vendor/metronic-bootstrap/js/jquery.backstretch.min.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="__PUBLIC__/vendor/metronic-bootstrap/js/app.js" type="text/javascript"></script>
	<script src="__PUBLIC__/vendor/metronic-bootstrap/js/login-soft.js" type="text/javascript"></script>      
	<!-- END PAGE LEVEL SCRIPTS --> 
	<script>
		jQuery(document).ready(function() {     
		  	App.init();
		  	Login.init();
		});
	</script>
	<script type="text/javascript">  
		var _gaq = _gaq || [];  
		_gaq.push(['_setAccount', 'UA-37564768-1']);  
		_gaq.push(['_setDomainName', 'keenthemes.com']);  
		_gaq.push(['_setAllowLinker', true]);  
		_gaq.push(['_trackPageview']);  
		(function() {    
			var ga = document.createElement('script'); 
			ga.type = 'text/javascript'; ga.async = true;    
			ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
			var s = document.getElementsByTagName('script')[0]; 
			s.parentNode.insertBefore(ga, s);  
		})();
	</script>


	<!--[if lte IE 9]>
	<script src="__PUBLIC__/vendor/bootstrap/js/respond.min.js"></script>
	<script src="__PUBLIC__/vendor/bootstrap/js/html5shiv.js"></script>
	<![endif]-->
	<!-- <script src="http://libs.baidu.com/jquery/1.10.2/jquery.js"></script> -->
	<script src="__PUBLIC__/vendor/bootstrap/js/jquery-1.9.1.js"></script>
	<script src="__PUBLIC__/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
		});
	</script>

</body>
</html>