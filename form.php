<div>
    <form action="" method="post" class="">
        <fieldset>
            <legend>Informations personnelles</legend>
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
            <div>
                <select>
                    <option value="français">français</option>
                    <option value="anglais">anglais</option>
                    <option value="espagnol">espagnol</option>
                </select>
                <input type="range" name="points" min="1" max="5">
            </div>
            <div>
                <input type="button" value="Ajouter un langage">
            </div>
        </fieldset>
        <fieldset>
            <legend>Formation</legend>
            <div>
                <label for="formation-name">Intitulé: </label>
                <input type="text" id="formation-name">
            </div>
            <div>
                <label for="formation-date-start">Date de début: </label>
                <input type="date" id="formation-date-start">
            </div>
            <div>
                <label for="formation-date-end">Date de fin: </label>
                <input type="date" id="formation-date-end">
            </div>
            <div>
                <label for="formation-description">Description: </label>
                <textarea id="formation-description"></textarea>
            </div>
            <div>
                <input type="button" value="Ajouter une formation">
            </div>
        </fieldset>
        <fieldset>
            <legend>Expérience</legend>
            <div>
                <label for="experience-name">Intitulé: </label>
                <input type="text" id="experience-name">
            </div>
            <div>
                <label for="experience-date-start">Date de début: </label>
                <input type="date" id="experience-date-start">
            </div>
            <div>
                <label for="experience-date-end">Date de fin: </label>
                <input type="date" id="experience-date-end">
            </div>
            <div>
                <label for="experience-description">Description: </label>
                <textarea id="experience-description"></textarea>
            </div>
            <div>
                <input type="button" value="Ajouter une expérience">
            </div>
        </fieldset>
        <fieldset>
            <legend>Compétences</legend>
            <div>
                <label for="skill-name">Intitulé: </label>
                <input type="text" id="skill-name">
                <input type="range" name="points" min="1" max="5">
            </div>
            <div>
                <input type="button" value="Ajouter une compétence">
            </div>
        </fieldset>
        <div>
            <input type="submit" formaction="/action_page1.php" value="Type 1">
            <input type="submit" formaction="/action_page2.php" value="Type 2">
        </div>
    </form>
</div>