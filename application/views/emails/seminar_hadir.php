<html>
<head>
    <title>Terimakasih sudah berpartisipasi, <?= $nama; ?>!</title>
</head>
<body>
    <h2>Dear <?= $nama; ?>,</h2>
    <p>Kami ucapkan terimakasih telah berpartisipasi menjadi Peserta Seminar dan hadir di Intermedia Information Technology Competition (IITC) 2020 yang diadakan secara daring online melalui aplikasi Zoom.<br>
    Berikut rincian pendaftaran Anda.</p><br>
    <table>
        <tr>
            <th>ID Pendaftaran:</th>
            <td><?= $id_daf; ?></td>
        </tr>
        <tr>
            <th>Nama Peserta:</th>
            <td><?= $nama; ?></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><?= $emailnya; ?></td>
        </tr>
        <tr>
            <th>Nomor HP/WA:</th>
            <td><?= $nohp; ?></td>
        </td>
    </table>
    <p>Untuk pembagian sertifikatnya, tunggu info selanjutnya dari kami, ya!</p><br>
    Mohon untuk tidak membalas karena email ini dikirimkan secara otomatis oleh sistem.
</body>
</html>