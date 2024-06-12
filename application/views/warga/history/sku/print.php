<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/css/print.css">
</head>


<body>
    <div class="container mt-3 page">
        <div class="sub-page">
            <center>
                <table width="100%">
                    <tr>
                        <td>
                            <img src="<?= base_url() ?>./assets/logo/logo.png" width="100px" height="130px">
                        </td>
                        <td>
                            <center>
                                <strong>
                                    <h5>PEMERINTAHAN KOTA BANJAR</h5>
                                    <h5>KECAMATAN LANGENSARI</h5>
                                    <h5>DESA KUJANGSARI</h5>
                                    <small> Jl. Kujang No. 77 Desa Kujangsari, Kecamatan Langensari, Kota Banjar, 46324</small>
                                </strong>
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
            <hr>

            <div class="identitas">
                <?php foreach ($data as $d) { ?>
                    <p class="text-end fw-bold">
                        <small>
                            <?= $d->tanggal_surat ?>
                        </small>
                    </p>
                    <span class="text-center">
                        <strong>
                            <p>
                                <u><?= $d->jenis_surat ?></u>
                            </p>
                        </strong>
                        <p>Nomor : <?= $d->nomor_surat ?></p>
                    </span>
                <?php } ?>
            </div>
            <div class="text-surat">
                <p>Yang bertanda tangan di bawah ini:</p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Nama</td>
                            <td>: </td>
                            <td>MUJAHID, S.Ag</td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>: </td>
                            <td>Kepalah Desa Kujangsari</td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal Lahir</td>
                            <td>: </td>
                            <td><?= $d->tempat_lahir ?>, <?= $d->tgl_lahir ?></td>
                        </tr>
                        <tr>
                            <td>Kelurahan/Desa</td>
                            <td>: </td>
                            <td>Kujangsari</td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td>: </td>
                            <td>Langensari / Kota Banjar</td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <p>Menerangkan dengan sesungguhnya bahwa:</p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Nama</td>
                            <td>: </td>
                            <td><?= $d->nama ?></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>: </td>
                            <td><?= $d->nik ?></td>
                        </tr>
                        <tr>
                            <td>Tempat/Tgl Lahir</td>
                            <td>: </td>
                            <td><?= $d->tempat_lahir ?>, <?= $d->tgl_lahir ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: </td>
                            <td><?= $d->alamat ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <?php foreach ($data as $d) { ?>
                    <p>Benar - benar memiliki usaha <span class="fw-bold"><?= $d->nama_usaha ?></span> yang beralamat di <span class="fw-bold"><?= $d->alamat_usaha ?></span></p>
                <?php } ?>
                <br>
                <p style="text-align: justify;">
                    Demikian surat keterangan ini dibuat dengan sebenar-benarnya untuk dapat dipergunakan sebagaimana mestinya.
                </p>
                <br>
                <div class="kades float-end">
                    <span class="mb-n2">Kujangsari, <?= date('d M Y') ?></span>
                    <p>KEPALA DESA KUJANGSARI</p>
                    <img src="<?= base_url('./assets/ttd/ttd.png') ?>" class="ttd-kades" width="80%" style="margin-top: -25px; z-index:9999;">
                    <p class="fw-bold" style="margin-top: -30px; z-index:2;">MUJAHID, S.Ag</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
    </div>
    <script src="<?= base_url(); ?>./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>