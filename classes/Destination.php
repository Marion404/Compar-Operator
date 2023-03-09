<?php
class Destination{
    
    private $id;
    private $location;
    private $price;
    private $tour_operator_id;
}

/*construct*/

public function __construct(array $donnees){
    $this->hydrate($donnees);
}

/*hydrate*/

public function hydrate($donnees){
    foreach ($donnees as key =>$value){

        $method = 'set' .ucfirst($key);

        if (method_exists($this, $method))
        {
$this->$method($value);
        }
    }
}

/*get set */

public function getId (){
    return $this->id;
}

public function setId ($id){
    $this->id = $id;
}

public function getLocation (){
    return $this->location;
}

public function setLocation ($location){
    $this->location = $location;
}

public function getPrice (){
    return $this->price;
}

public function setPrice ($price){
    $this->price = $price;
}

public function getTour_Operator_Id (){
    return $this->tour_operator_id;
}

public function setTour_Operator_Id ($tour_operator_id){
    $this->tour_operator_id = $tour_operator_id;
}