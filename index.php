<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-header">
                        <div class="text-center">
                          <h3><i class="glyphicon glyphicon-lock fa-4x"></i></h3>
                          <h2 class="text-center">Change Password</h2>
                        </div>
                        <p class="<?=$messageClass?>"><?=$message?></p>
                        <div class="panel-body">
                          <form class="form">
                            <fieldset>
                              <div class="form-group">
                                <label for="username">Username (*)</label>
                                <input id="username" name="username" class="form-control" type="text" required="true">
                              </div>
                              <div class="form-group">
                                <label for="current-password">Current password (*)</label>
                                <input id="current-password" name="currentPassword" class="form-control" type="password" required="true">
                              </div>
                              <div class="form-group">
                                <label for="new-password">New password (*)</label>
                                <input id="new-password" name="newPassword" class="form-control" type="password" required="true">
                              </div>
                              <div class="form-group">
                                <label for="retype-new-password">Retype new password (*)</label>
                                <input id="retype-new-password" name="retypeNewPassword" class="form-control" type="password" required="true">
                              </div>
                              <div class="form-group">
                                <input class="btn btn-lg btn-primary btn-block" value="Change Password" type="submit">
                              </div>
                            </fieldset>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
