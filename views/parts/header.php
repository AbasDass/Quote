<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="/accueil" class="titleStyle" title="Accueil">Quote</a></li>
        </ul>
        <ul>
            <?php if (!isset($_SESSION['user'])) { ?>
                <style type='text/css'> .creer {display: none;} </style>
            <?php
            }
            ?>
            <?php if (!isset($_SESSION['user'])) { ?>
                <style type='text/css'> .modifiers {display: none;} </style>
            <?php
            }
            ?>
            <?php if (!isset($_SESSION['user'])) { ?>
                <style type='text/css'> .citations {display: none;} </style>
            <?php
            }
            ?>

            <?php if (!isset($_SESSION['user'])) { ?>
                <style type='text/css'> .commentaires {display: none;} </style>
            <?php
            }
            ?>    

            <?php if (isset($_SESSION['user'])) { ?>
                <style type='text/css'> .connexion {display: none;} </style>
            <?php
            }
            ?>

            <?php if (!isset($_SESSION['user'])) { ?>
                <style type='text/css'> .deconnexion {display: none;} </style>
            <?php
            }
            ?>

            <?php if (isset($_SESSION['user'])) { ?>
                <style type='text/css'> .inscription {display: none;} </style>
            <?php
            }
            ?>
            <li class="citations"><a href="/quotes" title="Citation">Citations</a></li>
            <li class="creer"><a href="/creation" title="Citation">Créer</a></li>
            <li class="modifiers"><a href="/modifier" title="Modifier">Modifier</a></li>
            <li class="commentaires"><a href="/comments" title="Publication">Commentaires</a></li>
            <li class="connexion"><a href="/connexion"  title="Connexion">Connexion</a></li>
            <li class="deconnexion"><a href="/deconnexion" title="deconnexion"><img src="/assets/img/icons8-se-déconnecter-48 (1).png" alt="logo de déconnexion"></a></li>
            <li class="inscription"><a href="/inscription" title="Inscription">Inscription</a></li>
        </ul>
    </nav>