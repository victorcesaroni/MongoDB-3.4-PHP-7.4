<?php

require_once __DIR__ . '/vendor/autoload.php';

$mongodb = new MongoDB\Client;
$db = $mongodb->TestDB;
$collection = $db->users;

$insertOneResult = $collection->insertOne([
    'username' => 'admin',
    'email' => 'admin@example.com',
    'name' => 'Admin User',
]);

var_dump($mongodb);
echo "<br><br>";

var_dump($db);
echo "<br><br>";

printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
echo "<br><br>";

var_dump($insertOneResult->getInsertedId());
echo "<br><br>";

$cursor = $collection->find();
var_dump($cursor);
echo "<br><br>";

foreach ($cursor as $document) {	
    echo "ID: " . $document['_id'] . "<br>";
	var_dump($document);
}

?>
