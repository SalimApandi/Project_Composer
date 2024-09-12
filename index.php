<?php

require_once 'vendor/autoload.php';
$faker = Faker\Factory::create('ph_PH');
for ($i = 0; $i < 5; $i++) {
    echo $faker->name() . "<br>";
}

?>