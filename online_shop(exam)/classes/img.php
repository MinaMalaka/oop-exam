<?php 

namespace Route\Oop\Required;
require_once 'Validator.php';

use Route\Oop\Exam\Validator;

class img implements Validator {
    public function check($key ,$value){
        if(!in_array(strtolower(pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION)),['png','jpg','jpeg'])){
            return "you must upload $key";
        }else{
            return false;
        }
    }

}