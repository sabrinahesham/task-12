<?php    


use App\Helpers\Database;

class Student 
{
   public static function create(array $data) : bool 
   { 

    $db = new Database;

   $result = $db->query( "INSERT INTO `students` (`name`, `email`, `phone`)
   VALUES ('{$data['name'] }', '{$data['email']}', '{$data['phone']}')" ) ;

      return $result->affected_rows > 0; 

}


}
?>  