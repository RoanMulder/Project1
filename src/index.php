<?php

require '../vendor/autoload.php';

use Dompdf\Dompdf;

// html die we willen omzetten naar PDF
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="utf-8" />
</head>
<body>
    <h1>Dit is een titel</h1>
    <p>En dit een alinea</p>
</body>
</html>
';

// maak een nieuwe instantie van Dompdf
$dompdf = new Dompdf();

// laad de HTML in Dompdf
$dompdf->loadHtml($html);

// (optioneel) Stel de papiergrootte en oriëntatie in
$dompdf->setPaper('A4', 'portrait');

// Render de PDF
$dompdf->render();

// stuur de PDF naar de browser
$dompdf->stream("document.pdf", ["Attachment" => false]);
?>
