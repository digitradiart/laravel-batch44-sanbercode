<?php
// Tipe Data Array
// tipe data array adalah tipe data yang mampu menampung lebih dari satu data. Elemen dari array ditandai dengan indeks agar dapat diakses. indeks array selalu diawali dengan indeks 0.

// ---------------------------------------
// Deklarasi Array
// membuat array baru dengan cara seperti berikut:
$siswa = array("regy", "bobby", "ahmad");
print_r($siswa);

$trainer = ["abduh", "aghnat", "yoga"];
print_r($trainer);

// ---------------------------------------
// Mengakses Elemen Array
// untuk mengakses elemen pada array kita dapat arahkan dengan menunjuk indeks elemen yang kita inginkan:
$nilai = [12, 14, 19];
// akan menampilkan 12 yang merupakan elemen array indeks ke 0
echo $nilai[0];

// ---------------------------------------
// Menambahkan elemen baru pada array
// terkadang kita ingin menambahkan isi dari array dengan suatu data. caranya adalah dengan $array[] = <data yang ingin ditambahkan>

$siswa = array("regi", "bobby", "ahmad");
// siswa awal sebelum ditambah
print_r($siswa);
$siswa[] = "putri";
// menampilkan siswa setelah ditambah data baru "putri"
print_r($siswa);


// jika data yang ingin ditambahkan lebih dari satu data, kita bisa gunakan metode array_push(). 
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

// count() untuk menghitung panjang array
$keranjang = ["pisang", "apel", "mangga"];
// menampilkan panjang array $keranjang
echo count($keranjang);


// ARRAY ASOSIATIF
// Array Asosiatif adalah tipe array yang dapat menyimpan banyak data sebagai pasangan key dan value. Berbeda dengan array biasa yang menggunakan angka untuk menandai indeks, array asosiatif menggunakan key sebagai indeks yang dapat kita set sendiri.
// penulisan array asosiatif yaitu dengan memasangkan key dan value dengan pemisah tanda panah => .
$siswa1 = ["nama" => "abduh", "kelas" => "laravel", "nilai" => 70];
print_r($siswa1);

$siswa1["hobi"] = "membaca";
print_r($siswa1);
?>