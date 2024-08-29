<?php 

namespace  Route\Oop\Required;

class Session{

    //start

    public function __construct(){
        
        session_start();

    }

    //set

    public static function set($key , $value){
        $_SESSION[$key] = $value;
    }

    //get

    public function get($key){

       return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }


    //unset
    
    public function remove($key){
        unset($_SESSION[$key]);
    }



    //destroy

    public function destroy($key){
        session_destroy()  ;  
    }
}