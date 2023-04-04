<?php
session_start();
require_once '../models/database.php';
require_once '../models/commentsModel.php';
require_once '../models/quotesModel.php';
require_once '../config.php';

$quotesInstance = new quotes;
$quotes = $quotesInstance->selectQuote();


// $quote->id = $_GET['id'];



$comment = new comments;
var_dump($comment);

// $quoteContent = $quote->selectQuote();
// if(count($_POST) > 0){
//     if(!empty($_POST['msgComment'])){
//         if(!preg_match($regex['content'], $_POST['msgComment'])){
//             $comment->content = $_POST['msgComment'];
//             $comment->id_m2r64_users = $_SESSION['user']['id'];
//             $comment->id_m2r64_citations = $_GET['id'];
//             $comment->insert();
//         }else{
//             $formErrors['comment'] = COMMENT_ERROR_INVALID;
//         }
//     }else{
//         $formErrors['comment'] = COMMENT_ERROR_EMPTY;
//     }
   
// }  


require_once '../views/parts/header.php';
require_once '../views/comment.php';
require_once '../views/parts/footer.php';

























require_once '../views/parts/header.php';
require_once '../index.php';
require_once '../views/parts/footer.php';
