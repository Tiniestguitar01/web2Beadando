<?php
if (!isset($_SESSION['userlastname']) || empty($_SESSION['userlastname'])) {
    $_SESSION['userlastname'] = 'Látogató';
}
?>

<h2>Üzenet elküldve az adminisztrátornak! <div id="user"><em><?= $_SESSION['userlastname']." ".$_SESSION['userfirstname'] ?></em></div></h2>
