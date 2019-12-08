<div class="container">
		<h1>EDIT ADMIN</h1>
		
		<form method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2">
					No
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="no" value="<?=isset($default['NO'])? $default['NO'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nama					
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama" value="<?=isset($default['NAME'])? $default['NAME'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Email					
				</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" value="<?=isset($default['EMAIL'])? $default['EMAIL'] : ""?>">
				</div>
			</div>
			<center>
				<button name="tombol_submit" class="btn btn-primary">
					Simpan
				</button>
			</center>


		</form>
	</div>
</div>