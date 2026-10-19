<?php
$notes = ["Mohamed" => 14, "Sami" => 9, "Amel" => 17,"Yassine" => 8, "Ines" => 12];
foreach($notes as $nom => $note){
    echo "$nom : $note<br>";
}

function moyenne(array $notes):float
{
    return array_sum($notes)/count($notes);
}
print_r(moyenne($notes));
?>