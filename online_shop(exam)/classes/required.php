<?php 

namespace Route\Oop\Required;

require_once 'Validator.php';

use Route\Oop\Exam\Validator;

class Required implements Validator {
    public function check($key ,$value){
        if(empty($value)){
            return "$key is required";
        }else{
            return false;
        }
    }

}