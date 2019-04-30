<?php
if($_POST["message"]) {
    mail("jonpc042@gmail.com", "Form to email message", $_POST["message"], "From: jonpc042@gmail.com");
}
?>