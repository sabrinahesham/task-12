<?php 
namespace App\Helpers ;

class ErrorBag {
    private array $errorList=[];

    public function add(string $errorMessage):void {
       $this->errorList[]=$errorMessage ; 
    }

    public function all(): array {
        return $this->errorList ;
    }

   public function errorsExit(){
    return !empty( $this->errorList ) ;
   }
}























?>