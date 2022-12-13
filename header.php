<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'grafikart' . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'auth.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php if (isset($title)) {
            echo $title;
        } else {
            echo 'Mon site';
        } ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
          crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Mon site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] === "/grafikart/index"):
                ?>active<?php
            endif; ?>">
                <a class="nav-link" href="/grafikart/index.php">Home</span></a>
            </li>
            <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] === "/grafikart/contact.php"):
                ?>active<?php
            endif; ?>">
                <a class="nav-link" href="/grafikart/contact.php">Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <?php if (is_connected()):?>
                <li class="nav-item"><a href="/grafikart/logout.php" class="nav-link">Se déconnecter</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<main role="main" class="container">