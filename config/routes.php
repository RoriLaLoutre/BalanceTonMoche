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
                    "title" => "wanted",
                    "description" => "Page wanted"
                ]],
    "poucave" => ["template" => "poucaveController.php",
                "seo" => [
                    "title" => "poucave",
                    "description" => "Page poucave"
                ]],
    "analyse" => ["template" => "analyseController.php",
                "seo" => [
                    "title" => "analyse",
                    "description" => "Page analyse"
                ]],
    "personneInfo" => ["template" => "personneInfoController.php",
                "seo" => [
                    "title" => "personneInfo",
                    "description" => "Page personneInfo"
                ]],
   

];

const DEFAULT_ROUTE = AVLAIBLE_ROUTES['home'];