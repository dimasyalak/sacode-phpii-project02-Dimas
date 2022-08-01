<?php
	
	class car {
		public $color;
		public $model;
		public function __construct($color, $model)
		{
			$this->color = $color;
			$this->model = $model;
		}

		public function message(){
			return "My car is a " .$this->color. " " . $this->model."!";

		}
	}
			$Mycar = new car("black", "Volvo");
			echo $Mycar->message();
			echo "<br>";
			$Mycar = new car("Red", " Toyota");
			echo $Mycar->message();
		
	



?>