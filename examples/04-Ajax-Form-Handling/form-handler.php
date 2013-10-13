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
}