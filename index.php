<?php
require_once 'models/QueryBuilder.php';

$queryBuilder = QueryBuilder::table('users');

$queryBuilder->select("*")
    ->where(["id", ">", "5"])
    ->where(["id", "<", "10"])
    ->orderBy('');
echo $queryBuilder->buildQuery();

require_once "router/Router.php";
?>