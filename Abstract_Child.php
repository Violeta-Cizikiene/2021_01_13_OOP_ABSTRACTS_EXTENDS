<?php

// <!-- 1 -->
// abstract negalima sukurti su new class,
// todel nereikia konstruktoriaus
abstract class AbstractChild {
	protected $name;
	protected $gender;

	// 2 _ naudojamas abstraktus metodas
	// (betkoks metodas gali buti abstraktus) 
	abstract public function getName();
	abstract public function getGender();

	// 3 _ kuriamas dar vienas abstraktus metodas
	// (nuo amziaus priklausys kokia mokykla lankys)
	abstract public function getSchool($age);

	// 4 _ kuriamas dar vienas abstraktus metodas
	// paverciantis objekta i masyva (visas savybes grazins kap masyva)
	abstract public function toArray();
}
