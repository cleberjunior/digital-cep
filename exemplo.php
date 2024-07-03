<?php

require_once "vendor/autoload.php";

use Cleberjunior\DigitalCep\Search;

$search = new Search;

$result = $search->getAddressFromZipcode('47802303');

print_r($result);