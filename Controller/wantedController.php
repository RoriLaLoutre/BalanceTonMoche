<?php
require_once('./models/CrudManager.php');

$lastSignalements = getLastSignalements(15);

$dangerLvl = [
    ["Danger de sureté nationale", 100000],
    ["Délit de faciès", 2500],
    ["Vraiment moche", 500],
    ["Pique les yeux", 150],
    ["Cheum", 25],
    ["Moyen", 0],
    ["Beau", 0],
    ["Très beau", 0],
    ["Sublime", 0],
    ["Magnifique", 0],
    ["Parfait", 0]
];


$template = './views/pages/wanted.php';


