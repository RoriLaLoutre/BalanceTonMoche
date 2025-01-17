<?php

const AVLAIBLE_ROUTES = [
	"home" => ["template" => "homeController.php",
                "seo" => [
                    "title" => "Home",
                    "description" => "Page home"
                ]],
    "404" => ["template" => "404Controller.php",
                "seo" => [
                    "title" => "404",
                    "description" => "Page 404"
                ]],
    "wanted" => ["template" => "wantedController.php",
                "seo" => [
                    "title" => "Chiasse à l'homme",
                    "description" => "Page chiasse à l'homme"
                ]],
    "poucave" => ["template" => "poucaveController.php",
                "seo" => [
                    "title" => "Délafion",
                    "description" => "Page délafion"
                ]],
    "analyse" => ["template" => "analyseController.php",
                "seo" => [
                    "title" => "Analyse",
                    "description" => "Page analyse"
                ]],
    "personneInfo" => ["template" => "personneInfoController.php",
                "seo" => [
                    "title" => "Détail",
                    "description" => "Page personneInfo"
                ]],
   

];

const DEFAULT_ROUTE = AVLAIBLE_ROUTES['home'];