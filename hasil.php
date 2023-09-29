<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<style>
        .judul {
            text-align: center;
            font-weight: bold;
            font-size: 24px;
        }
</style>
<body>
    <?php
    function hitungHarga($jenis_cat) {
        switch ($jenis_cat) {
            case 'Bituminous Paint':
                return 20000;
            case 'Chlorinated Rubber':
                return 30000;
            case 'Vynill':
                return 40000;
            default:
                return 0;
        }
    }

    if (isset($_POST['hitung'])) {
        $nama_customer = $_POST['nama_customer'];
        $alamat = $_POST['alamat'];
        $jenis_cat = $_POST['jenis_cat'];
        $warna = $_POST['warna'];
        $jumlah_beli = $_POST['jumlah_beli'];

        $harga = hitungHarga($jenis_cat);
        $total_harga = $harga * $jumlah_beli;

        // Menghitung diskon
        if ($jumlah_beli >= 5 && $jumlah_beli < 10) {
            $diskon = 0.05 * $total_harga;
        } elseif ($jumlah_beli >= 10) {
            $diskon = 0.10 * $total_harga;
        } else {
            $diskon = 0;
        }

        $total_bayar = $total_harga - $diskon;
    }
    ?>
    <table>
        <tr>
            <td>----------------------------------------------------------------------------------------------</td>
        </tr>
        <tr>
            <td class="judul">Toko Cat bangunan Jaya</td>
        </tr>
        <tr>
            <td>----------------------------------------------------------------------------------------------</td>
        </tr>
        <tr>
            <td>Nama Costumer   :</td>
            <td><?= $nama_customer ?></td>
        </tr>
        <tr>
            <td>Alamat          :</td>
            <td><?= $alamat ?></td>
        </tr>
        <tr>
            <td>Jenis Cat       :</td>
            <td><?= $jenis_cat ?></td>
        </tr>
        <tr>
            <td>Warna           :</td>
            <td><?= $warna ?></td>
        </tr>
        <tr>
            <td>Harga       :</td>
            <td>Rp. <?= number_format($harga, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <td>Jumlah Beli     :</td>
            <td><?= $jumlah_beli ?></td>
        </tr>
        <tr>
            <td>------------------------------------------------------------------------------------------  (*)</td>
        </tr>
        <tr>
            <td>Total Harga :</td>
            <td>Rp. <?= number_format($total_harga, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <td>Diskon :</td>
            <td>Rp. <?= number_format($diskon, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <td>------------------------------------------------------------------------------------------  (-)</td>
        </tr>
        <tr>
            <td>Total Bayar :</td>
            <td>Rp. <?= number_format($total_bayar, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <td>----------------------------------------------------------------------------------------------</td>
        </tr>
    </table>
</body>
</html>
