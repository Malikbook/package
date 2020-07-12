<?php

namespace Core\Reader;

use Core\Reader\File_check;
use Core\Reader\Check;

class File_rider implements File_check{

    protected $patch;

    use Check;

    public function __construct($patch, $amount){
        $this->patch = $patch;
        $this->amount = $amount;
    }

    public function patch(){
        return $this->patch->dir; 
    }

    public function create_dataname(){
        $data = scandir($this->patch->dir);

        $file_name = array();

        foreach($data as $value){
            if(($value !== '.') && ($value !== "..") && ($value !== '.DS_Store')){
                $file_name[] = $value;
            }
        }
        
       return $file_name;
    }
    
    public function top_list($string){

        $lines_csv = [];

        $data = str_replace('"', "", $string);

        $string = explode(" ", $data);

        $valid_string = array_diff($string, array(""));

        $valid_arr = [];

        for($i = 1; $i <= $this->amount; $i++){
            $valid_arr[] = $valid_string[$i];
        }

            foreach($valid_arr as $row){

                list($num, $domain, $rank) = explode(",", trim($row));
                
                $lines_csv[$domain] = $rank;
            }
        

        return $lines_csv;
    }
}