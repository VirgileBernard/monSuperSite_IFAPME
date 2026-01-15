<?php

require 'armes.classes.php';
require 'players.classes.php';
require 'armesPlayers.process.php';


foreach ($players as $player) {
    $player->displayPlayer();
}