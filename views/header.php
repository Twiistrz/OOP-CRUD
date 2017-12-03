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
    <link rel="icon" type="image/jpg" href="assets/img/logo.jpg">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <?php if ($filename === 'register' || $filename === 'login') { ?>
    <style type="text/css">
        html, body {
            background: url('assets/img/bg.jpg'), #777;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            background-blend-mode: multiply;
            background-size: cover;
            -o-background-size: cover;
            -moz-background-size: cover;
            -webkit-background-size: cover;
        }
        .wrapper { padding-top: 150px; }
        .wrapper .content > .row:first-child { margin: 0; }
        .copyright.text-gray { color: #ccc; }
    </style>
    <?php } ?>
</head>

<body>
