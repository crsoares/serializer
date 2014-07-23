<?php

require_once "../vendor/autoload.php";

use JMS\Serializer\SerializerBuilder;
use Entity\User;

$obj = new User();
//$obj->setId(12);

$serializer = SerializerBuilder::create()->build();
$obj = $serializer->serialize($obj, 'json');
print_r($obj);

/*$obj = $serializer->deserialize($obj, 'Entity\User', 'json');
print_r($obj);*/