<?php 
 namespace App\Helpers ;

 class Resquest {
 
    public static function ispost() : bool
   {
     return $_SERVER['REQUEST_METHOD']== "POST" ;
   }
   public static function isGet() : bool
   {
     return $_SERVER['REQUEST_METHOD']== "GET" ;
   }




   public static function All() 
   {
     return $_REQUEST ;
   }


 }


















?>