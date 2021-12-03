<h1>Bienvenue !!</h1>

<h2>Liste des joueurs :</h2>
<table>
    <thead>
        <th>Adresse mail</th>
        <th>Pseudo</th>
    </thead>
    <tbody>
        <?php
            foreach ($this->players as $player) :
                ?>
        <tr>
            <td><?php echo $player->getEmail(); ?></td>
            <td><?php echo $player->getNickname(); ?></td>
        </tr>
        
        <? endforeach; ?>
        
    </tbody>
</table>

<h2>Liste des jeux disponibles :</h2>
<table>
    <thead>
        <th>Nom du jeu</th>
        <th>Nombre de joueurs minimum</th>
        <th>Nombre de joueurs maximum</th>
    </thead>
    <tbody>
        <?php
            foreach ($this->games as $game) :
                ?>
        <tr>
            <td><?php echo $game->getTitle(); ?></td>
            <td><?php echo $game->getMin_players(); ?></td>
            <td><?php echo $game->getMax_players(); ?></td>
        </tr>
        <? endforeach; ?>
    </tbody>
</table>

<h2>Liste des matchs :</h2>
<table>
    <thead>
        <th>Nom du jeu</th>
        <th>Date de démarrage</th>
        <th>Pseudo du gagnant du match</th>
    </thead>
    <tbody>
        <?php
            foreach ($this->games as $game) ;
                foreach ($this->contests as $contest) ;
                    foreach ($this->players as $player) :
                ?>
        <tr>
            <td><?php echo $game->getTitle(); ?></td>
            <td><?php echo $contest->getStart_date(); ?></td>
            <td><?php echo $player->getNickname(); ?></td>
        </tr>
        <? endforeach; ?>
    </tbody>
</table>