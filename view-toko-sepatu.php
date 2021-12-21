<html>
    <head>
        <title>Toko Sepatu</title>
    </head>
    <body>
        <center>
            <form action="<?= base_url('tokosepatu/cetak'); ?>" method="post">
            <table bgcolor='green'>
                <tr>
                    <th colspan="3">
                        Toko Sepatu Hiyyih
                        <br/>
                        Form Input Data Sepatu
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>No. Telp</th>
                    <td>:</td>
                    <td>
                        <input type='text' name="notelp" id="notelp">
                    </td>
                </tr>
                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="merksepatu" id="merksepatu">
                            <option value="">Pilih</option>
                            <option value="Nike">Nike</option>
                            <option value="Addidas">Addidas</option>
                            <option value="Kickers">Kickers</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="ukuran" id="ukuran">
                            <option value="">Pilih</option>
                            <option value="30">30</option>
                            <option value="32">32</option>
                            <option value="35">35</option>
                            <option value="40">40</option>
                            <option value="44">44</option>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
</body>
</html>