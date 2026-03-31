<?php
declare(strict_types=1);

$nom = 'Arthur Rahmy';
$promo = 2026;
$email = 'me@arahmy.com';
$telephone = '+33 6 00 00 00 00';
$statut = 'etudiant'; // etudiant ou pro

$baseUrl = '/portfolio'; // mets '' si ton site est à la racine du domaine

$projets = [
    [
        'titre' => 'Newsletter HTML & CSS',
        'description' => 'Intégration responsive d’une newsletter moderne en HTML/CSS.',
        'valide' => true
    ],
    [
        'titre' => 'StartUp Bootstrap',
        'description' => 'Création d’une landing page avec composants Bootstrap.',
        'valide' => true
    ],
    [
        'titre' => 'Projet client VPS',
        'description' => 'Projet hébergé sur infrastructure personnelle avec configuration serveur.',
        'valide' => false
    ]
];

$competences = [
    'HTML / CSS',
    'Bootstrap',
    'PHP',
    'MySQL',
    'Git',
    'Méthode Agile',
    'Linux / Debian',
    'Nginx'
];

date_default_timezone_set('Europe/Paris');

$heure = (int) date('H');
if ($heure < 12) {
    $salutation = 'Bonjour';
} elseif ($heure < 18) {
    $salutation = 'Bon après-midi';
} else {
    $salutation = 'Bonsoir';
}
?>