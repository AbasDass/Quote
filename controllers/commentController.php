<?php
session_start();
require_once '../models/database.php';
require_once '../models/commentsModel.php';
require_once '../models/quotesModel.php';
require_once '../config.php';

// contenu des citations



// $result = $quote->selectQuote();
// $id = $_GET['id'];
// $displays = array_filter($result, function($quote) use ($id){
//     return $quote->id == $id;
// } );
// $display = reset($displays);


$quotesInstance = new quotes;
$quotes = $quotesInstance->selectQuote();


if(count($_POST) > 0){
    $comment = new comments;
    if(!empty($_POST['comment'])){
        if(!preg_match($regex['content'], $_POST['comment'])){
            $comment->content = $_POST['comment'];
            $comment->id_m2r64_users = $_SESSION['user']['id'];
            $comment->id_m2r64_citations = $_GET['id'];
            $comment->insert();
        }else{
            $formErrors['comment'] = COMMENT_ERROR_INVALID;
        }
    }else{
        $formErrors['comment'] = COMMENT_ERROR_EMPTY;
    }
}  
var_dump($quote);

require_once '../views/parts/header.php';
require_once '../views/comment.php';
require_once '../views/parts/footer.php';