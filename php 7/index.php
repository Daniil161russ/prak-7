<?php
	namespace Home;
	class User 
	{
		public $name;
		public $surname;
		function __construct($userName,$userSurName)
		{
			$this -> name = $userName;
			$this -> surname = $userSurName;
		}
		public function getName(){
			return $this -> name;
		}
		public function getSurName(){
			return $this -> surname;
		}
		public function getStudentName(){
			echo $this -> name ," ", $this -> surname;
		}
	}
	class Student extends User
	{
		public $year;
		function __construct($userName,$userSurName,$studentYear)
		{
			parent::__construct($userName,$userSurName);
			$this -> year = $studentYear;
		}
		public function getYear(){
			return $this -> year;
		}
		public function getStudentName(){
			echo $this -> name ," ", $this -> surname;
		}
		public function getCourse(){
			$course = date("Y") - $this -> year;
			if ($course == 1) {
				echo "Первый курс";
			}
			elseif ($course == 2) {
				echo "Второй курс";
			}
			elseif ($course == 3) {
				echo "Третий курс";
			}
			elseif ($course == 4) {
				echo "Четвёртый курс";
			}
			elseif ($course == 5) {
				echo "Пятый курс";
			}
			elseif ($course > 5) {
				echo "Закончил обучаться";
			}
			elseif ($course <= 0) {
				echo "Еще не поступил";
			}
		}
	}

	class Freshman extends Student
	{
		function __construct($userName,$userSurName,$studentYear)
		{
			parent::__construct($userName,$userSurName,$studentYear);
		}
		public static function randomP($stud){
			$a = rand(1,3);
			if ($a == 1) {
				echo "<br>","Случайное поле: ", $stud->name;
			}
			elseif ($a == 2) {
				echo "<br>","Случайное поле: ", $stud->surname;
			}
			elseif ($a == 3) {
				echo "<br>","Случайное поле: ", $stud->year;
			}
		}
	}
	
	$firstStud = new Student("Daniil","Boyko",2016);
	$firstStud -> getStudentName();
	echo "<br>";
	$firstStud -> getCourse();
	// Freshman::randomP($firstStud);
  ?>