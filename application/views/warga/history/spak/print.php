<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/css/print.css">
    <style>
        .kades {
            text-align: center;
            margin-top: 40px;
        }

        .kades .ttd-kades {
            width: 300px;
            /* Adjusted width */
            height: auto;
            /* Maintain aspect ratio */
            margin-top: -25px;
            /* Move logo upwards */
        }

        .kades .kades-name {
            margin-top: -10px;
        }

        .table-info td {
            padding: 3px 10px;
        }

        .identitas,
        .text-surat,
        .kades {
            margin: 20px 0;
        }

        .identitas p,
        .text-surat p {
            margin: 10px 0;
        }

        .header-text h5 {
            font-size: 1.2em;
            /* Increase font size */
            margin: 0;
            font-weight: bold;
        }

        .header-text small {
            font-size: 0.9em;
            /* Adjust size for small text */
        }
    </style>
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
                                <div class="header-text">
                                    <h5>PEMERINTAHAN KOTA BANJAR</h5>
                                    <h5>KECAMATAN LANGENSARI</h5>
                                    <h5>DESA KUJANGSARI</h5>
                                    <small>Jl. Kujang No. 77 Desa Kujangsari, KEC. Langensari, Kota Banjar, 46324</small>
                                </div>
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
                        <p>Nomor: <?= $d->nomor_surat ?></p>
                    </span>
                <?php } ?>
            </div>

            <div class="text-surat">
                <p>Yang bertanda tangan di bawah ini, selaku Kepala Desa Kujangsari, KEC. Langensari, Kota Banjar,
                    dengan sebenarnya menerangkan bahwa:</p>
                <table class="table-info ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Nama Bayi</td>
                            <td>:</td>
                            <td><?= $d->nama_bayi ?></td>
                        </tr>
                        <tr>
                            <td>No. KK</td>
                            <td>:</td>
                            <td><?= $d->no_kk ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?= $d->jekel_b ?></td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal Lahir</td>
                            <td>:</td>
                            <td><?= $d->tempat_lahir_b ?>, <?= $d->tanggal_lahir_b ?></td>
                        </tr>
                        <tr>
                            <td>Anak Ke</td>
                            <td>:</td>
                            <td><?= $d->anak_ke ?></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap Ayah</td>
                            <td>:</td>
                            <td><?= $d->ayah ?></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap Ibu</td>
                            <td>:</td>
                            <td><?= $d->ibu ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td><?= $d->agama_b ?></td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>:</td>
                            <td><?= $d->kewarganegaraan_b ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?= $d->alamat_b ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <p>Demikian Surat Pengantar Akte Kelahiran ini dibuat agar digunakan sebagaimana mestinya.</p>
            </div>

            <div class="kades float-end">
                <span class="mb-n2">Kujangsari, <?= date('d M Y') ?></span>
                <p>KEPALA DESA KUJANGSARI</p>
                <img src="<?= base_url('./assets/ttd/ttd_kepala.png') ?>" class="ttd-kades">
                <p class="fw-bold kades-name">MUJAHID, S.Ag</p>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
    <script src="<?= base_url(); ?>./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>