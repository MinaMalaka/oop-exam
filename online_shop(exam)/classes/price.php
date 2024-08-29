<?php 

namespace Route\Oop\Required;
require_once 'Validator.php';

use Route\Oop\Exam\Validator;

class price implements Validator {
    public function check($key ,$value){
        if($value > 20000){
            return " $key must be less than or equal 20000";
        }else{
            return false;
        }
    }

}