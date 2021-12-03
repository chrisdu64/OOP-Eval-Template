<h1>Bienvenue sur la page de création d'un nouveau joueur</h1>
<h2>Veuillez remplir les champs suivants :</h2>
<form action="/game/addPlayer" method="post"
    style="display: flex;justify-content:space-between;flex-direction:column;">
    <div class="input-group">
        <label for="email">Votre adresse mail :</label>
        <input type="text" name="email" id="email">
    </div>

    <div class="input-group">
        <label for="nickname">Choisissez un pseudo :</label>
        <input type="text" name="nickname" id="nickname">
    </div>
    
    <input type="submit" value="Envoyer">
</form>
</div>