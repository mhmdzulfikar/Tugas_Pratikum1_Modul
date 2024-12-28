<?php
// Fungsi untuk menghitung deret Fibonacci secara rekursif
function fibonacci($n) {
    // Basis rekursif: jika $n 0 atau 1, return nilai $n
    if ($n <= 1) {
        return $n; // mengembalikan nilai n jika n adalah 0 atau 1
    }
    //  menghitung Fibonacci dengan menjumlahkan dua angka sebelumnya
    return fibonacci($n - 1) + fibonacci($n - 2); 
}

$n = 8; // Menentukan angka Fibonacci ke-8 yang ingin dihitung
// Menampilkan hasil perhitungan Fibonacci ke-8
echo "Fibonacci ke-$n adalah: " . fibonacci($n) . "<br />";
?>

<br><br>

<?php
// Fungsi untuk menghitung pangkat secara rekursif
function pangkat($x, $y) {
    // jika $y adalah 0, hasilnya adalah 1 (karena apapun yang dipangkatkan 0 adalah 1)
    if ($y == 0) {
        return 1;
    }
    // menghitung pangkat dengan mengalikan $x dengan pangkat $y-1
    return $x * pangkat($x, $y - 1); 
}
$x = 4; // Nilai yang akan dipangkatkan
$y = 6; // Nilai pangkat
// Menampilkan hasil perhitungan $x^$y
echo "$x^$y = " . pangkat($x, $y) . "<br />";
?>
