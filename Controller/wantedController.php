<?php
require_once('./models/CrudManager.php');

$lastSignalements = getLastSignalements(15);

$dangerLvl = [
    ["Danger de sureté nationale", 100000],
    ["Délit de faciès", 2500],
    ["Irritation Oculaire", 500],
    ["Vraiment moche", 150],
    ["Cheum", 25],
    ["Moyen", 0],
    ["Beau", 0],
    ["Très beau", 0],
    ["Sublime", 0],
    ["Parfait", 0]
];

function categorisation($note) :int{
    return intval($note,1);
};

function titre($note,$dangerLvl) :string{
    return $dangerLvl[categorisation($note)][0];
};

function prime($note,$dangerLvl) :int{
    return $dangerLvl[categorisation($note)][1];
};



$template = './views/pages/wanted.php';


