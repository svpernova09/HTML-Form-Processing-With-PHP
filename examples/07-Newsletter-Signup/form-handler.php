<?php
if(isset($_POST['name'])){
    //form has been submitted
    if(htmlentities($_POST['human_check']) == 'meow'){
        $newsletter = filter_var($_POST['newsletter'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        if($newsletter == 'yes'){
            //add them to our email list
        }
        $salutation = filter_var($_POST['salutation'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
        $age_filter = filter_var($age, FILTER_VALIDATE_INT,
            array('options'=>array('min_range'=>'13','max_range'=>'110')));
        if($age_filter){
            $age_message = 'You are ' . $age . ' years old.<br />';
        } else {
            $age_message = "We don't know how old you are.<br />";
        }
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $filter_email = filter_var($email,FILTER_VALIDATE_EMAIL);
        if($filter_email){
            $email_message = 'Your email is ' . $email . '<br />';
        } else {
            $email_message = "We don't know your email.<br />";
        }
        $greeting = 'Hello ' . $salutation . ' ' . $name . '<br />';

        echo $greeting;
        echo $age_message;
        echo $email_message;
    } else {
        echo "You aren't good with cats are you...";
    }
}