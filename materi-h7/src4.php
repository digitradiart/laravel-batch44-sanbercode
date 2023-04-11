<?php
// METODE STRING
// strlen untuk mengetahui panjang dari sebuah string :

$jargon = "Tetap santai dan berkualitas";
echo strlen($jargon); //28 karakter

echo strlen("Halo semua!"); // 11 karakter


// strcmp digunakan untuk membandingkan kesamaan di antara dua variabel string. output dari metode ini yaitu berupa tipe data logika boolean (true atau false).

$passwordAsli = "Belajar PHP";
$passwordInput = "Belajar PHP";
$output = strcmp($passwordAsli, $passwordInput);
if ($output !== 0) {
    echo "Jawaban Anda salah";
} else {
    echo "Jawaban Anda benar";
}

// strtoupper digunakan untuk membuat sebuah string menjadi ditulis ke dalam karakter kapital.
$statement = "ini gak marah, cuma caps";
echo strtoupper($statement);


// strtolower kebalikan dari strtoupper yaitu membuat suatu string ditulis menjadi karakter-karakter non-kapital.
echo strtolower($statement);

// strpos untuk mengakses suatu karakter atau kumpulan karakter tertentu pada string. 
$kalimat = "saya sedang belajar PHP";
$katayangdicari = "PHP";
$posisi = strpos($kalimat, $katayangdicari);
echo $posisi;

// str_word_count berfungsi untuk menghitung jumlah kata pada string
$kalimat2 = "Selamat datang di Sanbercode";
echo str_word_count($kalimat2); // ada 4 kata

// substr
// metode substr untuk mengambil beberapa karakter pada string. menerima 3 parameter (<string yang ingin dipotong>, <indeks mulai potong>, <panjang yang ingin dipotong>).
// indeks mulai potong dapat bernilai minus yang berarti mulai indeks dari karakter paling belakang.

$string = "saya suka PHP";
// akan menampilkan suka PHP
echo substr($string, 5, 8);

// akan menampilkan PH
echo substr($string, -3, 2); 

?>