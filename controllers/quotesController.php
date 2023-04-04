<?php
session_start();
require_once '../models/database.php';
require_once '../models/quotesModel.php';
require_once '../config.php';

$quotesInstance = new quotes;
$quotes = $quotesInstance->selectQuote();
var_dump($quotes);

require_once '../views/parts/header.php';
require_once '../views/quote.php';
require_once '../views/parts/footer.php';
