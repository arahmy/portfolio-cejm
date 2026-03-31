<?php require_once __DIR__ . '/../config.php'; ?>
<?php require_once __DIR__ . '/../includes/header.php'; ?>

<?php
$pdfCvUrl = 'https://atlas.arahmy.com/v2/uploads/resources/69c63c6c4365b_CV%20Alternance.pdf#toolbar=1&navpanes=1&scrollbar=1&view=FitH';
?>

<section class="card">
    <h1>CV / Compétences</h1>
    <p>
        Cette page présente mes compétences en PHP et intègre également mon CV au format PDF.
    </p>

    <p class="pdf-meta">
        Lien vers le document :
        <a href="<?= htmlspecialchars($pdfCvUrl) ?>" target="_blank" rel="noopener noreferrer">
            Ouvrir le CV dans un nouvel onglet
        </a>
    </p>
</section>

<section class="card">
    <h2>Compétences</h2>
    <ul class="skills-list">
        <?php foreach ($competences as $competence): ?>
            <li><?= htmlspecialchars($competence) ?></li>
        <?php endforeach; ?>
    </ul>
</section>


<?php require_once __DIR__ . '/../includes/footer.php'; ?>