<div class="container">

<div class="left-div-form">
 <form action="<?= SITE_ROOT ?>uzenetetkuld" method="post">
        <div>
            <label for="content" class="w-100 text-center">Tartalom</label>
            <textarea type="textarea" name="textarea" id="textarea" class="shadow form-control"></textarea>
        </div>
        <br>
        <input id="Alertbtn" type="submit" class="btn btn-outline-primary" value="Küldés">
        </form>
</form>
 </div>
<div class="right-div-result">
<?php
switch ($viewData['eredmeny']) {
    case "OK":
        echo "<h3>Üzenetek listája:</h3>";
?>
        <div class="message-container">
            <?php foreach ($viewData['rows'] as $row) { ?>
                <div class="card">
                    <div class="card-header">
                        <div class="User"><?php echo $row['id'] . '.   '; ?><?php echo $row['felhasznalo']; ?></div>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?php echo $row['tartalom']; ?></p>
                        <i><?php echo $row['datum']; ?></i>
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
