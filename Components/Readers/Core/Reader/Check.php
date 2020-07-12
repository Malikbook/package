<?php

namespace Core\Reader;

trait Check{

    public function extension_check(){
       return pathinfo($this->name, PATHINFO_EXTENSION );
    }

}