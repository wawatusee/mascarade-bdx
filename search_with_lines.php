<?php
$dir = __DIR__; // point de départ = dossier actuel
$needle = 'lien-live'; // ce qu'on cherche
$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

foreach ($rii as $file) {
    if ($file->isDir()) continue;
    
    // Cherche dans tous les fichiers texte susceptibles de contenir du HTML/PHP
    $ext = strtolower(pathinfo($file->getFilename(), PATHINFO_EXTENSION));
    if (!in_array($ext, ['php', 'html', 'htm', 'tpl', 'inc'])) continue;
    
    $lines = file($file->getPathname());
    foreach ($lines as $num => $line) {
        if (stripos($line, $needle) !== false) {
            echo $file->getPathname() . ' : ligne ' . ($num + 1) . "\n";
            echo '    ' . trim($line) . "\n\n";
        }
    }
}
