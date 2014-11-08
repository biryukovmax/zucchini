<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Simple theme wp</title>
<meta name="description" content="">
<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() );?>/favicon.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() );?>/css/normalize.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() );?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() );?>/style.css">
<!--[if lt IE 9]>
        <script>
            var e = ("article,aside,figcaption,figure,footer,header,hgroup,nav,section,time").split(',');
            for (var i = 0; i < e.length; i++) {
                document.createElement(e[i]);
            }
        </script>
<![endif]-->
<?php wp_head(); ?>	
</head>
<body>
<div class="header-bg col-md-12"></div>
<div class="wrapper col-md-12">
	<!--.header-->
	<div class="header col-md-12">
		<a class="logo" href="/"></a>
		<h1>Blog name</h1>
		 <?php wp_nav_menu('menu=Main menu&menu_class=nav&container=&menu_id= '); ?>
	</div>
	<!--/.header-->
