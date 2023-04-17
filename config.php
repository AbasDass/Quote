<?php
$regex = [
    'name' => '/^[A-Za-z\- áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]{1,20}$/',
    'username' => '/^[A-Za-z0-9\-_]{3,20}$/',
    'password' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
    'birthdate' => '/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',
    'content' => '/(<script>)/',
];

$formErrors = [];

define('GENERAL_ERROR', 'Une erreur est survenue, veuillez réessayer. Si le problème persiste, merci de <a href="mailto:boitemailbidon@mailbidon.fr">nous contacter</a>.');

define('USER_USERNAME_ERROR_EMPTY', 'Le nom d\'utilisateur est obligatoire.');
define('USER_USERNAME_ERROR_INVALID', 'Le nom d\'utilisateur ne peut comporter que des lettres en majuscule et minuscule, des chiffres, des tirets et des underscores.');
define('USER_USERNAME_ERROR_ALREADY_EXISTS', 'Ce nom d\'utilisateur existe déjà.');

define('USER_BIRTHDATE_ERROR_EMPTY', 'La date de naissance est obligatoire.');
define('USER_BIRTHDATE_ERROR_INVALID', 'La date de naissance doit être au format jj/mm/aaaa.');

define('USER_EMAIL_ERROR_EMPTY', 'L\'adresse mail est obligatoire.');
define('USER_EMAIL_ERROR_INVALID', 'L\'adresse mail ne peut comporter que des lettres non accentués, des chiffres, des tirets et des underscores');
define('USER_EMAIL_ERROR_ALREADY_EXISTS', 'Cette adresse mail est déjà utilisée.');

define('USER_PASSWORD_ERROR_EMPTY', 'Le mot de passe est obligatoire.');
define('USER_PASSWORD_ERROR_INVALID', 'Le mot de passe doit comporter au moins lettre en minuscule, une lettre en majuscule, un chiffre, un caractère spécial et au moins 8 caractères.');
define('USER_PASSWORD_CONFIRM_ERROR_EMPTY', 'La confirmation du mot de passe est obligatoire.');
define('USER_PASSWORD_ERROR_DIFFERENT_PASSWORD', 'Les mots de passes sont différents.');

define('USER_REGISTER_SUCCESS', 'Votre compte a été créé. Vous pouvez dès maintenant <a href="/connexion">vous connecter</a>.');
define('USER_LOGIN_ERROR', 'Le nom d\'utilisateur ou le mot de passe est incorrect.');


// define('COMMENT_ERROR_EMPTY', 'Le texte est obligatoire.');
// define('COMMENT_ERROR_INVALID', 'L\'utilisation de la balise script est inerdite.');

define('POST_ERROR', 'Vous devez remplir les champs');
define('POST_TITLE_ERROR_EMPTY', 'Le titre est obligatoire');
define('POST_TITLE_ERROR_TOO_LONG', 'le titre ne peut contenir que 100 caractères au maximum.');
define('POST_CONTENT_ERROR_INVALID', 'l\'utilisateur de la balise script est interdit, merci de vous barrer !!');

define('POST_CATEGORIE_ERROR_INVALID', 'La catégories est obligatoire' );
define('POST_CATEGORIE_ERROR_EMPTY', 'La catégories est obligatoire' );

define('POST_IMAGE_ERROR_EMPTY', 'l\'image est obligatoire');
define('POST_IMAGE_SIZE', 'l\'image est trop lourde');
define('GENERAL_IMAGE_ERROR_GENERAL','Une erreur est survenue.');
define('POST_IMAGE_ERROR_EXTENSION', 'le fichier doit être au format git, jpeg, jpg, webp');
define('FILE_UPLOAD_FAIL', 'Le téléchargement à échou');
define('POST_ADD_SUCCESS', 'L\'article a bien été créé');

define('COMMENT_ERROR_EMPTY', 'Le texte est obligatoire.');
define('COMMENT_ERROR_INVALID', 'L\'utilisation de la balise script est inerdite.');