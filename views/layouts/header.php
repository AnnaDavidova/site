<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="./../template/ico/favicon.ico">

    <title>MyHouse</title>

    <!-- Bootstrap core CSS -->
    <link href="./../template/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./../template/css/style.css" rel="stylesheet">
    <link href="./../template/css/font-awesome.min.css" rel="stylesheet">
    <link href="./../template/js/fancybox/jquery.fancybox.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#login-trigger').click(function(){
                $(this).next('#login-content').slideToggle();
                $(this).toggleClass('active');

                if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
                else $(this).find('span').html('&#x25BC;')
            })
        });
    </script>
</head>

<body data-spy="scroll" data-offset="0" data-target="#theMenu">


<!-- Menu -->
<nav class="menu" id="theMenu">
    <div class="menu-wrap">
        <h1 class="logo"><a href="/">DSGN NYC</a></h1>
        <i class="fa fa-times menu-close"></i>
        <a href="index.php" class="smoothScroll">Home</a>
        <a href="../about.php" class="smoothScroll">About</a>
        <a href="../portfolio.php" class="smoothScroll">Portfolio</a>
        <a href="../services.php" class="smoothScroll">Services</a>
        <a href="../contact.php" class="smoothScroll">Contact</a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-envelope"></i></a>
    </div>
    <!-- Menu button -->
    <div id="menuToggle"><i class="fa fa-bars"></i></div>
</nav>

