<?php
if ($this->session->userdata('role_id') == 3) {
    //get notifikasi
    $skd = $this->M_notifikasi->nSkd();
    $sktm = $this->M_notifikasi->nSktm();
    $sku = $this->M_notifikasi->nSku();
    $skp = $this->M_notifikasi->nSkp();
    $spak = $this->M_notifikasi->nSpak();
    $skk = $this->M_notifikasi->nSkk();

    //jumlah data notifikasi surat users
    $all = $skd['jumlah'] + $sktm['jumlah'] + $sku['jumlah'] + $skp['jumlah'] + $spak['jumlah'] + $skk['jumlah'];
}

if ($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2) {
    //get notifikasi admin
    $Skd = $this->M_notifikasi->aSkd();
    $Sktm = $this->M_notifikasi->aSktm();
    $Sku = $this->M_notifikasi->aSku();
    $Skp = $this->M_notifikasi->aSkp();
    $Spak = $this->M_notifikasi->aSpak();
    $Skk = $this->M_notifikasi->aSkk();

    $adminAll = $Skd['jumlah'] + $Sktm['jumlah'] + $Sku['jumlah'] + $Skp['jumlah'] + $Spak['jumlah'] + $Skk['jumlah'];
}

?>
<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header text-center">
            <img class="h-auto mb-4" src="<?= base_url() ?>./assets/logo/logo.png" width="40%" height="150px">
            <h4 class="font-weight-bold">DESA KUJANGSARI</h4>
            <h4 class="font-weight-bold">KOTA BANJAR</h4>
        </div>
        <div class="sidebar-menu">
            <ul class="menu mt-2">
                <!-- <li class='sidebar-title'>Main Menu</li> -->
                <?php if ($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2 || $this->session->userdata('role_id') == 3) { ?>
                    <li class="sidebar-item <?= $this->uri->segment(1) == 'dashboard' ? 'active ' : '' ?>">
                        <a href="<?= base_url('dashboard') ?>" class='sidebar-link'>
                            <i class="bi bi-speedometer"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($this->session->userdata('role_id') == 1) { ?>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                <path fill="#0d6efd" fill-rule="evenodd" d="M13.854.146a.5.5 0 0 1 .113.534l-5 13a.5.5 0 0 1-.922.027l-2.091-4.6L9.03 6.03a.75.75 0 0 0-1.06-1.06L4.893 8.046l-4.6-2.09a.5.5 0 0 1 .028-.923l13-5a.5.5 0 0 1 .533.113" clip-rule="evenodd" />
                            </svg>
                            <span>Verifikasi Surat</span>
                        </a>
                        <ul class="submenu
                        <?=
                        $this->uri->segment(1) == 'verifikasi-surat-domisili' ||
                            $this->uri->segment(1) == 'verifikasi-surat-usaha' ||
                            $this->uri->segment(1) == 'verifikasi-surat-tidak-mampu' ||
                            $this->uri->segment(1) == 'verifikasi-surat-keterangan-pengantar' ||
                            $this->uri->segment(1) == 'verifikasi-surat-kelahiran' ||
                            $this->uri->segment(1) == 'verifikasi-surat-kematian'
                            ? 'active ' : ''
                        ?>">
                            <li>

                                <a class="pl-3 pr-3 d-flex justify-content-between align-items-center" href="<?= base_url('verifikasi-surat-tidak-mampu') ?>">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                            <path fill="none" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" d="M6 8L.5 5.5l13-5l-5 13zm0 0l3-3" />
                                        </svg><span> Surat Tidak Mampu</span>
                                    </div>
                                    <span class="badge badge bg-danger text-white"><?= $Sktm['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="pl-3 pr-3 d-flex justify-content-between align-items-center" href="<?= base_url('verifikasi-surat-usaha') ?>">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                            <path fill="none" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" d="M6 8L.5 5.5l13-5l-5 13zm0 0l3-3" />
                                        </svg><span> Surat Usaha</span>
                                    </div>
                                    <span class="badge badge bg-danger text-white"><?= $Sku['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="pl-3 pr-3 d-flex justify-content-between align-items-center" href="<?= base_url('verifikasi-surat-domisili') ?>">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                            <path fill="none" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" d="M6 8L.5 5.5l13-5l-5 13zm0 0l3-3" />
                                        </svg><span> Surat Domisili</span>
                                    </div>
                                    <span class="badge badge bg-danger text-white"><?= $Skd['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="pl-3 pr-3 d-flex justify-content-between align-items-center" href="<?= base_url('verifikasi-surat-keterangan-pengantar') ?>">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                            <path fill="none" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" d="M6 8L.5 5.5l13-5l-5 13zm0 0l3-3" />
                                        </svg><span> Keterangan Pengantar</span>
                                    </div>
                                    <span class="badge badge bg-danger text-white"><?= $Skp['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="pl-3 pr-3 d-flex justify-content-between align-items-center" href="<?= base_url('verifikasi-surat-kelahiran') ?>">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                            <path fill="none" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" d="M6 8L.5 5.5l13-5l-5 13zm0 0l3-3" />
                                        </svg><span> Surat Kelahiran</span>
                                    </div>
                                    <span class="badge badge bg-danger text-white"><?= $Spak['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="pl-3 pr-3 d-flex justify-content-between align-items-center" href="<?= base_url('verifikasi-surat-kematian') ?>">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                            <path fill="none" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" d="M6 8L.5 5.5l13-5l-5 13zm0 0l3-3" />
                                        </svg><span> Surat Kematian</span>
                                    </div>
                                    <span class="badge badge bg-danger text-white"><?= $Skk['jumlah'] ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-warga' || $this->uri->segment(1) == 'tambah-data-warga' || $this->uri->segment(1) == 'edit-warga' || $this->uri->segment(1) == 'detail-warga' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-warga') ?>" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Data Warga</span>
                        </a>
                    </li>
                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-users' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-users') ?>" class='sidebar-link'>
                            <i class="bi bi-person-lines-fill"></i>
                            <span>Data Users</span>
                        </a>
                    </li>
                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-administrator' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-administrator') ?>" class='sidebar-link'>
                            <i class="bi bi-person-circle"></i>
                            <span>Administrator</span>
                        </a>
                    </li>

                <?php } else if ($this->session->userdata('role_id') == 2) { ?>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                <path fill="#0d6efd" fill-rule="evenodd" d="M13.854.146a.5.5 0 0 1 .113.534l-5 13a.5.5 0 0 1-.922.027l-2.091-4.6L9.03 6.03a.75.75 0 0 0-1.06-1.06L4.893 8.046l-4.6-2.09a.5.5 0 0 1 .028-.923l13-5a.5.5 0 0 1 .533.113" clip-rule="evenodd" />
                            </svg>
                            <span>Verifikasi Surat</span>
                            <!-- <span class="badge badge bg-danger text-white"><?= $adminAll; ?></span> -->
                        </a>
                        <ul class="submenu
                        <?=
                        $this->uri->segment(1) == 'verifikasi-surat-domisili' ||
                            $this->uri->segment(1) == 'verifikasi-surat-usaha' ||
                            $this->uri->segment(1) == 'verifikasi-surat-tidak-mampu' ||
                            $this->uri->segment(1) == 'verifikasi-surat-keterangan-pengantar' ||
                            $this->uri->segment(1) == 'verifikasi-surat-kelahiran' ||
                            $this->uri->segment(1) == 'verifikasi-surat-kematian'
                            ? 'active ' : ''
                        ?>">
                            <li>
                                <a class="pl-3 pr-3 d-flex justify-content-between align-items-center" href="<?= base_url('verifikasi-surat-tidak-mampu') ?>">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                            <path fill="none" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" d="M6 8L.5 5.5l13-5l-5 13zm0 0l3-3" />
                                        </svg>
                                        <span> Surat Tidak Mampu</span>
                                    </div>
                                    <span class="badge badge bg-danger text-white"><?= $Sktm['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="pl-3 pr-3 d-flex justify-content-between align-items-center" href="<?= base_url('verifikasi-surat-usaha') ?>">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                            <path fill="none" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" d="M6 8L.5 5.5l13-5l-5 13zm0 0l3-3" />
                                        </svg>
                                        <span> Surat Usaha</span>
                                    </div>
                                    <span class="badge badge bg-danger text-white"><?= $Sku['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="pl-3 pr-3 d-flex justify-content-between align-items-center" href="<?= base_url('verifikasi-surat-domisili') ?>">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                            <path fill="none" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" d="M6 8L.5 5.5l13-5l-5 13zm0 0l3-3" />
                                        </svg>
                                        <span> Surat Domisili</span>
                                    </div>
                                    <span class="badge badge bg-danger text-white"><?= $Skd['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="pl-3 pr-3 d-flex justify-content-between align-items-center" href="<?= base_url('verifikasi-surat-keterangan-pengantar') ?>">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                            <path fill="none" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" d="M6 8L.5 5.5l13-5l-5 13zm0 0l3-3" />
                                        </svg>
                                        <span> Keterangan Pengantar</span>
                                    </div>
                                    <span class="badge badge bg-danger text-white"><?= $Skp['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="pl-3 pr-3 d-flex justify-content-between align-items-center" href="<?= base_url('verifikasi-surat-kelahiran') ?>">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                            <path fill="none" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" d="M6 8L.5 5.5l13-5l-5 13zm0 0l3-3" />
                                        </svg>
                                        <span> Surat Kelahiran</span>
                                    </div>
                                    <span class="badge badge bg-danger text-white"><?= $Spak['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="pl-3 pr-3 d-flex justify-content-between align-items-center" href="<?= base_url('verifikasi-surat-kematian') ?>">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                            <path fill="none" stroke="#0d6efd" stroke-linecap="round" stroke-linejoin="round" d="M6 8L.5 5.5l13-5l-5 13zm0 0l3-3" />
                                        </svg>
                                        <span> Surat Kematian</span>
                                    </div>
                                    <span class="badge badge bg-danger text-white"><?= $Skk['jumlah'] ?></span>
                                </a>
                            </li>

                        <?php } else if ($this->session->userdata('role_id') == 3) {  ?>
                            <li class="sidebar-item  <?= $this->uri->segment(1) == 'list-surat' ? 'active' : '' ?>">
                                <a href="<?= base_url('list-surat') ?>" class='sidebar-link'>
                                    <i class="bi bi-envelope-plus-fill"></i>
                                    <span>Pelayanan Surat</span>
                                </a>
                            </li>
                            <li class="sidebar-item <?= $this->uri->segment(1) == 'histori-surat' ? 'active' : '' ?>">
                                <a href="<?= base_url('histori-surat') ?>" class='sidebar-link'>
                                    <i class="bi bi-clock-history"></i>
                                    <span>Surat</span>
                                    <span class="badge badge bg-danger text-white"><?= $all ?></span>
                                </a>
                            </li>
                        <?php } ?>
                        </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>

<div id="main">
    <nav class="navbar navbar-header navbar-expand navbar-light">
        <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
        <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <h4 style="margin-left:10px; margin-top:15px;">Aplikasi Pelayanan Surat</h4>
            <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="avatar mr-1">
                            <img src="<?= base_url(); ?>./assets/images/avatar/user-avatar.png" alt="" srcset="">
                        </div>
                        <div class="d-none d-md-block d-lg-inline-block">Hi, <?= $this->session->userdata('nama') ?></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                        <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                        <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="<?= base_url('logout') ?>"><i data-feather="log-out"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>