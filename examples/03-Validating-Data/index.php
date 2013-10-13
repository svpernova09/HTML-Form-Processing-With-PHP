<?php
require '../../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>03 - Validating Data</title>
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
        $salutation = htmlentities($_POST['salutation']);
        $name = htmlentities($_POST['name']);
        $age = htmlentities($_POST['age']);
        $age_filter = filter_var($age, FILTER_VALIDATE_INT,
          array('options'=>array('min_range'=>'13','max_rage'=>'110')));
        if(!$age_filter){
            $age_message = "We don't know how old you are.<br />";
        } else {
            $age_message = 'You are ' . $age . ' years old.<br />';
        }
        $email = htmlentities($_POST['email']);
        $filter_email = filter_var($email,FILTER_VALIDATE_EMAIL);
        if(!$filter_email){
            $email_message = "We don't know your email.<br />";
        } else {
            $email_message = 'Your email is ' . $email . '<br />';
        }
        $greeting = 'Hello ' . $salutation . ' ' . $name . '<br />';

        echo $greeting;
        echo $age_message;
        echo $email_message;
    } else {
        ?>
        <h1>Sanitizing Data</h1>
        <form name="basic_form" id="basic_form" method="POST" action="#">
            <label for="salutation">Salutation:
                <select name="salutation" id="salutation">
                    <option value="Miss">Miss</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Dr.">Dr.</option>
                </select>
            </label>
            <label for="name">Name:
                <input type="text" name="name" id="name" value="">
            </label>
            <label for="age">Age:
                <input type="text" name="age" id="age" value="">
            </label>
            <label for="email">Email:
                <input type="text" name="email" id="email" value="">
            </label>
            <label for="submit">
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