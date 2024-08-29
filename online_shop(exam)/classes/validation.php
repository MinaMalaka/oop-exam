<?php 

namespace Route\Oop\Required;
require_once 'Required.php';
require_once 'Str.php';
require_once 'img.php';
require_once 'price.php';





class Validation{

    private $errors= [];
    public function lastValidate($key,$value,$rules){
        foreach($rules as $rule){
            $rule ="Route\Oop\Required\\".$rule;
            $obj = new $rule;
          $result=  $obj->check($key,$value);
          if($result == true){
            $this->errors[]= $result;
          }
        }
    }

    public function geterror(){
        return $this->errors;

    }

}