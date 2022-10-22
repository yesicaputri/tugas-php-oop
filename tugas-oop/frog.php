<?php
    class Frog extends Animal {
        public $jump;
        function __construct($name, $legs, $cold_blooded, $jump){
            $this->name = $name;
            $this->legs = $legs;
            $this->cold_blooded = $cold_blooded;
            $this->jump = $jump;
        }     
        public function intro(){
            echo "<br>Name : " . $this->name ,
            "<br>legs : " . $this->legs ,
            "<br>cold blooded : " . $this->cold_blooded ,
            "<br>Jump : " . $this->jump ,
            "<br>";
        }
}

$kodok = new Frog("buduk", 4, "no", "Hop Hop");
$kodok->intro();
?>