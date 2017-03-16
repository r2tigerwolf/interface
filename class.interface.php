<?php
    interface Animal {
        public function setNumberOfFeet($numberOfFeet); 
        public function getNumberOfFeet();
        public function setHasWings($bool);
        public function getHasWings();                
        public function setAnimal($animalType, $name, $breed);
        public function getAnimal();
    }
    
    interface Cast {
        public function setActor($actorName);
        public function getActor();
        public function setDirector($directorName);
        public function getDirector();
        public function setMovie($actorName);
        public function getMovie();
    }
?>