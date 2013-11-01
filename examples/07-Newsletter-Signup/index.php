<?php
require '../../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>04 - Ajax Form Handling</title>
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
    <h1>Sanitizing Data</h1>
    <div id="form">
        <form name="basic_form" id="basic_form" method="POST" action="#">
            <label>Salutation:
                <select name="salutation" id="salutation">
                    <option value="Miss">Miss</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Dr.">Dr.</option>
                </select>
            </label>
            <label>Name:
                <input type="text" name="name" id="name" value="">
            </label>
            <label>Age:
                <input type="text" name="age" id="age" value="">
            </label>
            <label>Email:
                <input type="text" name="email" id="email" value="">
            </label>
            <label>
                <input type="checkbox" name="newsletter" id="newsletter" value="yes" checked="checked">
                I would like to get email updates
            </label>
            <label>
                <input type="submit" id="submit" value="Submit">
            </label>
        </form>
    </div>
    <div id="results">

    </div>
</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../vendor/components/jquery/jquery.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#basic_form').submit(function(e){
            e.preventDefault();
            var fields = $(this).serialize();
            $.ajax({
                type: 'POST',
                async: false,
                dataType: 'html',
                data: fields,
                url: 'form-handler.php',
                success: function(data) {
                    $('#basic_form').hide();
                    $('#results').html(data).show();
                }
            });
        });
    });
</script>
</body>
</html>