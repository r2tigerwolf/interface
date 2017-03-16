<?php
    include("class.interface.php");
    include("class.animal.php");
    
    $animal = new movieAnimal;
    $animal->setAnimal("Dog", "Tramp", "Mutt");
    $animal->setNumberOfFeet('4');
    $animal->setHasWings(false);
    $animal->setMovie("Lady and the Tramp");
    $animal->setActor("Larry Roberts");
    $animal->setDirector("Clyde Geronimi");
    
    displayAnimal($animal->getAnimal());
    
    $animal->setAnimal("Fish", "Dorry", "Blue Tang Fish");
    $animal->setNumberOfFeet('0');
    $animal->setHasWings(false);
    $animal->setMovie("Finding Dorry");
    $animal->setActor("Ellen DeGeneres");
    $animal->setDirector("Chris Renaud");
    
    displayAnimal($animal->getAnimal());

    $animal->setAnimal("Bird", "Iago", "Parrot");
    $animal->setNumberOfFeet('2');
    $animal->setHasWings(true);
    $animal->setMovie("Alladin");
    $animal->setActor("Gilbert Gottfried");
    $animal->setDirector("Ron Clements");
    
    displayAnimal($animal->getAnimal());
    
    function displayAnimal($animalInfo) {
        $animalArray = (array)$animalInfo;
        
        foreach($animalArray as $key => $val) {
            echo $key . " = " . $val . "<br />";
        }
        
        echo "<br />";
    }
?>