<?php
$notes = ["Mohamed" => 14, "Sami" => 9, "Amel" => 17,"Yassine" => 8, "Ines" => 12];
foreach($notes as $nom => $note){
    echo "$nom : $note<br>";
}
$moyenne=array_sum($notes)/count($notes);
echo "moyenne:$moyenne";
?>