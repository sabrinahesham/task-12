<?php

use App\Helpers\Request ;

require_once  "../../app/bootstrap.php" ; 

if (Request :: isPost()){

    $errors=new ErrorBag ;

    foreach (Request::all() as $key => $value) $$key = Validation::sanitizeInput($value)
    dd($_REQUEST);



    if (Validation::required ($name)) $errors -> add("name field is required!"); 
    if (Validation::minVal ($name , 3) ||Validation::maxVal ($name , 20) ) $errors -> add("name field should be among 3 and 20");

    if (Validation::required ($email)) $errors -> add("email field is required!"); 
    if (Validation::unique ($email , "email", "students")) $errors -> add("this email is already exits!"); 
    if (Validation::validEmail ($email)) $errors -> add("please enter a valid email!"); 

if ($errors ->errorExit()) {
    Session :: set("errors",$error -> all()) ;
    redirect("pages/students/create.php");
} else {
$data = [
    'name' => $name ,
    'email' => $email ,
    'phone' =>isset($phone) ? $phone :null ,

];

if(Student::create($data)) {
    Session :: set("success","student create successfully !");
    redirect("pages/students/index.php"); }
else {
$errors->add( 'Error Creating Student!');
Session::set('errors', $errors->all());
  redirect(' pages/students/create.php');

    
}


}















?>



