<?php
class Review
{
private $id;
private $message;
private $author;
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

public function getMessage (){
    return $this->message;
}

public function setMessage ($message){
    $this->message = $message;
}

public function getAuthor (){
    return $this->author;
}

public function setAuthor ($author){
    $this->author = $author;
}

public function getTour_Operator_Id (){
    return $this->tour_operator_id;
}

public function setTour_Operator_Id ($tour_operator_id){
    $this->tour_operator_id = $tour_operator_id;
}