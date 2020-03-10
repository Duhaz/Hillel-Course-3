<?php

$dbh = new PDO('mysql:host=mysql;dbname=docker', 'root', 'password');
$dbh = new PDO('postgres:host=postgres;dbname=docker', 'root', 'password');

$a = 10;

phpinfo();