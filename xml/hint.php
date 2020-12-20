<?php


$a[]="1 January 2020-	New Year’s Day";
$a[]="11 January 2020-Missionary Day";
$a[]="15 January 2020-	Bhogi/Pongal/Makar Sankranti/Bhogali Bihu/Tusu Puja/Lohri/Hadaga";
$a[]="21 February 2020-Maha Shivaratri";
$a[]="BillyBatson";
$a[]="Black Panther";
$a[]="Bucky";
$a[]="captain America";
$a[]="captain Marvel";
$a[]="Daredevil";
$a[]="DeadShot";
$a[]="Deadpool";
$a[]="Doctor Strange";
$a[]="Eddie brock";
$a[]="Emma Frost";
$a[]="Flash";
$a[]="Falcon";
$a[]="Fire storm";
$a[]="Green lantern";
$a[]="Hawkeye";
$a[]="HawKGirl";
$a[]="Hulk";
$a[]="Ironman";
$a[]="IronFist";
$a[]="jade";
$a[]="Jay Garrick";
$a[]="Jean Grey";
$a[]="KiloWog";
$a[]="kyle Rayner";
$a[]="KillMonger";
$a[]="Luke Cage";
$a[]="Martian ManHunter";
$a[]="Moon Knight";
$a[]="Nova";
$a[]="Orion";
$a[]="Professor X";
$a[]="Prowler";
$a[]="QuickSilver";
$a[]="Ray palmer";
$a[]="Rogue";
$a[]="Scarlet Witch";
$a[]="Silver Surfer";
$a[]="Spider-Man";
$a[]="Steel";
$a[]="Strom";
$a[]="SuperGirl";
$a[]="SuperMan";
$a[]="Thing";
$a[]="Thor";
$a[]="u.s.Agent";
$a[]="Union Jack";
$a[]="Vision";
$a[]="Vixen";
$a[]="War Machine";
$a[]="Wolverine";
$a[]="Wonder Woman";
$a[]="14-Valentine's day";
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?> 