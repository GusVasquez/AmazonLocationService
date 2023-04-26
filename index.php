<?php

require './vendor/autoload.php';

use Aws\LocationService\LocationServiceClient;

/**
 * Documentacion 
 * https://docs.aws.amazon.com/aws-sdk-php/v3/api/class-Aws.LocationService.LocationServiceClient.html
 */


$client = new LocationServiceClient([
    'profile' => 'default',
    'version' => '2020-11-19',
    'region' => 'us-east-2'
]);

$result = $client->searchPlaceIndexForText([
    'IndexName' => 'explore.place',
    'Text' => 'boulevard los condores 4744 lampa',
    'FilterCountries' => ['CHL'],
]);

echo "<pre>";
print_r($result);
