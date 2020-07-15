<?php

namespace Core\Reader;

abstract class Master_views {
    public $patch;
    public $data;
    
    public static function go_to($patch, array $data = []){
        $data['patch'] = $patch;
        extract($data);
        include_once $_SERVER['DOCUMENT_ROOT']."/vendor/oleksii/access/Components/Templates/Start_views/start_views.php";
    }
}