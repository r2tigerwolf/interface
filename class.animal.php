<?php
class movieAnimal implements Animal, Cast {
        
    private $animalType;
    private $animalName;
    private $breedName; 
    private $numberOfFeet; 
    private $hasWings;  
    private $actorName;
    private $directorName;  
    private $movieName;
    private $annimalInfo = array();
  
    public function setAnimal($animalType, $animalName, $breedName) {
        $this->animalType = $animalType;
        $this->animalName = $animalName;
        $this->breedName = $breedName;  
        $this->annimalInfo = array("animalType" => $this->animalType, "animalName" => $this->animalName, "breedName" => $this->breedName);         
    }                        
    
    public function getAnimal() {
        return ($this->annimalInfo);
    }
    
    public function setNumberOfFeet($numberOfFeet)  {
        $this->numberOfFeet = $numberOfFeet;
        $this->annimalInfo["numberOfFeet"] = $this->numberOfFeet;
    }
                                     
    public function getNumberOfFeet(){
        return $this->numberOfFeet;
    }
    
    public function setHasWings($bool) {
        $this->hasWings = $bool;
        $this->annimalInfo["hasWings"] = ($this->hasWings)? "Has Wings" : "No Wings";
    }
     
    public function getHasWings() {
        return ($this->hasWings)? "Has Wings" : "No Wings";
    }
    
    public function setActor($actorName) {
        $this->actorName = $actorName;      
        $this->annimalInfo["actor"] = $this->actorName;        
    }                        
    
    public function getActor() {
        return $this->actorName;
    }
    
    public function setDirector($directorName) {
        $this->directorName = $directorName;      
        $this->annimalInfo["director"] = $this->directorName; 
    }                        
    
    public function getDirector() {
        return $this->directorName;
    }
    
    public function setMovie($movieName) {
        $this->movieName = $movieName;      
        $this->annimalInfo["movieName"] = $this->movieName; 
    }                        
    
    public function getMovie() {
        return $this->movieName;
    }
}
?>