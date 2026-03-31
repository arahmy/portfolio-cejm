<?php require_once __DIR__ . '/../config.php'; ?>
<?php require_once __DIR__ . '/../includes/header.php'; ?>

<section class="card">
    <h1>Mes projets</h1>

    <?php if ($statut === 'pro'): ?>
        <p>Certains projets sont confidentiels car liés à un contexte professionnel.</p>
    <?php else: ?>
        <div class="projects-grid">
            <?php foreach ($projets as $projet): ?>
                <?php if ($projet['valide']): ?>
                    <article class="project-card">
                        <h2><?= htmlspecialchars($projet['titre']) ?></h2>
                        <p><?= htmlspecialchars($projet['description']) ?></p>
                    </article>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>