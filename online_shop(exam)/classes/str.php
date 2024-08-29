<?php 

namespace Route\Oop\Required;
require_once 'Validator.php';

use Route\Oop\Exam\Validator;

class Str implements Validator {
    public function check($key ,$value){
        if(is_numeric($value)){
            return "$key must be string ";
        }else{
            return false;
        }
    }

}