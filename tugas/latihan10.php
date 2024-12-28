<?php
$take = array ('Mobil','Bus','Truk','Sepeda Motor','Sepeda','Becak','Andong');
sort($take);
echo "<h2>ini sort</h2>";
print_r($take);
echo "<br>Mengurutkan array berdasarkan nilai dari yang terkecil hingga yang terbesar. Indeks asli (key) array akan dihapus dan diganti dengan indeks numerik secara berurutan,
Cocok untuk array numerik atau string tanpa memerlukan key. ";
?>
<br><br><hr>
<?php
$take = array ('Mobil','Bus','Truk','Sepeda Motor','Sepeda','Becak','Andong');
asort($take);
echo "<h2>ini asort </h2>";
print_r($take);
echo "<br> Mengurutkan array berdasarkan nilai dari yang terkecil hingga yang terbesar, tetapi menjaga urutan indeks (key) tetap sesuai dengan nilai yang diurutkan.";
?>

<br><br><hr>
<?php
$take = array ('Mobil','Bus','Truk','Sepeda Motor','Sepeda','Becak','Andong');
ksort($take);
echo "<h2>ini ksort</h2>";
print_r($take) ;
echo "<br> Mengurutkan array berdasarkan key (indeks) dari yang terkecil hingga yang terbesar.";
?>
<br><br><hr>
<?php
$take = array ('Mobil','Bus','Truk','Sepeda Motor','Sepeda','Becak','Andong');
rsort($take);
echo "<h2>ini rsort </h2>";
print_r($take);
echo "<br> Mengurutkan array berdasarkan nilai dari yang terbesar hingga yang terkecil, dan mengubah urutan key sesuai dengan nilai yang diurutkan.";
?>
<br><br><hr>
<?php
$take = array ('Mobil','Bus','Truk','Sepeda Motor','Sepeda','Becak','Andong');
arsort($take);
echo "<h2>ini arsort </h2>";
print_r($take);
echo "<br> Mengurutkan array berdasarkan nilai dari yang terbesar hingga yang terkecil, tetapi mempertahankan urutan key yang sesuai dengan nilai.";
?>
<br><br><hr>
<?php
$take = array ('Mobil','Bus','Truk','Sepeda Motor','Sepeda','Becak','Andong');
krsort($take);
echo "<h2>ini krsort </h2>";
print_r($take);
echo "<br> Mengurutkan array berdasarkan key (indeks) dari yang terbesar hingga yang terkecil.";
?>