<?php 
abstract class Person{

    protected string $Nom;
    protected string $Email;
    protected string $Nationalité;

   

    abstract public function getAnnualCost();

    public function getNom(){
       return  $this ->Nom;
    }

    public function setNom($Nom){
        $this ->Nom = $Nom;
    }

     public function getEmail(){
       return  $this ->Email;
    }

    public function setEmail($Email){
        $this ->Email = $Email;
    }

     public function getNationalité(){
       return  $this ->Nationalité;
    }

    public function setNationalité($Nationalité){
        $this ->Nationalité = $Nationalité;
    


}

}


?>