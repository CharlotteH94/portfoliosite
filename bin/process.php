<?php 
if ($_POST["email"]<>'') { 
    $ToEmail = 'charlottehannah94@gmail.com'; 
    $EmailSubject = $_POST["subject"]; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY .= nl2br($_POST["message"]); 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
}
?> 
