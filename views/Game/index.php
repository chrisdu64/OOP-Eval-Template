<h1>Bienvenue sur la page de création d'un nouveau jeu</h1>
<h2>Veuillez remplir les champs suivants :</h2>
<form action="/game/addGame" method="post"
    style="display: flex;justify-content:space-between;flex-direction:column;">
    <div class="input-group">
        <label for="title">Nom du nouveau jeu :</label>
        <input type="text" name="title" id="title">
    </div>

    <div class="input-group">
        <label for="min_players">Nombre de joueurs minimun :</label>
        <input type="number" name="min_players" id="min_players">
    </div>

    <div class="input-group">
        <label for="max_players">Nombre de joueurs maximum :</label>
        <input type="number" name="max_players" id="max_players">
    </div>
    
    <input type="submit" value="Envoyer">
</form>
</div>