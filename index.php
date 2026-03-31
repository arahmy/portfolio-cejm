<?php require_once __DIR__ . '/config.php'; ?>
<?php require_once __DIR__ . '/includes/header.php'; ?>

<section class="card hero">
    <p class="badge">Portfolio PHP dynamique</p>
    <h1><?= htmlspecialchars($salutation) ?>, je suis <?= htmlspecialchars($nom) ?></h1>
    <p>
        Bienvenue sur mon portfolio BTS SIO. Il est généré dynamiquement avec PHP
        et hébergé sur mon VPS personnel.
    </p>
    <p><strong>Heure actuelle :</strong> <?= date('H:i') ?></p>
    <a class="button" href="mailto:<?= htmlspecialchars($email) ?>">Me contacter</a>
</section>

<section class="card">
    <h2>Présentation</h2>
    <p>
        Je suis étudiant en BTS SIO et passionné par le développement web,
        l’administration système et l’hébergement d’applications.
    </p>
    <p>
        Ce portfolio respecte les attentes du TP : variables PHP, conditions,
        boucles, pages séparées et contenu dynamique.
    </p>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>