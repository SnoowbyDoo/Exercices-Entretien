<?php
$messyArray = [
    "Marguerite" => "Orange", "Kiwi", 7 => "Pomme",
    [
        "Prune",
        "Cerise" => "Cerise"
    ]
];

//À partir de messyArray afficher "Kiwi"

//À partir de messyArray afficher "Cerise"

//À partir de messyArray supprimer "Prune"

$random_words = ["ape", "apple", "zoo", "pie", "elephant", "banana", "picnic", "eye"];
//Créer un script qui ordonne ce tableau du mot le plus court au mot le plus long.
//Bonus: Si plusieurs mots ont la même longueur trier les par ordre alphabétique



echo $messyArray[0];
echo "\n";
echo $messyArray[8]['Cerise'];
echo "\n";
echo $messyArray[8][0];
echo "\n";


function sortArray($a, $b) {
    if (strlen($a) < strlen($b)) {
        return -1;
    }
    if (strlen($a) > strlen($b)) {
        return 1;
    }
    if (strlen($a) == strlen($b)) {
        return strcmp($a, $b);
    }
}
 
usort($random_words, "sortArray");
echo "\n";
foreach($random_words as $word) {
    echo "$word"." ";
}