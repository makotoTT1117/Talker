<?php

require 'db-pswd.inc.php';

try {

    $connection = new PDO('mysql:host=mysql;dbname=talker_db', DOCKER[0], DOCKER[1]);

    //print "Success! Connected to the database!";

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>