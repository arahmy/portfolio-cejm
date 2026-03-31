<?php
if (!isset($nom, $email, $baseUrl)) {
    require_once __DIR__ . '/../config.php';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($nom) ?> - Portfolio</title>
    <link rel="stylesheet" href="<?= htmlspecialchars($baseUrl) ?>/assets/css/style.css">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <div class="logo"><?= htmlspecialchars($nom) ?></div>
        <nav class="nav">
            <a href="<?= htmlspecialchars($baseUrl) ?>/index.php">Accueil</a>
            <a href="<?= htmlspecialchars($baseUrl) ?>/vues/cv.php">CV</a>
            <a href="<?= htmlspecialchars($baseUrl) ?>/vues/projets.php">Projets</a>
            <a href="<?= htmlspecialchars($baseUrl) ?>/vues/contact.php">Contact</a>
        </nav>
    </div>
</header>
<main class="container">