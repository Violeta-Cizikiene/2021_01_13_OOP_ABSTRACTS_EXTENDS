<?php

require("Abstract_Child.php");
require("Child.php");

// 11 _ kuriamas vaiku masyvas su duomenimis
$children = [

	new Child('Elija', 'Female', 10),
	new Child('Gabrielius', 'Male', 16),
	new Child('Aidas', 'Male', 40),
	new Child('Arunas', 'Male', 6),
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>OOP_ABSTRACTS_EXTENDS</title>
</head>

<body>

<div class="cardCorntainer">
<?php
// 14 _ foreachinama per masyva, kad atspaudintu i kuria mokykla eina
foreach ($children as $key => $child):
?>
	<!-- 16 _ kuriamos korteles-->
	<div class="card">
		<p>Name of the child is: <?php echo $child->getName()?></p>
		<p>Age: <?php echo $child->getAge()?></p>
		<p>School year is <?php echo $child->getSchool($child->getAge())?></p>
	</div>

<!-- 15 _ baigiasi ciklas -->
<?php endforeach?>
</div>

</body>
</html>	