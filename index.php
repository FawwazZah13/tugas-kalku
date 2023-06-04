<?php

include "fungsi.php";
$kalkulator = new Kalkulator;

echo '<h1>ASSESMENT DIAGNOTSIK ARITMATIKA</h1>';
echo '<form method = "POST">';
echo '<input type = "text" name = "x" size = "3"> &nbsp;';
echo '<select name = "operasi">
<option value = "tambah">+</option>
<option value = "kurang">-</option>
<option value = "kali">x</option>
<option value = "bagi">/</option>
</select> &nbsp;';
echo '<input type = "text" name = "y" size = "3"> &nbsp;';
echo '<select name = "operasi">
<option value = "tambah">+</option>
<option value = "kurang">-</option>
<option value = "kali">x</option>
<option value = "bagi">/</option>
</select> &nbsp;';
echo '<input type = "text" name = "c" size = "3"> &nbsp;';
echo '<label> = </label> &nbsp;';
echo '<input type = "submit" value = "Hitung"> &nbsp;';
echo '</form>';

if ($_POST) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $c = $_POST['c'];
    if ($_POST['operasi'] == "tambah") {
        echo "Hasil : " . $x . " + " . $y ." + " . $c . " = " . $kalkulator->setTambah($x, $y,$c) . "<br /><br />";
    } elseif ($_POST['operasi'] == "kurang") {
        echo "Hasil : " . $x . " - " . $y ." - " . $c . " = " . $kalkulator->setKurang($x, $y,$c) . "<br /><br />";
    } elseif ($_POST['operasi'] == "kali") {
        echo "Hasil : " . $x . " x " . $y ." x " . $c . " = " . $kalkulator->setKali($x, $y,$c) . "<br /><br />";
    } elseif ($_POST['operasi'] == "bagi") {
        echo "Hasil : " . $x . " / " . $y ." / " . $c . " = " . $kalkulator->setBagi($x, $y,$c) . "<br /><br />";
    }
}

?>