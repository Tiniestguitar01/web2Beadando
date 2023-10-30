<div class="container">
<div class="right-div-result">
<?php
switch ($viewData['eredmeny']) {
    case "OK":
        echo "<h3>Játékok listája:</h3>";
?>
        <div class="message-container">
            <?php foreach ($viewData['rows'] as $row) { ?>
                <div class="card">
                    <div class="card-header">
                        <div class="User"><?php echo $row['nev']; ?></div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Kiadó: <?php echo $row['kiado']; ?></p>
                        <p class="card-text">Kiadási dátum: <?php echo $row['kiadasi_datum']; ?></p>
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
</div>