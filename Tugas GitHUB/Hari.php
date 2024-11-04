<?php
// Cek apakah form telah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Baca input dari pengguna
    $bilangan1 = floatval($_POST['bilangan1']);
    $bilangan2 = floatval($_POST['bilangan2']);
    $pilihan = intval($_POST['pilihan']);
    $hasil = 0;

    // Proses berdasarkan pilihan
    switch ($pilihan) {
        case 1:
            $hasil = $bilangan1 + $bilangan2;
            echo "Hasil Penjumlahan: " . $hasil;
            break;
        case 2:
            $hasil = $bilangan1 - $bilangan2;
            echo "Hasil Pengurangan: " . $hasil;
            break;
        case 3:
            $hasil = $bilangan1 * $bilangan2;
            echo "Hasil Perkalian: " . $hasil;
            break;
        case 4:
            // Cek untuk pembagian dengan nol
            if ($bilangan2 != 0) {
                $hasil = $bilangan1 / $bilangan2;
                echo "Hasil Pembagian: " . $hasil;
            } else {
                echo "Error: Pembagian dengan nol tidak diperbolehkan.";
            }
            break;
        default:
            echo "Pilihan yang anda pilih tidak ada.";
            break;
    }
}
?>

<!-- Form input -->
<form method="post" action="">
    <label for="bilangan1">Masukkan Bilangan Pertama:</label>
    <input type="number" step="any" id="bilangan1" name="bilangan1" required>
    
    <label for="bilangan2">Masukkan Bilangan Kedua:</label>
    <input type="number" step="any" id="bilangan2" name="bilangan2" required>
    
    <label for="pilihan">Pilih Operasi:</label>
    <select id="pilihan" name="pilihan" required>
        <option value="">--Pilih--</option>
        <option value="1">Penjumlahan</option>
        <option value="2">Pengurangan</option>
        <option value="3">Perkalian</option>
        <option value="4">Pembagian</option>
    </select>

    <input type="submit" value="Hitung">
</form>