<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/Styles.css" type="text/css"/>

    </head>
    <body>

        <div class="header">
            <h2>Contact Us</h2>
        </div>

        <div class="row">
            <div class="column left" style="background-color:#aaa;">
                <p>

                    <a href='./HomePage.html'>Home</a><br>
                    <a href='./ContactUsPage.php'>Contact Us</a><br>
                    <a href='./VideoPage.html'>Video Page</a><br>
                    <a href='./PaperPage.html'>Paper Page</a><br>
                    <a href='./FinalPage.html'>Final Page</a><br>

                </p>
            </div>
            <div class="column middle" style="background-color:#bbb;">
                <?=$thankYou ?>

                <form method="post" action="ContactUsPage.php">
                    <label>Name:</label><br>
                    <input name="sender" size="80"><br><br>

                    <label>Email address:</label><br>
                    <input name="senderEmail" size="80"><br><br>

                    <label>Message:</label><br>
                    <textarea rows="8" cols="80" name="message"></textarea><br><br>

                    <input type="submit" name="submit">
                </form>
            </div>
            <div class="column right" style="background-color:#ccc;">Column</div>
        </div>

        <div class="footer">
            <p>Footer</p>
        </div>

    </body>
</html>

<?php

if($_POST["submit"]) {
    $recipient="jonpc042@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>