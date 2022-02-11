<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>SISTEMA::ACCESO JAZMIN </title>

	<link href="PUBLIC/img/favicon.144x144.png" rel="apple-touch-icon" type="PUBLIC/image/png" sizes="144x144">
	<link href="PUBLIC/img/favicon.114x114.png" rel="apple-touch-icon" type="PUBLIC/image/png" sizes="114x114">
	<link href="PUBLIC/img/favicon.72x72.png" rel="apple-touch-icon" type="PUBLIC/image/png" sizes="72x72">
	<link href="PUBLIC/img/favicon.57x57.png" rel="apple-touch-icon" type="PUBLIC/image/png">
	<link href="PUBLIC/img/favicon.png" rel="icon" type="image/png">
	<link href="PUBLIC/img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="PUBLIC/css/separate/pages/login.min.PUBLIC/css">
    <link rel="stylesheet" href="PUBLIC/css/lib/font-awesome/font-awesome.min.PUBLIC/css">
    <link rel="stylesheet" href="PUBLIC/css/lib/bootstrap/bootstrap.min.PUBLIC/css">
    <link rel="stylesheet" href="PUBLIC/css/main.PUBLIC/css">
</head>
<body>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box">
                    <div class="sign-avatar">
                        <img src="img/avatar-sign.png" alt="">
                    </div>
                    <header class="sign-title">Sign In</header>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-Mail or Phone"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in"/>
                            <label for="signed-in">Keep me signed in</label>
                        </div>
                        <div class="float-right reset">
                            <a href="reset-password.html">Reset Password</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-rounded">Sign in</button>
                    <p class="sign-note">New to our website? <a href="sign-up.html">Sign up</a></p>
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </form>
            </div>
        </div>
    </div><!--.page-center-->


<script src="PUBLIC/js/lib/jquery/jquery.min.PUBLIC/js"></script>
<script src="PUBLIC/js/lib/jquery/jquery.min.PUBLIC/js"></script>
<script src="PUBLIC/js/lib/jquery/jquery.min.PUBLIC/js"></script>
<script src="PUBLIC/js/lib/tether/tether.min.PUBLIC/js"></script>
<script src="PUBLIC/js/lib/bootstrap/bootstrap.min.PUBLIC/js"></script>
<script src="PUBLIC/js/plugins.PUBLIC/js"></script>
    <script type="text/javascript" src="PUBLICjs/lib/match-height/jquery.matchHeight.min.PUBLIC/js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
<script src="PUBLIC/js/app.PUBLIC/js"></script>
</body>
</html>