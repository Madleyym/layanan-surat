<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-4 col-sm-12">
			<div class="card pt-2">
				<div class="card-body">
					<div class="text-center mb-2">
						<style>
							.card {
								margin: 0 auto;
								padding: 0;
							}

							.card-body {
								padding: 20px;
							}

							.container {
								padding: 0;
							}
						</style>
						<img src="<?= base_url() ?>./assets/logo/logo.png" height="100" class='mb-3'>
						<h5><strong>APLIKASI PELAYANAN SURAT</strong></h5>
						<h6><strong>DESA KUJANGSARI</strong></h6>
					</div>
					<h5 class="font-bold text-center mt-4">Silahkan Login</h5>
					<div class="card mt-4 mb-2">
						<div class="card-body">
							<div class="container">
								<div class="row">
									<div class="col">
										<a class="btn btn-success btn-sm w-100 font-bold text-dark" href="<?= base_url('user/login') ?>">Warga</a>
									</div>
									<div class="col">
										<a class="btn btn-warning btn-sm w-100 font-bold text-dark" href="<?= base_url('administrator/login') ?>">Administrator</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>