<?php

// 5  _ kuriama nauja klase
// extends paveldes savybes bei metodus is AbstractChild
class Child extends AbstractChild {

	// 6 _ pridedama nauja savybe $age
	protected $age;

	// 12 _ kontruktorius
	public function __construct($name, $gender, $age)
	{
		$this->name = $name;
		$this->gender = $gender;
		$this->age = $age;
	}

	// 7 _ apsirasomas naujas metodas, leidziantis pasiekti amziu
	// pilnai returnimas metodas 
	public function getAge() {
		return $this->age;
	}

	// 13 _ likusiu metodu implementacija
	// jie tampa nebe abstraktus, bet public
	public function getName() {
		return $this->name;
	}

	public function getGender() {
		return $this->gender;
	}

	// 8 _ kuriami konkretus metodai ir vadinsis taip, kaip tevineje kalseje
	// (“į kokią mokyklą eis”)
	public function getSchool($age) {
		// 9 _ metodo implementacija
		if($age < 7) {
			return "Pre - School";

		} elseif($age < 10) {
			return "Primary - School";

		} elseif($age < 14) {
			return "Secondary - School";

		} elseif($age < 18) {
			return "High - School";	

		} else {
			return "School is finished";
		}	
	}
	// 8 _ metodas (objektas į masyvą”)
	public function toArray() {

		// 10 _ metodo implementacija
		// klase paverciama i masyva ir returninama
		return [
      		"age" => $this->age,
      		"gender" => $this->gender,
      		"name" => $this->name,
  		];	
	}
}
