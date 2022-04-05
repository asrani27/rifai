<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/theme/docs/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
    @toastr_css
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>Rifai</h1>
        </div>
        <div class="login-box">
            <form class="login-form" method="POST" action="/login">
                @csrf
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                <div class="form-group">
                    <label class="control-label">USERNAME</label>
                    <input class="form-control" type="username" placeholder="Username" name="username" autofocus>
                </div>
                <div class="form-group">
                    <label class="control-label">PASSWORD</label>
                    <input class="form-control" type="password" placeholder="Password" name="password">
                </div>
                <div class="form-group btn-container">
                    <button type="submit" class="btn btn-primary btn-block"><i
                            class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="/theme/docs/js/jquery-3.3.1.min.js"></script>
    <script src="/theme/docs/js/popper.min.js"></script>
    <script src="/theme/docs/js/bootstrap.min.js"></script>
    <script src="/theme/docs/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="/theme/docs/js/plugins/pace.min.js"></script>

    <script type="text/javascript">
        // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
    @toastr_js
    @toastr_render
</body>

</html>