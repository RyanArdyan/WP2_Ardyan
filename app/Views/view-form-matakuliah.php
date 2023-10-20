<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Mata Kuliah</title>
</head>
<body>
    <!-- membuat seluruh anak menjadi tengah -->
    <center>
        <!-- panggil url matakuliah/cetak, panggil route tipe kirim -->
        <form action="<?= base_url('matakuliah/cetak') ?>" method="post">
            <?= csrf_field() ?>
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <th colspan="3">
                        <hr>
                    </th>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <th>
                        <input type="text" name="kode" id="kode">
                    </th>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <th>:</th>
                    <th>
                        <input type="text" name="nama" id="nama">
                    </th>
                </tr>
                <tr>
                    <th>SKS</th>
                    <th>:</th>
                    <th>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <button type="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>