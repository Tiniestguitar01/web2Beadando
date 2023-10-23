<div class="card center " style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Regisztráció</h5>
    <form action="<?= SITE_ROOT ?>regisztral" method="post">
        <div>
            <label for="login" class="w-100 text-center">Felhasználónév</label>
            <input type="text" name="login" id="login" class="shadow form-control" required pattern="[a-zA-Z][\-\.a-zA-Z0-9_]{3}[\-\.a-zA-Z0-9_]+">
        </div>
        <div>
            <label for="last_name" class="w-100 text-center">Családi név</label>
            <input type="text" name="last_name" id="last_name" class="shadow form-control" required>
        </div>
        <div>
            <label for="first_name" class="w-100 text-center">Kereszt név</label>
            <input type="text" name="first_name" id="first_name" class="shadow form-control" required>
        </div>
        <div>
            <label for="password" class="w-100 text-center">Jelszó</label>
            <input type="password" name="password" id="password" class="shadow form-control" required pattern="[\-\.a-zA-Z0-9_]{4}[\-\.a-zA-Z0-9_]+">
        </div>
        <input id="Alertbtn" type="submit" class="btn btn-outline-primary" value="Küldés">
        </form>
        <?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?>
        </script>
  </div>
</div>
