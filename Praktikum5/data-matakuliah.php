<html>

<head>
    <title>Tampil Data Matakuliah</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Matakuliah
                </th>
            </tr>

            <tr>
                <th colspan="3">
                </th>
            </tr>

            <tr>
                <th> Kode Matkul</th>
                <th> : </th>
                <td>
                    <?= $kode; ?>
                </td>
            </tr>

            <tr>
                <th> Nama Matkul</th>
                <td> : </td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>

            <tr>
                <th> SKS </th>
                <td> : </td>
                <td>
                    <?= $sks; ?>
                </td>
            </tr>

            <tr>
                <th colspan="3" align="center">
                    <a href="<? base_url('matakuliah/index'); ?>">Kembali</a>
                </th>
            </tr>

        </table>
    </center>
</body>

</html>