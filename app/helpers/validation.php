<?php

use App\Helpers ;

class Validation {
           public static function sanitizeInput (mixed $value) {

               htmlentities(htmlspecialchars(stripcslashes(trim($value))))
 }

       public static function required (mixed $value ){
             return empty ($value);
 }
 
      public static function minVal(string $value , int $length):bool {
        return strlen($value)< $length ;
      } 
       public static function maxVal(string $value , int $length):bool {
        return strlen($value)> $length ;
      }

   public static function unique (string $value , string $column ,string $table) {
    $db= new Database ;
    $result = $db ->query ("SELECT `$column`from `$table `WHERE` $coulmn ='$value' ");
    dd ($result->num_rows );
    return $result->num_rows > 0 ;
   } 
   public static function validEmail(string $email ){
    return !filter_var($email , FILTER_VALIDATE_EMAIL);
   }
}     
 