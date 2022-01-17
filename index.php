<?php

/**
 * 1. Créez une variable contenant une chaîne de caractères contenant du texte lorem ( 1 seule ligne suffit )
 * 2. Ajouter le contenu de cette variable dans un fichier avec la méthode de votre choix.
 * --> Attention à bien fermer votre fichier si vous utilisez fopen()
 */
// TODO Votre code ici.
$content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque autem facilis maiores ratione.';
$contenu = file_put_contents('fichier.txt',$content);


/**
 * 3. Créez un tableau contenant au moins 10 chaînes de caractère au choix.
 * 4. Faites en sorte d'ajouter chaque chaîne de caractère de ce tableau au fichier créé dans la première partie ( point 2 )
 * --> N'oubliez pas de fermer vos fichiers.
 * --> Attention: les chaînes de caractères doivent s'ajouter à la suite du contenu déjà existant, pas d'écrasement.
 */
// TODO Votre code ici
$array = [
    "première chaine",
    "deuxième chaine",
    "troisième chaine",
    "quatrième chaine",
    "cinquième chaine",
    "sixième chaine",
    "septième ciel euh chaine",
    "huitième chaine",
    "neuvième chaine",
    "dixième chaine",
];

foreach ($array as $item) {
    file_put_contents('fichier.txt', "\n" . $item, FILE_APPEND);
}

/**
 * 5. Trouvez une solution pour afficher à l'aide d'un simple echo l'extension du fichier index.php
 */
// TODO Votre code ici
echo nl2br(file_get_contents('fichier.txt')) . "<br>";


/**
 * 6. Testez si le fichier 'toto' existe, sil n'existe pas, afficher un texte distant que ce fichier n'existe pas !
 */
// TODO Votre code ici.
$file = 'toto.txt';
if(file_exists($file)){
    echo 'ce fichier existe';
}
else {
    echo 'fichier inconnu au bataillon. Merci de vous renseigner un peu mieux';
}

/**
 * Super bonus.
 * Parcourrez votre fichier, à chaque fois que vous rencontrez le caractère 'a', remplacez le par le caractère '@'
 * Attention, il y a un piège avec les pointeurs, et une manière très simple de procéder... réfléchissez...
 */
// TODO Votre code ici si vous faites le bonus.

$fichier = 'fichier.txt';

$contenu = str_replace('a', '@', file_get_contents($fichier));
file_put_contents($fichier, $contenu);