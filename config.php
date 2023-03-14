<?php
$regex = [
    'name' => '/^[A-Za-z\- áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]{1,20}$/',
    'username' => '/^[A-Za-z0-9\-_]{3,20}$/',
    'password' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
    'birthdate' => '/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',
];

define('USER_LASTNAME_ERROR_EMPTY', 'Le nom de famille est obligatoire.');
define('USER_LASTNAME_ERROR_INVALID', 'Le nom de famille ne peut comporter que des lettres en majuscule et minuscule, des tirets ou des espaces. Il ne peut contenir que 20 caractères.');

define('USER_FIRSTNAME_ERROR_EMPTY', 'Le prénom est obligatoire.');

define('USER_USERNAME_ERROR_EMPTY', 'Le nom d\'utilisateur est obligatoire.');
define('USER_USERNAME_ERROR_ALREADY_EXISTS', 'Ce nom d\'utilisateur existe déjà.');

define('USER_EMAIL_ERROR_ALREADY_EXISTS', 'Cette adresse mail est déjà utilisée.');
define('USER_EMAIL_ERROR_EMPTY', 'Vous avez oubliez l\'adresse mail');

define('USER_LOGIN_ERROR', 'Le nom d\'utilisateur ou le mot de passe est incorrect.');

define('USER_BIRTHDATE_ERROR', 'La date de naissance est obligatoire.');

define('USER_PASSWORD_ERROR_EMPTY', 'Vous avez oubliez le mot de passe!');
define('USER_PASSWORDSYNTAX_ERROR', 'Le mot de passe n\'est pas correct.');
define('USER_PASSWORDCONFIRM_ERROR_NOTSAME', 'Veuillez entrer le même mot de passe!.');
// define('PASSWORD_DEFAULT', 'Le mot de passe comporte un défaut.');

define('USER_SECONDPASSWORDCONFIM_ERROR', 'non identique');