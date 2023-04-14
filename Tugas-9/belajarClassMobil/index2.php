<?php
require_once('Mobil.php');
require_once('Bus.php');

$mobil = new Mobil("toyota");

echo "Merk: " . $mobil->merk . "<br>";
echo "Roda: " . $mobil->roda . "<br>";
echo "Bahan bakar: ". $mobil->bahanBakar . "<br>";
echo "Spion: ". $mobil->spion . "<br><br>";

$bus = new Bus("minibus");
echo "Merk: " . $bus->merk . "<br>";
echo "Roda: " . $bus->roda . "<br>";
echo "Bahan bakar: ". $bus->bahanBakar . "<br>";
echo "Spion: ". $bus->spion . "<br>";
echo $bus->jalan(200) . "<br><br>";