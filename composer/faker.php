<?php
require_once 'vendor/autoload.php';


$faker = Faker\Factory::create();
echo $faker->name."<br>";
echo $faker->address."<br>";
echo $faker->text."<br>";
for ($i = 0; $i < 10; $i++) {
  echo $faker->name, "<br>";
}

?>