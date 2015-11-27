<?php
if($_POST["message"]) {
    mail("zchaudhry11@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>