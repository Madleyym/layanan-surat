<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Histori Surat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .img-icon {
            max-width: 15%;
        }

        @media screen and (max-width: 346px) {
            .img-icon {
                max-width: 3%;
            }
        }

        .card {
            margin: 10px;
        }

        .custom-alert-3 {
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        .badge.bg-danger {
            background-color: #dc3545;
        }

        .alert-text {
            justify-content: center;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="main-content container-fluid">
        <div class="page-title text-center">
            <h5><strong>List Histori Surat</strong></h5>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row m-3">
                        <!-- Card 1 -->
                        <div class="col-md-4 col-sm-6 mb-3 d-flex align-items-stretch">
                            <a href="<?= base_url('history-surat-tidak-mampu') ?>" class="w-100">
                                <div class="unread custom-alert-3 bg-white h-100" role="alert">
                                    <div class="alert-text d-flex flex-column align-items-center justify-content-center h-100 p-4">
                                        <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon mb-2">
                                        <h6 class="font-bold my-auto">Surat Keterangan Tidak Mampu
                                            <span class="badge bg-danger text-white"><?= $sktm['jumlah'] ?></span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-md-4 col-sm-6 mb-3 d-flex align-items-stretch">
                            <a href="<?= base_url('history-surat-usaha') ?>" class="w-100">
                                <div class="unread custom-alert-3 bg-white h-100" role="alert">
                                    <div class="alert-text d-flex flex-column align-items-center justify-content-center h-100 p-4">
                                        <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon mb-2">
                                        <h6 class="font-bold my-auto">Surat Keterangan Usaha
                                            <span class="badge bg-danger text-white"><?= $sku['jumlah'] ?></span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Card 3 -->
                        <div class="col-md-4 col-sm-6 mb-3 d-flex align-items-stretch">
                            <a href="<?= base_url('history-surat-domisili') ?>" class="w-100">
                                <div class="unread custom-alert-3 bg-white h-100" role="alert">
                                    <div class="alert-text d-flex flex-column align-items-center justify-content-center h-100 p-4">
                                        <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon mb-2">
                                        <h6 class="font-bold my-auto">Surat Keterangan Domisili
                                            <span class="badge bg-danger text-white"><?= $skd['jumlah'] ?></span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Card 4 -->
                        <div class="col-md-4 col-sm-6 mb-3 d-flex align-items-stretch">
                            <a href="<?= base_url('history-surat-keterangan-pengantar') ?>" class="w-100">
                                <div class="unread custom-alert-3 bg-white h-100" role="alert">
                                    <div class="alert-text d-flex flex-column align-items-center justify-content-center h-100 p-4">
                                        <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon mb-2">
                                        <h6 class="font-bold my-auto">Surat Keterangan Pengantar
                                            <span class="badge bg-danger text-white"><?= $skp['jumlah'] ?></span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Card 5 -->
                        <div class="col-md-4 col-sm-6 mb-3 d-flex align-items-stretch">
                            <a href="<?= base_url('history-surat-kelahiran') ?>" class="w-100">
                                <div class="unread custom-alert-3 bg-white h-100" role="alert">
                                    <div class="alert-text d-flex flex-column align-items-center justify-content-center h-100 p-4">
                                        <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon mb-2">
                                        <h6 class="font-bold my-auto">Surat Pengantar Akte Kelahiran
                                            <span class="badge bg-danger text-white"><?= $spak['jumlah'] ?></span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Card 6 -->
                        <div class="col-md-4 col-sm-6 mb-3 d-flex align-items-stretch">
                            <a href="<?= base_url('history-surat-kematian') ?>" class="w-100">
                                <div class="unread custom-alert-3 bg-white h-100" role="alert">
                                    <div class="alert-text d-flex flex-column align-items-center justify-content-center h-100 p-4">
                                        <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon mb-2">
                                        <h6 class="font-bold my-auto">Surat Keterangan Kematian
                                            <span class="badge bg-danger text-white"><?= $skk['jumlah'] ?></span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>