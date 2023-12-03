<?php
/* kontakt wprowadzanie danych */
require("polacz.php");
$Imie = $_POST['w1'];
$Naz = $_POST['w2'];
$Mail = $_POST['w3'];
$Tel = $_POST['w4'];
$Wiad = $_POST['w5'];

$sql = "INSERT INTO kontakt(id, imie, nazwisko, mail, telefon, wiadomosc) VALUES ('','$Imie','$Naz','$Mail','$Tel','$Wiad')";
$result = $conn->query($sql);
?>
<?php
/* ankiety wprowadzanie danych */
$a = $POST['p1'];
$b = $POST['p2'];
$c = $POST['p3'];
$d = $POST['p4'];
$e = $POST['p5'];
$f = $POST['p6'];
$g = $POST['p7'];
$h = $POST['p8'];
$i = $POST['p9'];
$j = $POST['p10'];

$sql = "INSERT INTO ankiety(id, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10) VALUES ('','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
$result = $conn->query($sql);
?>