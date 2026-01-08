<?php
require('Person.php');
class Coach extends Person
{

    private int $id;
    private int $Equipe_id;
    private  int $Années_dexpérience;
    private string $Style_de_coaching;



    public function getAnnualCost(int  $salaire):float
    {
        return $salaire ;
    }

    public function getId()
    {
        return  $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getEquipe_id()
    {
        return  $this->Equipe_id;
    }

    public function setEquipe_id($Equipe_id)
    {
        $this->Equipe_id = $Equipe_id;
    }

    public function getAnnées_dexpérience()
    {
        return  $this->Années_dexpérience;
    }

    public function setAnnées_dexpérience($Années_dexpérience)
    {
        $this->Années_dexpérience = $Années_dexpérience;
    }

    public function getStyle_de_coaching()
    {
        return  $this->Style_de_coaching;
    }

    public function setStyle_de_coaching($Style_de_coaching)
    {
        $this->Style_de_coaching = $Style_de_coaching;
    }
}
