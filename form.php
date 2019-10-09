<div>
    <form action="template.php" method="post" class="">
        <div>
            <label for="firstname">Prénom: </label>
            <input type="text" id="firstname" autocomplete="on">
        </div>
        <div>
            <label for="laststname">Nom: </label>
            <input type="text" id="laststname" autocomplete="on">
        </div>
        <div>
            <label for="address-number">N°: </label>
            <input type="number" id="address-number" autocomplete="on">
        </div>
        <div>
            <label for="address-street">Rue: </label>
            <input type="text" id="address-street" autocomplete="on">
        </div>
        <div>
            <label for="address-zip">CP : </label>
            <input type="number" id="address-zip" autocomplete="on">
        </div>
        <div>
            <label for="address-town">Ville: </label>
            <input type="text" id="address-town" autocomplete="on">
        </div>
        <div class="form-example">
            <input type="submit" formaction="/action_page1.php" value="Générer 1">
            <input type="submit" formaction="/action_page2.php" value="Générer 2">
        </div>
    </form>
</div>