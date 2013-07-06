<?php

require_once __DIR__ . "/../vendor/autoload.php";

use VoteSmart\Client;

// You need to obtain a key
$key = '';

$c = new Client($key, 'json');

print_r( $c->get('Officials.getByZip', array('zip5' => 76131))->json() );