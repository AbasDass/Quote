<?php
session_start();
require_once '../models/database.php';
require_once '../models/quotesModel.php';
require_once '../models/categoriesModel.php';
require_once '../config.php';

// instance des citations 
$quotesInstance = new quotes;
$categoriesInstance = new quotesCategories;


$postCategoriesList = $categoriesInstance->selectCategories();
if (count($_POST) > 0) {
    try {
    $quotesInstance = new quotes;
    if (!empty($_POST['content'])) {
        if (!preg_match($regex['content'], $_POST['content']));
        $quotesInstance->content = htmlspecialchars($_POST['content']);
    } else {
        $formErrors['content'] = POST_CONTENT_ERROR_INVALID;
    }
    
    if (!empty($_POST['categories'])) {
        $categoriesInstance->id = intval($_POST['categories']);
        if ($categoriesInstance->checkIfCategoriesExist() == 1) {
            $quotesInstance->id_m2r64_categories = $_POST['categories'];
        }
    } else {
        $formErrors['categories'] = POST_CATEGORIE_ERROR_EMPTY;
    }
    if ($_FILES['image']['error'] != 4) {
        if ($_FILES['image']['error'] != 2 && $_FILES['image']['error'] != 3) {
            if ($_FILES['image']['error'] === 0) {
                $authorizedExtensions = [
                    'jpeg' => 'image/jpeg',
                    'jpg' => 'image/jpg',
                    'png' => 'image/png',
                    'gif' => 'image/gif'
                ];
                $fileInfo = pathinfo($_FILES['image']['name']);

                if (!array_key_exists($fileInfo['extension'], $authorizedExtensions) || !in_array(mime_content_type($_FILES['image']['tmp_name']), $authorizedExtensions)) {
                    $formErrors['image'] = POST_IMAGE_ERROR_EXTENSION;
                } 
            } else {
                $formErrors['image'] = GENERAL_IMAGE_ERROR_GENERAL;
            }
        } else {
            $formErrors['image'] = POST_IMAGE_SIZE;
        }
    } else {
        $formErrors['image'] = POST_IMAGE_ERROR_EMPTY;
    }

    if (count($formErrors) == 0) {
        $path = 'upload/' . uniqid() . $fileInfo['extension'];
        if (move_uploaded_file($_FILES['image']['tmp_name'], '../' . $path)) {
            $quotesInstance->image = $path;
            $quotesInstance->id_m2r64_users = $_SESSION['user']['id'];
            $quotesInstance->updateQuote();
            $form = [
                'status' => 'success',
                'message' => POST_ADD_SUCCESS
            ];
            
        } else {
            $formErrors['image'] = FILE_UPLOAD_FAIL;
        }
    }
    
} catch(PDOException $e) {
    $form = [
        'status' => 'fail',
        'message' => GENERAL_ERROR
    ];
}
}

require_once '../views/parts/header.php';
require_once '../views/editQuotes.php';
require_once '../views/parts/footer.php';