<?php

class TourOperator {
    private $id;
    private $name;
    private $grade;
    private $link;
    private $isPremium;

}

/*construct*/

public function  __construct(array $donnes){
    $this->hydrate($donnes);
}

/*Hydrate*/

public function hydrate($donnees){
    foreach ($donnees as key =>$value){

        $method = 'set' .ucfirst($key);

        if (method_exists($this, $method))
        {
$this->$method($value);
        }
    }
}

public function getId (){
    return $this->id;
}

public function setId ($id){
    $this->id = $id;
}

public function getName (){
    return $this->name;
}

public function setName ($name){
    $this->name = $name;
}

public function getGrade (){
    return $this->grade;
}

public function setGrade ($grade){
    $this->grade = $grade;
}

public function getLink (){
    return $this->link;
}

public function setLink ($link){
    $this->link = $link;
}

public function getIsPremium (){
    return $this->ispremium;
}

public function setIsPremium ($ispremium){
    $this->ispremium = $ispremium;
}