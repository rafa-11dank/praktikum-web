Percabangan If else
<?php
$nilai = 75;
if ($nilai >= 80) {
echo "Nilai Anda A";
} elseif ($nilai >= 70) {
echo "Nilai Anda B";
} else {
echo "Nilai Anda C";
}
?>

Perulangan FOR
<?php
for ($i = 1; $i <= 5; $i++) {
echo "Perulangan ke-" . $i . "<br>";
}
?>

Perulangan WHILE
<?php
$i = 1;
while ($i <= 5) {
echo "Perulangan ke-" . $i . "<br>";
$i++;
}
?>