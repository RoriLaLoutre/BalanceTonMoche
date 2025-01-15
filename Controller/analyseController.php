<?php
require_once('./models/CrudManager.php');


$data = getNotesMoyennesParCategorie();
$moyenne = round(getNotesMoyenne(), 2);





$template = './views/pages/analyse.php';



