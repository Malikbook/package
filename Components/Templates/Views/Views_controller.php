<?php

// $patch = "./small/top10milliondomains.txt";
// // require_once __DIR__."..small/top10milliondomains.txt";
// require_once(realpath('./small/top10milliondomains.txt'));

// echo (pathinfo( $patch, PATHINFO_EXTENSION ));

if($data['top'] != null){
    require_once __DIR__."/Table_views.php";
} else {
    require_once __DIR__."/Err_template.php";
}