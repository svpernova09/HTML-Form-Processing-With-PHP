<?php
require '../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HTML Form Processing with PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../vendor/components/bootstrap-default/css/bootstrap.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <link href="../vendor/components/bootstrap-default/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="../vendor/components/bootstrap-default/js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="/examples/">HTML Form Processing with PHP</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="/examples/">Home</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">

    <h1>Code Exaples</h1>
    <div class="row-fluid marketing">
        <div class="span6">
            <h4><a href="/examples/01-Basic-HTML-Form/">01 - Basic HTML Form</a></h4>
            <p>The starting point. Very simple HTML form handled by PHP.</p>

            <h4><a href="/examples/02-Sanitizing-Data/">02 - Sanitizing Data</a></h4>
            <p>Sanitize your data to prevent any maliciousness your users may be up to.</p>

            <h4><a href="/examples/03-Validating-Data/">03 - Validating Data</a></h4>
            <p>Validate your data so it is in the form and type you are expecting.</p>

            <h4><a href="/examples/04-Ajax-Form-Handling/">04 - Ajax Form Handling</a></h4>
            <p>Using Ajax to handle forms...</p>
        </div>

        <div class="span6">
            <h4><a href="/examples/05-Creative-Human-Checking/">05 - Creative Human Checking</a></h4>
            <p>What does the cat say...</p>

            <h4>06 - Bad Ideas</h4>
            <p>Don't run this code</p>

            <h4><a href="/examples/07-Newsletter-Signup/">07 - Newsletter Signup</a></h4>
            <p>Making people give you their email...</p>

            <h4>08 - Bad Ideas FIXED</a></h4>
            <p>Don't run this code, just see why it's better</p>



        </div>
    </div>
</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../vendor/components/jquery/jquery.js"></script>

</body>
</html>