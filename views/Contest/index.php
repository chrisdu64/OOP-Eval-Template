<h1>Bienvenue sur la page de création d'un nouveau match</h1>
<h2>Veuillez remplir les champs suivants :</h2>
<form action="/contest/addContest" method="post"
    style="display: flex;justify-content:space-between;flex-direction:column;">
    <div class="input-group">
        <label for="game_id">Choisissez sur quel jeu se fera le prochain match :</label>
        <select name="game_id" id="game_id">
            <option value=""><?php ?></option>
        </select>
    </div>
    <div class="input-group">
        <label for="start_date">Quand voulez-vous commencez le match :</label>
        <input type="date" name="start_date" id="start_date">
    </div>
    
    <input type="submit" value="Envoyer">
</form>
</div>