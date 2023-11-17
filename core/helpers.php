<?php 

function url($uri) : string 
{
    return APP_URL . $uri ;
}

function path($path) : string 
{
    return APP_PATH . $path ;
}

function redirect(string $path){
    header("location: ". url($path));
    exit;
}

function dd($data) 
{
    echo "<pre>" ;
      print_r ($data) ;
    echo "</pre>" ;
     exit;

}







?>