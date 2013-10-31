<?php
require '../../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>01 - Basic HTML Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../../vendor/components/bootstrap-default/css/bootstrap.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <link href="../../vendor/components/bootstrap-default/css/bootstrap-responsive.css" rel="stylesheet">
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
            <a class="brand" href="#">HTML Form Processing with PHP</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="/examples/">Home</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">
    <?php
    if(isset($_POST['name'])){
        //form has been submitted
        ?>
        Hello <?php echo $_POST['name']; ?>
        <?php
    } else {
        ?>
        <h1>Basic HTML Form</h1>
        <form name="basic_form" id="basic_form" method="POST" action="#">
            <label>Name:
                <input type="text" name="name" id="name" value="">
            </label>
            <label>
                <input type="submit" id="submit" value="Submit">
            </label>
        </form>
        <?php
    }
    ?>
</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../vendor/components/jquery/jquery.js"></script>


</body>
</html>