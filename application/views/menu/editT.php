<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url('asetedit/'); ?>images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asetedit/'); ?>vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asetedit/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asetedit/'); ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asetedit/'); ?>vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asetedit/'); ?>vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asetedit/'); ?>vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asetedit/'); ?>vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asetedit/'); ?>vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asetedit/'); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('asetedit/'); ?>css/main.css">
	<!--===============================================================================================-->
</head>

<body>


	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="<?= base_url('asetedit/'); ?>images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(<?php echo base_url('asetedit/images/bg.jpg') ?>);">
				<span align="center" class="contact100-form-title-1">
					Edit Data Peserta
				</span>

			</div>

			<form class="contact100-form validate-form" method="post" ">
				<div class="wrap-input100">
					<span class="label-input100">No. Tentor :</span>
					<input class="input100" type="text" name="id" value="<?=isset($default['ID_TENTOR'])? $default['ID_TENTOR'] : ""?>">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">Nama:</span>
					<input class="input100" type="text" name="nama" value="<?=isset($default['NAMA_TENTOR'])? $default['NAMA_TENTOR'] : ""?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Jenis Kelamin:</span>
					<select name="jk" id="jk" class="form-control">
                    <option selected>Pilih Jenis Kelamin</option>
                    <?php foreach ($jk as $key => $value) { ?>
                    	<?php 
                    		if ($default['JK'] == $value->JK) {?>
                    			<option value="<?= $value->ID_JK ?>" selected>
                           			 <?= $value->JK ?></option>
                    		<?php }
                    		else{?>

                    		<option value="<?= $value->ID_JK ?>" >
                            <?= $value->JK ?></option>

                    		<?php }
                    	
                        
                    } ?>
                </select>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">Keahlian:</span>
					<input class="input100" type="text" name="ahli" value="<?=isset($default['KEAHLIAN'])? $default['KEAHLIAN'] : ""?>">
					<span class="focus-input100"></span>
				</div>

				
				
				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">Alamat:</span>
					<input class="input100" type="text" name="alamat" value="<?=isset($default['ALAMAT_TENTOR'])? $default['ALAMAT_TENTOR'] : ""?>">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">No. Hp:</span>
					<input class="input100" type="text" name="nohp" value="<?=isset($default['NOHP_TENTOR'])? $default['NOHP_TENTOR'] : ""?>">
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit"  name="tombol_submit" style="background-color:  #609E10 ;">
						<span>
							Simpan
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="<?= base_url('asetedit/'); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('asetedit/'); ?>vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('asetedit/'); ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('asetedit/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('asetedit/'); ?>vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('asetedit/'); ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('asetedit/'); ?>vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('asetedit/'); ?>vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('asetedit/'); ?>https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="<?= base_url('asetedit/'); ?>js/map-custom.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('asetedit/'); ?>js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="<?= base_url('asetedit/'); ?>https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>

</body>

</html>