<?php
require_once('./models/CrudManager.php');

$lastSignalements = getLastSignalements(3);


$template = './views/pages/analyse.php';



