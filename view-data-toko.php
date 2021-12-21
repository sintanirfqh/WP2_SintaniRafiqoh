<!DOCTYPE html>
<html>
    <head>
        <title>Data Pembelian</title>
    </head>
    <body>
        <center>
            <table bgcolor='green'>
                <tr>
                    <th colspan="3">
                        Toko Sepatu Hiyyih
                        <br/>
                        Data pembelian
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</th>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>
                <tr>
                    <td>No. Telp</td>
                    <td>:</td>
                    <td>
                        <?= $notelp; ?>
                    </td>
                </tr>
                <tr>
                    <td>Merk Sepatu</td>
                    <td>:</td>
                    <td>
                        <?= $merksepatu; ?>
                    </td>
                </tr>
                <tr>
                    <td>Ukuran Sepatu</td>
                    <td>:</td>
                    <td>
                        <?=$ukuran; ?>
                    </td>
                </tr>
                <tr>
                <td>Harga</td>
                    <td>:</td>
                    <td>
                        <?=$harga; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <button color=blue><a href="<?= 
                        base_url('index.php/tokosepatu') ?>">Kembali</a></button>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>