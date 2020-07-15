<?php

require_once __DIR__."/vendor/autoload.php";

    $config = require_once __DIR__."/config.php";

    // var_dump($config);

    
    $top = new Core\Reader\File_rider ( $config->input, $config->amount->lines); 

    use League\Csv\Reader;

    $csv = Reader::createFromPath( "/".$top->patch()."/".$top->create_dataname()[0], 'r');

    Core\Reader\Master_views::go_to('Views_controller', [
        "top" => $top->top_list($csv->getContent())
    ]);

