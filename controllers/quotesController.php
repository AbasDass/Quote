<?php
require_once '../models/database.php';
require_once '../models/quotesModel.php';
require_once '../config.php';

$quotesInstance = new quotes;
$quotes = $quotesInstance->getQuote();

$result = 'salut';


require_once '../views/parts/header.php';
require_once '../index.php';
require_once '../views/parts/footer.php';
