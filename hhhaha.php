
<?php



echo "Opdracht 9<br>";
function inhoud($lengte, $breedte, $hoogte){
  return $lengte$breedte$hoogte;
}

$poo= inhoud(10, 20, 30);
echo "Inhoud=$poo<br>";

$poo= inhoud(7, 45, 38);
echo "Inhoud=$poo<br>";

$poo= inhoud(15, 6, 90);
echo "Inhoud=$poo<br>";

num2month("oktober");
num2month("Maart");
num2month("Juni");



function num2month($num){
    if($num== "oktober"){
        echo "De maand met nummer 3 heeft de naam:$num<br>";
    }elseif($num=="Maart"){
        echo "De maand met nummer 7 heeft de naam:$num<br>";
    } else{
        echo "De maand met nummer 8 heeft de naam:$num<br>";
    }

}


function show_address2($name, $street, $city){
    return $name . $street . $city;

}

$adres= show_address2("Simon<br>","zwaagdijk<br>","amsterdam<br>");
echo "<br>$adres<br>";

$adres2= show_address2("Mark<br>","zwaagdijk 15<br>","Rotterdam<br>");
echo "$adres2<br>";


sickel(12);
function sickel($som1){
    $result= $som129;
    echo   "$som1 Sickels zijn $result Knotsen";


}

inhoud1(12,13,"spaanmaat");
function inhoud1($lengte, $breedte, $hout){
    $som2= $lengte$breedte;
    $prijs=$som2*12;
    echo"<br>$som2 m2 $hout kost $prijs euro<br>";

}

bonus(50);
function bonus($bonus){
    if($bonus <4 && $bonus >0){
        echo "<br>Helaas je hebt geen bonus verdiend<br>";
    } elseif($bonus >3 && $bonus<11){
       echo "Gefeliciteerd je hebt 10 euro bonus verdiend<br>";

    }elseif($bonus >10 && $bonus<21){
        echo "<br>Gefeliciteerd je hebt 25 euro bonus verdiend<br>";

    }else{
        echo "<br>Gefeliciteerd je hebt 50 euro bonus verdiend<br>";
    }
}
?>