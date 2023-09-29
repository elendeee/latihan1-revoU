<!DOCTYPE html>
<html>
<head>
    <title>Toko Cat Guna Bangunan Jaya</title>
</head>
<body>
    <h1><strong>Toko Cat Guna Bangunan Jaya</strong></h1>
    <form method="post" action="hasil.php">
        <table>
            <tr>
                <td>Nama Customer:</td>
                <td><input type="text" name="nama_customer"></td>
            </tr>
            <tr>
                <td>Alamat:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Jenis Cat:</td>
                <td>
                    <select name="jenis_cat">
                        <option value="Bituminous Paint">Bituminous Paint</option>
                        <option value="Chlorinated Rubber">Chlorinated Rubber</option>
                        <option value="Vynill">Vynill</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Warna Cat:</td>
                <td>
                    <input type="radio" name="warna" value="Merah">Merah
                    <input type="radio" name="warna" value="Biru">Biru
                    <input type="radio" name="warna" value="Kuning">Kuning
                </td>
            </tr>
            <tr>
                <td>Jumlah Beli:</td>
                <td><input type="text" name="jumlah_beli"></td>
            </tr>
        </table>
        <input type="submit" name="hitung" value="Hitung">
        <input type="reset" name="batal" value="Batal">
    </form>
</body>
</html>
