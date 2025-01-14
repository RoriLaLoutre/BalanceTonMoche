<?php
require_once('./models/CrudManager.php');

$lastSignalements = getLastSignalements(5);


$template = './views/pages/analyse.php';



