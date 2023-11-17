<?php 
 namespace App\Helpers ;
 
 class Session {
    public static function set(string $key,mixed $value ): void 
    {
        $_SESSION[$key]=$value ;
    }
    public static function get(string $key): mixed
    {
       if(self ::has($key)) return $_SESSION[$key] ;
    }

    public static function has(string $key): mixed
    {
        return isset($_SESSION[$key] );
    }

    public static function flash(string $key) 
    {
     $value = null ;
     if (self ::has($key)){
        $value = self ::get($key);
        self :: delete ($key);
     }
     return $value
    }
public static function delete(string $key){
    if (self ::has($key)) unset ($_SESSION[$key]) ;
}


 }
 
 
 
 
 
 
 
 
 
 
 ?>
 
