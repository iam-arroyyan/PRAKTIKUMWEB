<?php 
    echo "Hello, World!";
    echo "<br> <br>";

    $nim = "1234567890";
    $nama = "SUMANTO";

    echo "NIM: " , $nim;
    echo "<br>";
    echo "Nama: " , $nama;
    echo "<br> <br>";
?>

<?php 
    define(constant_name: "NAMA", value : "SARI");
    define(constant_name: "NIM", value : "09876543210");
    echo "NIM: " , NIM;
    echo "<br>";
    echo "Nama: " , NAMA;
    echo "<br> <br>";   
?>

<!-- KONSTANTA -->

<h2>Ini Materi Konstanta</h2>

<pre> 
<?php 
    define(constant_name: "UNIVERSITAS", value : "UNIVERSITAS TELKOM SURABAYA");
    echo "Selamat datang di " . UNIVERSITAS;
?>
</pre>

<!-- OPERATOR -->
<h2>Tes Operator</h2>

<?php 
    $a = 10;
    $b = 5;

    echo "Tambah: " . ($a + $b) . "<br>"; 
    echo "Kurang: " . ($a - $b) . "<br>";
    echo "Kali: " . ($a * $b) . "<br>";
    echo "Bagi: " . ($a / $b) . "<br>";
?>

<!-- KONDISI  -->

<h2>Kondisi</h2>
<pre>
<?php 
    $nilai = 85;

    if ($nilai >= 75) {
        echo "Selamat, Lulus!";
    } else {
        echo "Maaf, Tidak Lulus.";
    }

    echo "<br>";

    $grade = "B";
    switch ($grade) {
        case "A":
            echo "Nilai Sangat Baik"; break;
        case "B":
            echo "Nilai Baik"; break;
        default:
            echo "Nilai Kurang"; break;
    }
?>
</pre>

<!-- LOOPING -->
<h2>Perulangan / Looping</h2>
<pre>
<?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Match ke-" . $i . "<br>";
    }

    echo "<br>";

    $i = 1;
    while ($i <=3) {
        echo "Angka: " . $i . "<br>";
        $i++;
    }

    echo "<br>";

    $warna = ["merah", "hijau", "biru"];
    foreach ($warna as $w) {
        echo "Warna: " . $w . "<br>";
    }

?>
</pre>

<hr>

<!-- FUNCTION -->

<h2>Fungsi</h2>

<pre>
<?php 
    function luasSegitiga($alas, $tinggi): float|int {
        return 0.5 * $alas * $tinggi;
    }
    echo "Luas Segitiga(alas=50, tinggi=10): " . luasSegitiga(50, 10);
?>
</pre>

<hr>

<!-- ARRAY -->

<h2>Array - List</h2>
<pre>
<?php   
    $buah = array("apel1", "apel2", "apel3");
    echo "Buah pertama: " . $buah[0] . "<br>";
    echo "Buah kedua: " . $buah[1] . "<br>";
    echo "Buah ketiga: " . $buah[2] . "<br>";

    echo "<br>";

    $mhs = [
        "nama" => "BUDI",
        "nim" => "1122334455",
        "jurusan" => "TEKNIK INFORMATIKA"
    ];
    echo "Nama Mahasiswa: " . $mhs["nama"] . "<br>";
    echo "NIM Mahasiswa: " . $mhs["nim"] . "<br>";
    echo "Jurusan Mahasiswa: " . $mhs["jurusan"] . "<br>";
?>
</pre>
