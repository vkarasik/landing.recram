<?php
    if(!empty($_POST) && $_POST['num'] != '') {

        $data = $_POST;
        $num = $_POST['num'];
        $to = 'v.karasik@cd-life.by';
        $subject = 'Message from RecramLimited';
        $message = 'Name: ' . $data["name.$num"] . '<br>' .' Email: ' . $data["email.$num"] .'<br>'. ' Message: ' . $data['msg'];

        $headers[] = "Content-type: text/html; charset=utf-8 \r\n";
        $headers[] = "From: RecramLimited.com <from@example.com>\r\n";

        mail($to, $subject, $message, implode($headers));
        echo 'Thank you, we will contact you soon!';
    }
    else{
        echo 'An error occurred! Please resend yor message!';
    }
?>