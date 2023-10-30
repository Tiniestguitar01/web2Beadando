
<div>
    <h1>Kapcsolat</h1>
    <form action="<?= SITE_ROOT ?>kapcsolatkuld" method="post">
        <div>
            <label for="email" class="w-100 text-center">Email</label>
            <input type="email" name="email" id="email" class="shadow form-control" required>
        </div>
        <div>
            <label for="phone" class="w-100 text-center">Telefonszám</label>
            <input type="text" name="phone" id="phone" class="shadow form-control" pattern="^\+?[0-9\s\(\)-]{8,}$">

        </div>
        <div>
            <label for="title" class="w-100 text-center">Cím</label>
            <input type="text" name="title" id="title" class="shadow form-control" required>
        </div>
        <div>
            <label for="content" class="w-100 text-center">Tartalom</label>
            <textarea type="textarea" name="textarea" id="textarea" class="shadow form-control" required></textarea>
        </div>
        <input id="Alertbtn" type="submit" class="btn btn-outline-primary" value="Küldés">
    </form>
</div>