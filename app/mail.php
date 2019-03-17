<?php
if(!empty($_POST)) {

    /* $data = (object) $_POST;
    $to = 'v.karasik@cd-life.by';
    $subject = 'Message from RecramLimited';
    $message = 'Name: ' . $data->name . ' Email: ' . $data->email . ' Message: ' . data;

    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: haas.by <from@example.com>\r\n";

    mail($to, $subject, $message, $headers); */

    $data = $_POST;
    $to = 'v.karasik@cd-life.by';
    $subject = 'Message from RecramLimited';
    $message = 'Name: ' . $data['name'] . '<br>' .' Email: ' . $data['email'] .'<br>'. ' Message: ' . $data['msg'];

    $headers[] = "Content-type: text/html; charset=utf-8 \r\n";
    $headers[] = "From: RecramLimited.com <from@example.com>\r\n";

    mail($to, $subject, $message, implode($headers));
} 
?>