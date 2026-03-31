<?php
require_once __DIR__ . '/../config.php';

$messageConfirmation = '';
$nomContact = '';
$messageContact = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomContact = trim($_POST['nom'] ?? '');
    $messageContact = trim($_POST['message'] ?? '');

    if ($nomContact !== '' && $messageContact !== '') {
        $messageConfirmation = 'Merci ' . $nomContact . ', votre message a bien été envoyé.';
    } else {
        $messageConfirmation = 'Merci de remplir tous les champs.';
    }
}

require_once __DIR__ . '/../includes/header.php';
?>

<section class="card">
    <h1>Contact</h1>
    <p>Cette page utilise un formulaire PHP avec traitement en POST, comme demandé dans le TP.</p>

    <?php if ($messageConfirmation !== ''): ?>
        <div class="alert"><?= htmlspecialchars($messageConfirmation) ?></div>
    <?php endif; ?>

    <form method="post" action="">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($nomContact) ?>" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="6" required><?= htmlspecialchars($messageContact) ?></textarea>

        <button type="submit">Envoyer</button>
    </form>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>