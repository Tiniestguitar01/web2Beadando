
<div class="result">
<h1>Admin</h1>
<?php
switch ($viewData['eredmeny']) {
    case "OK":
        echo "<p>Üzenetek listája:</p>";
?>
        <div class="message-container">
            <?php foreach ($viewData['rows'] as $row) { ?>
                <div class="card">
                    <div class="card-header">
                        <div class="email"><?php echo $row['id'] . '.   '; ?><?php echo $row['email']; ?></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['cim']; ?></h5>
                        <p class="card-text"><?php echo $row['tartalom']; ?></p>
                        <p><?php echo $row['telefonszam']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php break;
    case "ERROR":
        echo "<p>" . $viewData['uzenet'] . "</p>";
        break;
}
?>

<div>