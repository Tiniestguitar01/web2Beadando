<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Jatekok</title>
        <link rel="stylesheet" href="./css/main_style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>
    </head>
    <body>
        <header>
            <?php
                if(isset($_SESSION["userfirstname"]) && isset($_SESSION["userlastname"]))
                {
                    if($_SESSION["userfirstname"] != "" && $_SESSION["userlastname"] != "")
                    echo "<div id=\"user\"><em>Bejelentkezett: ".$_SESSION['userlastname']." ".$_SESSION['userfirstname']."</em></div>";
                }
            ?>
            <div class="next">
                <img width="60px" src="./images/controller.png">
                <h1 class="header">Játékok</h1>
            </div>
        </header>
        <nav class="bg-light navbar sticky-top navbar-expand-lg border-bottom border-body">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class=" ollapse navbar-collapse" id="navbarNavAltMarkup">
                    <?php echo Menu::getMenu($viewData['selectedItems']); ?>
                </div>
            </div>
        </nav>
        <section class="content center">
            <?php if($viewData['render']) include($viewData['render']); ?>
        </section>
        <footer class="fixed-bottom center">&copy; Játékok <?= date("Y") ?></footer>
    </body>
</html>
