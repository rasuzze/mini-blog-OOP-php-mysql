<?php
require_once 'database.php'; // includiname duomenų bazės prisijungimą
require_once 'PublicationRepository.class.php'; // includiman PublicationRepository klasę
// sukuriame naują PublicationRepository tipo objektą, jam paduodami PDO objektą (kurį kuriame database.php faile)
$publicationRepository = new PublicationRepository($pdo);
// paprašome repozitorijos, kad duotų masyvą su visom publikacijom
$publications = $publicationRepository->getAll();
// spausdiname kiekvieną iš publikacijų
foreach ($publications as $publication): ?>
<div style="border: 1px solid black">
    <h1><?php echo $publication->getTitle() ?></h1>
    <p><?php echo $publication->getContent() ?></p>
</div>
<?php endforeach;