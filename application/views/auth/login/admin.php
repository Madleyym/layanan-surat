        <div class="container">
        	<div class="row">
        		<div class="col-md-4 col-sm-12 mx-auto">
        			<div class="card pt-2">
        				<div class="card-body">
        					<div class="text-center mb-2">
        						<img src="<?= base_url() ?>./assets/logo/logo.png" height="100" class='mb-3'>
        						<!-- <h3>Sign In</h3> -->
        						<h5><strong>APLIKASI PELAYANAN SURAT</strong></h5>
        						<h6><strong>DESA KUJANGSARI</strong></h6>
        					</div>
        					<form action="<?= base_url('administrator-login-proses'); ?>" method="post" enctype="multipart/form-data">
        						<div class="form-group position-relative has-icon-left">
        							<label for="username">Alamat Email</label>
        							<div class="position-relative">
        								<input type="email" name="email" class="form-control" id="username">
        								<div class="form-control-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
        										<path fill="#242424" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
        									</svg>
        								</div>
        								<small class="text-center"><?= form_error('email') ?></small>
        							</div>
        						</div>
        						<div class="form-group position-relative has-icon-left">
        							<div class="clearfix">
        								<label for="password">Password</label>
        							</div>
        							<div class="position-relative">
        								<input type="password" name="password" class="form-control" id="password">
        								<div class="form-control-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
        										<path fill="#242424" d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z" />
        									</svg>
        								</div>
        								<small class="text-center"><?= form_error('password') ?></small>
        							</div>
        						</div>

        						<div class='form-check clearfix my-4'>
        							<div class="float-right">
        								<!-- <a href="auth-register.html">Register disini !</a> -->
        							</div>
        						</div>
        						<div class="clearfix">
        							<a href="<?= base_url('login') ?>" type="button" class="btn btn-danger float-left">Kembali</a>
        							<button class="btn btn-primary float-right">Login</button>
        						</div>
        					</form>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>