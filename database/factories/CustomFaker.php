<?php

use App\Providers\CustomFakerServiceProvider;
use Faker\Factory;

$faker = Factory::create('id_ID');

$phoneNumberGenerator = function () use ($faker) {
    $prefixes = ['0811', '0812', '0813', '0821', '0822', '0823', '0851', '0852', '0853', '0881', '0882', '0883', '0896', '0897', '0898', '0899'];
    $prefix = $faker->randomElement($prefixes);
    $number = $faker->numberBetween(1000, 9999) . $faker->numberBetween(1000, 9999);
    return $prefix . $number;
};

return [
    'phoneNumberGenerator' => $phoneNumberGenerator
];
