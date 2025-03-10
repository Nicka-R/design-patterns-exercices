<?php
// require('../vendor/autoload.php');
require_once __DIR__ . '/../vendor/autoload.php';
use App\MySQLQueryBuilder;
use App\LiteralBuilder;
$builder = new MySQLQueryBuilder();
$sqlQuery = $builder->select(['nom', 'age'])
    ->from('utilisateurs')
    ->where('age', '>', '18')
    ->getQuery();

echo $sqlQuery;