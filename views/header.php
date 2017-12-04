<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="author" content="Emmanuel See Te">
    <meta name="description" content="Simple PHP OOP CRUD with User Authentication.">
	<title>PHP OOP CRUD</title>
    <link rel="icon" type="image/jpg" href="<?=$url;?>/assets/img/logo.jpg">
    <link href="<?=$url;?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=$url;?>/assets/css/animate.min.css" rel="stylesheet"/>
    <link href="<?=$url;?>/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
    <link href="<?=$url;?>/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <style type="text/css">
        body.login-register {
            background: url('<?=$url;?>/assets/img/bg.jpg'), #777;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            background-blend-mode: multiply;
            background-size: cover;
            -o-background-size: cover;
            -moz-background-size: cover;
            -webkit-background-size: cover;
        }
        .wrapper.login-register { padding-top: 150px; }
        .wrapper.login-register .content > .row:first-child { margin: 0; }
        .wrapper.login-register .copyright.text-gray { color: #ccc; }
    </style>
</head>

<body <?php if (!$user->isLoggedIn()) echo 'class="login-register"';?>>
