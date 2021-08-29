<?php

 require 'db-conn.inc.php';
 
 echo '<table border="1">';
 foreach($connection->query('SELECT * FROM movies')as $record){
     echo '<tr>';
     echo '<td>' . $record['id'] . '</td>';
     echo '<tr>' . $record['title'] . '</td>';
     echo '<tr>' . $record['length'] . '</td>';
     echo '<tr>' . $record['genre'] . '</td>';
     echo '<tr>' . $record['actor'] . '</td>';
     echo '<tr>';
 }
 echo '</table>';
 /*foreach($connection->query('SELECT * FROM movies')as $record){
     print_r($record);
 }*/
?>