<?php
//Soal Ke-1
echo "Soal Ke-1<br>";
echo "<br>";
function maximum($a, $b)
{
 $max = $a; 
 if ($b> $max) { 
  $max = $b;
 } 
 echo "Nilai terbesar adalah". $max."<br>";
 echo "<br>";
}
maximum(15, 10);

?>
<!DOCTYPE html>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas ke 2</title>
</head>
<body>
    <h2>Masukan angka (0-6)</h2>
    <form method="post">
        <input type="number" name="angka" min="0" max="6">
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $angka = intval($_POST['angka']);

        $hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        if($angka >= 0 && $angka <= 6){
            echo $hari[$angka];
        }else{
            echo "Angka tidak valid";
        }
    }
    ?>
</body>
</html>
