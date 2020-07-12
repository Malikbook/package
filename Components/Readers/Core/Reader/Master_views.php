<?php

namespace Core\Reader;

abstract class Master_views {
    public $patch;
    public $data;
    
    public static function go_to($patch, array $data = []){
        $data['patch'] = $patch;
        extract($data);
        require_once "./Components/Templates/Start_views/start_views.php";
    }
}